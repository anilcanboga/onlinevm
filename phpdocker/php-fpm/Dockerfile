FROM php:7.4-fpm

RUN apt-get update -y && apt-get install -y \
   openssl \
   zip \
   unzip \
   git \
   libmcrypt-dev \
   libfreetype6-dev \
   libjpeg62-turbo-dev \
   apt-transport-https \
   vim \
   gnupg \
   jpegoptim \
   optipng \
   pngquant \
   ffmpeg \
   gifsicle  \
   zlib1g-dev \
   libzip-dev \
   libonig-dev

# Download Compose and setup php configration
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
RUN docker-php-ext-install -j$(nproc) gd pdo mbstring pdo_mysql exif pcntl zip bcmath

# # Add user for laravel application
# RUN groupadd -g 1000 www
# RUN useradd -u 1000 -ms /bin/bash -g www www

WORKDIR /var/www

COPY . /var/www

RUN chown -R www-data:www-data /var/www


ENV TIME_ZONE=Europe/Istanbul

RUN ln -snf /usr/share/zoneinfo/$TIME_ZONE /etc/localtime && echo $TIME_ZONE > /etc/timezone

EXPOSE 9000