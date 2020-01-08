
#!/bin/sh
service php7.3-fpm start
service nginx reload
chmod go+rw /run/php/php7.3-fpm.sock
/etc/init.d/php7.3-fpm start
chmod 660 /var/www/html/wordpress/phpmyadmin/config.inc.php
chown -R www-data:www-data /var/www/html/wordpress/phpmyadmin
chown -R mysql: /var/lib/mysql;
service mysql start;
service nginx start;

mysql -u root -e "CREATE USER 'bone'@'localhost' IDENTIFIED BY 'Abdelait12.';"
mysql -u root -e "CREATE DATABASE wordpress; use wordpress; source wordpress.sql;"
mysql -u root -e "GRANT ALL PRIVILEGES ON wordpress.* TO bone@localhost; FLUSH PRIVILEGES;"

/bin/bash