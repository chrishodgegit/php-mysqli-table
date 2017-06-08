# php-mysqli-table

Setup
 - This repo assumes you've already seutp a LAMP server and have db credentials
 - 1. run the book.sql on your database to create a table and populate data
 - 2. copy the files .credentials.php & test-table-001.php to your document root
      - for httpd /var/www/html/ 
      - for apache2 I suggess seeing the below url
https://www.digitalocean.com/community/questions/sites-available-and-sites-enabled
 - 3. browse to http://<yourip>/test-table-001.php and you should see your table!

book.sql
 - this file will create the table book and populate it with one row

.credentials.php
 - This is a hidden file containing your database credentials. 
  - Hidden means hidden from the linux file system default view
  - to prevent people from seeing this in browsers see http://www.htaccess-guide.com/
 - Update the username and password within it this file

book.sql
 - this file will create the table book and populate it with one row

test-table-001.php
 - this is the example php, review its // comments to understand how it operates
