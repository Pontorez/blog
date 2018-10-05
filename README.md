1. ```git clone https://github.com/Pontorez/blog```
2. ```cd blog```
3. ```php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"```
4. ```php composer-setup.php```
5. ```php -r "unlink('composer-setup.php');"```
6. ```php composer.phar install```
7. Set database connection params in ```config/db.php```
8. ```./yii migrate/up```
9. Import sql.sql to the database
10. Configure new web server vhost with document root pointing to ```web``` folder
