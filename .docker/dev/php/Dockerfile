FROM php:7.1-fpm

# Install node
RUN curl -sL https://deb.nodesource.com/setup_6.x | bash -

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer

# Install all needed packages
RUN apt-get install -y \
    git \
    libicu-dev \
    libgd-dev \
    mysql-client \
    nodejs \
    ruby \
    ruby-dev \
    ssh-client \
    wkhtmltopdf \
    xvfb \
    zip
RUN apt-get purge -y --auto-remove

# Install sass
RUN gem install sass

# Configure GD package for JPEG support
RUN docker-php-ext-configure gd \
    --with-freetype-dir=/usr/lib/x86_64-linux-gnu/ \
    --with-jpeg-dir=/usr/lib/x86_64-linux-gnu/ \
    --with-xpm-dir=/usr/lib/x86_64-linux-gnu/

RUN pecl install apcu xdebug

# Install extensions required by Symfony
RUN docker-php-ext-install \
    bcmath \
    calendar \
    intl \
    gd \
    opcache \
    pcntl \
    pdo_mysql \
    zip

RUN npm install -g yarn
RUN yarn global add node-gyp

# Change php configuration
COPY php/php.ini /usr/local/etc/php/php.ini
COPY php/fpm.conf /usr/local/etc/php-fpm.d/zz-qdb.conf

ENV COMPOSER_ALLOW_SUPERUSER 1

WORKDIR /app

# set entrypoint
COPY php/entrypoint.sh /usr/local/bin/
RUN chmod a+x /usr/local/bin/entrypoint.sh

ENTRYPOINT ["entrypoint.sh"]
CMD ["php-fpm"]
