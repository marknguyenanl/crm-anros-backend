FROM nginx:alpine

RUN rm /etc/nginx/conf.d/default.conf
# Copy Nginx config
COPY ./nginx.conf /etc/nginx/conf.d/default.conf

# Copy Laravel app
WORKDIR /var/www/html
