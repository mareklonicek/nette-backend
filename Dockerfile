# Použití oficiálního PHP CLI obrazu
FROM php:8.2-cli

# Nastavení pracovního adresáře
WORKDIR /var/www

# Kopírování aplikace do kontejneru
COPY . .

# Otevření portu 8080 pro PHP server
EXPOSE 8080

# Spuštění PHP built-in serveru
CMD ["php", "-S", "0.0.0.0:8080", "-t", "."]
