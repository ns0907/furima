const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  transpileDependencies: true,
  configureWebpack: {
    watchOptions :{
      aggregateTimeout: 300,
      poll: 1000
    }
  },
  // publicPath: '/hoge/',
  devServer: {
    allowedHosts: ['homestead.test'],
    compress: true,
  },
})
