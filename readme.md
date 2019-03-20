**First of all Thank You for purchasing out Application!**

# Installation

## 1. Create new empty database

Edit .env file and setup your database properites

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bap_saas_kit
DB_USERNAME=root
DB_PASSWORD=root
``` 
## 2. Run artisan commands in root folder of application:

```
php artisan cache:clear
php artisan config:cache
php artisan migrate
php artisan db:seed
php artisan storage:link
```

## 3. Create admin user - Run command:

```
php artisan voyager:admin your@email.com –create
```
## 4. How to switch to braintree payments

**1. edit .env file and set variable**


```
PAYMENT_GATEWAY=braintree
```

**2. edit composer.json and remove cashier - stripe**


```
"laravel/cashier": "~7.0",
```
**3. add braintree** 

```
"laravel/cashier-braintree": "^3.0",
```

**4. run php commands**

```
composer update or php composer.phar update
php artisan config:cache

```

## 5. Stripe, Braintree variables in .env

If you want to user stripe. You need to register on stripe website and fill data in .env file

**Stripe**
```
STRIPE_KEY=
STRIPE_SECRET=
```
if you want to user braintree. You need to register on braintree website and fill data in .env file

**Braintree**
```
BRAINTREE_ENV=sandbox
BRAINTREE_MERCHANT_ID=
BRAINTREE_PUBLIC_KEY=
BRAINTREE_PRIVATE_KEY=
```
remember to cache configuration by running command.

```
php artisan cache:clear
php artisan config:cache
```


## 6. More information

You can read more information about project here:

https://laravel-bap.com/faq/saas-front/

5. Changelog

```
1.0 Initial Release
1.1 Braintree payments, design fix, bugfix
1.2 Added trial plans, added manage crm users via saas, bug fix

```
