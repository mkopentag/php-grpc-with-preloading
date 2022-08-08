FROM nginx:1.19-alpine AS build


COPY docker/nginx/nginx.conf /etc/nginx/nginx.conf
COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

COPY ./public /var/www/project/public

CMD ["nginx", "-g", "daemon off;"]

FROM build AS dev

FROM build AS prod
