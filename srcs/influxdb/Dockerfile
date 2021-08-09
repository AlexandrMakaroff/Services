FROM	alpine:3.12

RUN		apk update
RUN		apk add influxdb supervisor
RUN		apk add telegraf --repository http://dl-cdn.alpinelinux.org/alpine/edge/community/ --allow-untrusted --no-cache

COPY	supervisor.conf	/etc/supervisord.conf
COPY	start.sh		/
COPY	telegraf.conf	/etc/telegraf/

VOLUME	["var/lib/influxdb"]

RUN		chmod +x /start.sh

EXPOSE	8086

CMD		./start.sh