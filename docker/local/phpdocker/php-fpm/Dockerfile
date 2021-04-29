FROM phpdockerio/php74-fpm:latest
WORKDIR "/application"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php7.4-mysql php-redis php7.4-bcmath php7.4-gd php7.4-gmp php-imagick php7.4-soap php-yaml \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install git
RUN apt-get update \
    && apt-get -y install git \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

RUN apt-get update -y
RUN apt-get install

COPY start.sh /usr/local/bin/start
RUN chmod 755 /usr/local/bin/start

RUN apt-get -y install cron
RUN apt-get update -y

COPY cron/crontab /etc/cron.d/crontab
RUN crontab -u root /etc/cron.d/crontab
RUN chmod +x /etc/cron.d/crontab
RUN touch /var/log/cron.log
CMD ["/usr/local/bin/start"]
