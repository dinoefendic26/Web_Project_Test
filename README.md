# Web_Project_Test

Setup project and FlightPHP:
1. Open project directory
2. Create empty composer.json file, which will keep list of installed packages and their versions
    {
        "require": {}
    }
3. Run composer install
4. Now, there should be created vendor folder within project
5. Create a .gitignore file and write vendor in it. Folders and files written in gitignore will not be committed
6. Run the following command to install FlightPHP using composer: composer require mikecao/flight
7. Create .htaccess file and add following lines to it:
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php [QSA,L]
8. Make a rest folder and make /dao, /services, /routes in the rest folder.
9. Create a config.php file inside rest folder for database connection