# laravel-admin-demo

工作中使用 adminLTE 写的后台，挺好用的，整理一下，写个demo

参考了viease，phphub-server两个项目，使用bower管理css，js，然后使用gulp将这些包copy，压缩到public对应的目录里面去。所有的css合并成一个all.css，使用requirejs异步加载所有的js

没写完，一点一点弄

## usage

### normal
- install composer npm bower gulp
- composer install
- npm install
- bower install
- cp .env.example .env
- php artisan key:generate
- configure your .env
- php artisan migrate
- php artisan db:seed
- gulp
