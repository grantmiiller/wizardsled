FROM php:7.2-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp/app

EXPOSE 80 
CMD [ "php", "-S", "0.0.0.0:80" ]
