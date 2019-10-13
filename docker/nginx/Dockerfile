FROM nginx:alpine

# copy configuration files
COPY nginx.conf /etc/nginx/nginx.conf
COPY upstream.conf /etc/nginx/conf.d/upstream.conf
COPY laravel.conf /etc/nginx/conf.d/default.conf

CMD ["nginx"]
