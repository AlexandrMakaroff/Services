FROM alpine:3.12

RUN		apk update && apk add --no-cache vsftpd openssl supervisor \
			telegraf --repository http://dl-cdn.alpinelinux.org/alpine/latest-stable/community/ 		--allow-untrusted
RUN		mkdir -p /var/fgeorgan &&\
			chmod +x /var/fgeorgan &&\
			adduser -D fgeorgan && echo "fgeorgan:1" | chpasswd
COPY	/vsftpd.conf		/etc/vsftpd/vsftpd.conf
COPY	/supervisor.conf	/etc/supervisord.conf
COPY	/telegraf.conf		/etc/telegraf/telegraf.conf
RUN		openssl req -newkey rsa:4096 -days 365 -nodes -x509 -subj \
		"/C=RU/ST=Kazan/L=Kazan/O=Ecole42/OU=School21/CN=fgeorgan/emailAddress=fgeorgan@student.21-school.ru" \
		-keyout /etc/ssl/private/vsftpd.key -out /etc/ssl/certs/vsftpd.pem
EXPOSE	21 21012
RUN		chmod +x	/etc/vsftpd/vsftpd.conf
CMD		supervisord