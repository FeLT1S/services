# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: jiandre <jiandre@student.42.fr>            +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/09/10 15:49:50 by kwillum           #+#    #+#              #
#    Updated: 2020/10/20 19:01:58 by jiandre          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM	alpine

RUN	apk update
RUN	apk add openrc openssl vsftpd

RUN mkdir -p /var/ftp

COPY ./vsftpd.conf /etc/vsftpd/vsftpd.conf
COPY start.sh /start.sh
RUN chmod u+x /start.sh
RUN	mkdir -p /ftp_anon /jiandre
RUN	printf "test file\n" > /jiandre/Readme.txt
RUN	printf "rootdlik\nrootdlik\n" | adduser jiandre -s /bin/false -h /jiandre
RUN	printf "/bin/false\n" >> /etc/shells
RUN	chown jiandre:jiandre /jiandre
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=RF/ST=MSK/L=SCH/O=21/CN=jiandre' -keyout /etc/vsftpd/ftps.key -out /etc/vsftpd/ftps.crt

EXPOSE	20 21 21000-22000

ENTRYPOINT [ "sh", "start.sh" ]