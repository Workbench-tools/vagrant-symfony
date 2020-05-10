#!/usr/bin/env bash

apt -y install software-properties-common
add-apt-repository ppa:ondrej/php
apt-get update

apt-get install -y php7.4-fpm
apt-get install -y php7.4-{bcmath,bz2,intl,gd,mbstring,mysql,zip,xml}
apt-get install -y nginx
apt-get install -y composer


if ! [ -L /var/www ]; then
  rm -rf /var/www
  ln -fs /vagrant /var/www
fi

# cp /var/www/nginx/default /etc/nginx/sites-available/default
