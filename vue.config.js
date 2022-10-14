const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  transpileDependencies: true
})
module.exports = {
  configureWebpack: config => {
    config.output.filename = 'js/[name].js'
    config.output.chunkFilename = 'js/[name].js';
  }
}
