

## Project Setup

<b>Serve the application in local</b>
php artisan serve

<b>Seed the database table</b>
php artisan db:seed --class=OrderSeeder


## Tool for API Manipulation 
Postman

## API EndPoints
LOGIN - POST
http://127.0.0.1:8000/api/login

REGISTER - POST
http://127.0.0.1:8000/api/register

<b>Should be authenticated</b>
DISPLAY ALL RESOURCES - GET
http://127.0.0.1:8000/api/orders 

DISPLAY RESOURCE BY ID - GET
http://127.0.0.1:8000/api/orders/{id} 

PLACE AN ORDER - POST
http://127.0.0.1:8000/api/orders/{id} 

LOGOUT - POST
http://127.0.0.1:8000/api/logout
