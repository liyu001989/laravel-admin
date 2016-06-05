# laravel-admin-demo

工作中使用 adminLTE 写的后台，挺好用的，整理一下，写个demo

参考了viease，phphub-server等项目

使用bower管理前端的库(adminLTE, jQuery, Bootstrap...), 项目css，js，放在asset中对应的目录中，使用gulp将这些包copy，压缩到public对应的目录里面去。我觉得这应该是laravel比较好的打开方式

最后所有的css合并成一个all.css，使用requirejs异步加载所有的js

没写完，一点一点弄

## usage

### normal
- install composer, npm, bower, gulp
- composer install
- npm install
- bower install
- cp .env.example .env
- php artisan key:generate
- configure your .env
- php artisan migrate
- php artisan db:seed
- gulp

### maybe this
- install envoy
- envoy run init
- configure your .env
- envoy run database
