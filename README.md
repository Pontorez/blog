1. ```git clone https://github.com/Pontorez/blog```
2. ```cd blog```
3. ```php -r "readfile('https://getcomposer.org/installer');" | php```
4. ```php composer.phar global require "fxp/composer-asset-plugin:^1.2.0"```
5. ```php composer.phar install```
6. Set database connection params in ```config/db.php```
7. ```./yii migrate/up```
8. Import sql.sql to the database
8. Configure new web server vhost with document root pointing to ```web``` folder
