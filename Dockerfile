FROM   debian:buster

ENV    DEBIAN_FRONTEND noninteractive
EXPOSE 80 443
USER   root
 
RUN    apt update  -y && \
       apt upgrade -y && \
       cd tmp && \
       apt-get install wget vim  lsb-release gnupg  -y && \
       echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | debconf-set-selections && \
       wget http://repo.mysql.com/mysql-apt-config_0.8.13-1_all.deb && \
       dpkg -i mysql-apt-config_0.8.13-1_all.deb && \
       apt update -y && \
       apt install mysql-server  -y
RUN    apt-get install -y  apt-transport-https ca-certificates
RUN    apt-get install -y gnupg2 ;\
       wget https://nginx.org/keys/nginx_signing.key ; \
       apt-key   add nginx_signing.key  ;\
       apt-get -y update ; \
       apt-get -y install nginx php7.3-fpm php7.3-gd php7.3-mysql php7.3-curl php7.3-imap php7.3-mbstring php7.3-xml


COPY   ./srcs/start.sh /tmp
COPY   srcs/nginx.crt /etc/ssl/nginx/
COPY   srcs/nginx.key /etc/ssl/nginx/
COPY   srcs/wordpress/ /var/www/html/wordpress
COPY   srcs/wordpress.sql /wordpress.sql
COPY   srcs/default /etc/nginx/sites-available/default
COPY   srcs/phpmyadmin /var/www/html/wordpress/phpmyadmin


RUN    chmod 777 /tmp/start.sh


ENTRYPOINT ["bash","/tmp/start.sh"]


 