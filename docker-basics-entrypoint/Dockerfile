FROM ubuntu:latest
RUN apt update \
    && apt upgrade -y \
    && apt install -y nginx

COPY docker-entrypoint.sh /usr/local/bin/
ENTRYPOINT ["docker-entrypoint.sh"]