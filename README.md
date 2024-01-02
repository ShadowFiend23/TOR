# TOR
 EVSU TOR

# Requirements
Must have these installed
- [composer](https://getcomposer.org/)
- [node](https://nodejs.org/en)

Running
1. Download Code
2. Install dependencies by running the commands below:
```
composer install
```
```
npm install
```
3. Change mysql parameters in the `.env` file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tor
DB_USERNAME=root
DB_PASSWORD=
```
4. Run migration
```
php artisan migrate:refresh --seed
```
> [!NOTE]
>A default admin user is created (both user and pass are admin)

5. Start the server
```
npm start
```
6. Open `http://127.0.0.1:8000`
