FROM alpine:3.12

RUN apk update
RUN apk add nginx openssl supervisor
RUN apk add telegraf --repository http://dl-cdn.alpinelinux.org/alpine/edge/community/ --allow-untrusted --no-cache

# Copy nginx.conf
RUN		mkdir -p			/run/nginx
COPY	./telegraf.conf		/etc/telegraf/
COPY	./nginx.conf		/etc/nginx/conf.d/default.conf
COPY	./supervisor.conf	/etc/supervisor.conf
COPY	./start.sh			/

# Generate SSL
RUN		openssl req -x509 -nodes -days 365 -subj "/C=RU/ST=Russia/L=Kazan/O=innoaca/OU=School21/CN=fgeorgan" -newkey rsa:2048 -keyout /etc/ssl/nginx-selfsigned.key -out /etc/ssl/nginx-selfsigned.crt; 

# Start
RUN		chmod +x /start.sh

EXPOSE	80 443

CMD		./start.sh