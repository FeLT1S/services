FROM alpine

RUN apk update && apk upgrade
RUN apk add nginx openssl && mkdir -p run/nginx

COPY ./srcs/default /etc/nginx/conf.d/deafult.conf
COPY ./srcs/server.crt /etc/ssl/certs/nginx.crt
COPY ./srcs/server.key /etc/ssl/certs/nginx.key
COPY ./srcs/start.sh /

RUN chmod +x start.sh
EXPOSE 80 443
ENTRYPOINT [ "sh", "/start.sh" ]