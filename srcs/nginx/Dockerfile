FROM alpine

RUN apk update && apk upgrade
RUN apk add nginx openssl openrc openssh supervisor && mkdir -p run/nginx

COPY ./srcs/default /etc/nginx/conf.d/deafult.conf
COPY ./srcs/start.sh /
COPY ./srcs/supervisor.conf /etc/supervisord.conf
RUN chmod +rw /etc/supervisord.conf &&  printf "rootdlik\nrootdlik\n" | adduser jiandre
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=RF/ST=MSK/L=SCH/O=21/CN=jiandre' -keyout /etc/ssl/certs/nginx.key -out /etc/ssl/certs/nginx.crt
RUN chmod +x start.sh

EXPOSE 80 443
ENTRYPOINT [ "sh", "/start.sh" ]