FROM	alpine:3.12

RUN		apk add wget php7 php7-fpm php7-mysqli php7-mbstring php7-json php7-session
RUN		apk add telegraf --repository http://dl-cdn.alpinelinux.org/alpine/edge/community/ --allow-untrusted --no-cache
RUN		wget https://files.phpmyadmin.net/phpMyAdmin/4.9.2/phpMyAdmin-4.9.2-all-languages.tar.gz
RUN		tar -xzvf phpMyAdmin-4.9.2-all-languages.tar.gz
RUN		rm -rf phpMyAdmin-4.9.2-all-languages.tar.gz
RUN		mkdir -p /www && mv phpMyAdmin-4.9.2-all-languages /www/phpmyadmin

RUN 	apk add nginx supervisor

COPY	telegraf.conf		/etc/telegraf/
COPY	supervisor.conf		/etc/supervisord.conf
COPY	config.inc.php		/www/phpmyadmin/
COPY	nginx.conf 			/etc/nginx/conf.d/default.conf
RUN		mkdir -p			/run/nginx
COPY	start.sh			.

RUN		chmod +x start.sh

EXPOSE	5000

CMD		./start.sh