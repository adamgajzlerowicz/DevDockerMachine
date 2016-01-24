FROM ubuntu

# Install dependencies
RUN apt-get update -y
RUN apt-get install -y git curl apache2 php5 libapache2-mod-php5 php5-mcrypt php5-mysql

# Install app
RUN rm -rf /var/www/*
#VOLUME src /var/www/html

# Configure apache
RUN a2enmod rewrite
RUN chown -R www-data:www-data /var/www

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

#CMD ["/usr/sbin/apache2", "-D",  "FOREGROUND"]
CMD /usr/sbin/apache2ctl -D FOREGROUND

#example run:  
#docker run -p 80:80 -v /home/adam/projects/docker-test/src:/var/www/html d5e 