FROM	alpine

RUN	apk update
RUN	apk add openrc openssl vsftpd
RUN apk add --no-cache --upgrade bash && rm -rf /var/cache/apk/*
RUN mkdir -p /var/ftp

COPY ./vsftpd.conf /etc/vsftpd/vsftpd.conf
COPY start.sh /start.sh
RUN chmod u+x /start.sh
RUN	mkdir -p /ftp_anon /wquinoa
RUN	printf "move files from the window on the left here\n" > /wquinoa/Readme.txt
RUN	printf "wquinoa\nwquinoa\n" | adduser wquinoa -s /bin/false -h /wquinoa
RUN	printf "/bin/false\n" >> /etc/shells
RUN	chown wquinoa:wquinoa /wquinoa
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=AB/ST=CD/L=EF/O=21/CN=wquinoa' -keyout /etc/vsftpd/vsftpd.key -out /etc/vsftpd/vsftpd.crt

EXPOSE	20 21 21000-22000

ENTRYPOINT [ "sh", "start.sh" ]