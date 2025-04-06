# Start your image with a node base image
FROM php:8.3-apache


# Install node packages, install serve, build the app, and remove dependencies at the end
RUN apt update && \
apt upgrade -y && \
apt install -y nano git vim curl wget links telnet

RUN docker-php-ext-install mysqli pdo pdo_mysql
WORKDIR /var/www
RUN git clone https://github.com/Ewilanstr/Info411.git html
RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
WORKDIR /var/www/html

# Start the app using serve command
# commande permet de pas finir le prog
CMD [ "tail", "-f", "/dev/null" ]