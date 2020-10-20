FROM alpine

RUN apk update && apk upgrade && apk add wget openssl \
    php7 php7-fpm php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session openssh &&\ 
    wget https://wordpress.org/latest.zip && unzip latest.zip && mv wordpress /www/ && rm latest.zip

COPY wp-config.php /www/
COPY install.sh start.sh
RUN chmod u+x start.sh

EXPOSE 5050
ENTRYPOINT [ "sh", "start.sh" ]