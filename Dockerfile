FROM php:7.2-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp/app

EXPOSE 9001 
CMD [ "php", "-S", "localhost:9001" ]
