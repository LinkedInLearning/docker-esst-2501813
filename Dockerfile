FROM php:8.2-apache

RUN apt-get update && \
    apt-get install -y qrencode && \
    rm -rf /var/lib/apt/lists/*

