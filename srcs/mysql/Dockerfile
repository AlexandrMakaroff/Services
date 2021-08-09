FROM	alpine:3.12

RUN		apk update
RUN		apk add mariadb mariadb-client supervisor\
		&& mkdir -p /run/mysqld/
RUN		apk add telegraf --repository http://dl-cdn.alpinelinux.org/alpine/edge/community/ --allow-untrusted --no-cache

COPY	./telegraf.conf	/etc/telegraf/
COPY	supervisor.conf	/etc/supervisord.conf
COPY	my.cnf			/etc/
COPY	wordpress.sql	/
COPY	start.sh		/

EXPOSE	3306

RUN		chmod +x /start.sh

VOLUME	["var/lib/mysql"]

CMD		./start.sh