ARG DB_CONNECTION
ARG DB_HOST
ARG DB_PORT
ARG DB_DATABASE
ARG DB_USERNAME
ARG DB_PASSWORD
FROM docker.io/bitnami/laravel:9
COPY . /app
WORKDIR /app
RUN composer install
RUN php artisan key:generate
RUN php artisan storage:link
EXPOSE 8000:8000
CMD php artisan serve --host=0.0.0.0