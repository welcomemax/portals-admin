let elixir = require('laravel-elixir');

const config = {
    module: {
        loaders:[
            {
                test: /\.html$/,
                loader: 'html-loader'
            },
            {
                test: /\.styl$/,
                loader: 'style-loader!css-loader!stylus-loader'
            }
        ]
    }
};

elixir(function(mix) {
    mix
        .webpack('app.js', null, null, config)
        // .browserSync({
        //     proxy: '127.0.0.1:8000'
        // });
});