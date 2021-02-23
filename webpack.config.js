const fs = require('fs');
const path = require('path');
const moment = require('moment');
const webpack = require('webpack');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const PackageInfo = require('./package.json');
const {
	CleanWebpackPlugin
} = require('clean-webpack-plugin');
module.exports = {
	entry: {
		admin: ['./dev/exploit/entry/admin', './dev/exploit/script/admin'],
		layui: ['./dev/exploit/layui/layui', './dev/exploit/entry/layui', './dev/exploit/script/layui'],
		plugin: ['./dev/exploit/entry/plugin', './dev/exploit/script/plugin'],
		common: ['./dev/exploit/script/common'],
		canvas: ['./dev/exploit/script/canvas'],
	},
	plugins: [
		new CleanWebpackPlugin({
			cleanOnceBeforeBuildPatterns: [
				path.join(__dirname, './static/style'),
				path.join(__dirname, './static/script'),
				path.join(__dirname, './static/font')
			],
		}),
		new CopyWebpackPlugin({
			patterns: [{
				from: path.join(__dirname, './dev/exploit/face'),
				to: path.join(__dirname, './static/face'),
			}, {
				from: path.join(__dirname, './dev/exploit/image'),
				to: path.join(__dirname, './static/image'),
			}, {
				from: path.join(__dirname, './dev/exploit/layui'),
				to: path.join(__dirname, './static/layui'),
			}]
		}),
		function() {
			PackageInfo.version = moment().format('YYYY.MMDD.HHmm');
			fs.writeFileSync(path.join(__dirname, './package.json'), JSON.stringify(PackageInfo, null, 2));
		},
	],
	resolve: {
		alias: {
			'~': path.join(__dirname, './dev/exploit')
		},
		extensions: ['.js', '.css', '.json']
	},
	output: {
		path: path.join(__dirname, './static'),
		filename: './script/[name].js'
	},
	module: {
		rules: [{
			test: require.resolve('jquery'),
			loader: 'expose-loader',
			options: {
				exposes: ['$', 'jQuery', 'window.$', 'window.jQuery'],
			}
		}, {
			test: /\.js$/,
			use: 'babel-loader?cacheDirectory',
			include: path.join(__dirname, './dev/exploit'),
			exclude: /node_modules/
		}, {
			test: /\.(sa|sc|c)ss$/,
			use: [MiniCssExtractPlugin.loader, 'css-loader'],
		}, {
			test: /\.(gif|png|jpg|jpeg|ico)$/i,
			use: {
				loader: 'url-loader',
				options: {
					name: '[name].[ext]?v=[hash:8]',
					publicPath: '../image/',
					outputPath: './image/',
					limit: 10240
				}
			}
		}, {
			test: /\.(woff2|woff|svg|eot|ttf)\??.*$/i,
			use: {
				loader: 'file-loader',
				options: {
					name: '[name].[ext]?v=[hash:8]',
					publicPath: '../font/',
					outputPath: './font/',
				}
			}
		}]
	},
	optimization: {
		minimize: true,
		minimizer: [
			new TerserPlugin({
				extractComments: false,
				terserOptions: {
					safari10: true,
					ie8: true,
					output: {
						comments: /@name/i,
					}
				}
			}),
			new MiniCssExtractPlugin({
				filename: './style/[name].css',
			}),
			new CssMinimizerPlugin(),
			new webpack.BannerPlugin({
				banner: '@name:' + PackageInfo.name + '\n@author:' + PackageInfo.author + '\n@description:' + PackageInfo.description + '\n@website:' + PackageInfo.website + '\n@qqcode:' + PackageInfo.qqcode + '\n@telegram:' + PackageInfo.telegram + '\n@version:' + moment().format('YYYY.MMDD.HHmm')
			}),
		],
	},
	mode: 'production',
};
