@servers(['remote' => 'akop'])

@task('deploy', ['on' => 'remote'])
cd /var/www/akop.pro/
git fetch --all
git reset --hard origin/main
git pull origin main
composer install
php artisan view:cache
php artisan config:cache
php artisan route:cache
php artisan queue:restart
chown -R www-data:www-data /var/www/akop.pro
npm install
npm run prod
@endtask

@task('migrate-fresh-seed', ['on' => 'remote'])
cd /var/www/akop.pro
php artisan migrate:fresh --seed --force
@endtask
