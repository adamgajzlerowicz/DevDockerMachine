FROM debian

RUN apt-get update -y
RUN apt-get install -y git curl apache2 php5 vim libapache2-mod-php5 php5-mcrypt php5-mysql php5-xdebug
RUN rm -rf /var/www/*

# Configure apache
RUN a2enmod rewrite
RUN chown -R www-data:www-data /var/www
RUN rm /etc/php5/apache2/php.ini
ADD ./vm/php/php.ini /etc/php5/apache2/php.ini
RUN rm /etc/apache2/sites-available/ -rf
ADD /vm/apache/sites-available /etc/apache2/sites-available

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN a2ensite sme.conf

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid


CMD /usr/sbin/apache2ctl -D FOREGROUND

#docker run -p 80:80 -v /home/adam/projects/docker-test/src:/var/www/html d5e 

