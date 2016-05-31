@servers(['web' => 'localhost'])

@task('init')
    composer install
    npm install
    bower install
    cp .env.example .env
    php artisan key:generate
    gulp
@endtask

@task('database')
    php artisan migrate
    php artisan db:seed
@endtask
