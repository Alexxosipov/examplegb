FROM phpdockerio/php74-fpm:latest
WORKDIR "/application/master"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive
ARG CURRENT_UID=1001
ARG CURRENT_GID=1001

RUN addgroup --gid $CURRENT_GID backend
RUN useradd --create-home --gid $CURRENT_GID --uid $CURRENT_UID backend

RUN apt-get update \
    && apt-get -y --no-install-recommends install git cron php7.4-mysql php-redis php7.4-bcmath php7.4-gd php7.4-gmp php-imagick php7.4-soap php-yaml \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

RUN apt-get update -y
RUN apt-get install

RUN touch /var/log/cron.log

COPY start.sh /usr/local/bin/start
RUN chmod 777 /usr/local/bin/start
COPY cron/crontab /etc/cron.d/crontab
RUN chmod 777 /etc/cron.d/crontab
RUN crontab -u backend /etc/cron.d/crontab

RUN chmod 777 /etc/environment -R
RUN chmod 777 /run -R
RUN chmod 777 /var/run -R
RUN chmod 777 /var/log/cron.log
RUN chmod gu+s /usr/sbin/cron
USER backend

CMD ["/usr/local/bin/start"]
