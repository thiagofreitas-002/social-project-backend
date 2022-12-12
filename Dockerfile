FROM docker.io/bitnami/laravel:9
COPY . /app
WORKDIR /app
RUN composer install
RUN php artisan key:generate
CMD php artisan serve --host=0.0.0.0
