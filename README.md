

## Project Setup

<b>Serve the application in local</b><br>
php artisan serve

<b>Seed the database table</b><br>
php artisan db:seed --class=OrderSeeder


## Tool for API Manipulation 
Postman

## API EndPoints
LOGIN - POST <br>
http://127.0.0.1:8000/api/login

REGISTER - POST <br>
http://127.0.0.1:8000/api/register

<b>Should be authenticated</b> <br>
DISPLAY ALL RESOURCES - GET <br>
http://127.0.0.1:8000/api/orders 

DISPLAY RESOURCE BY ID - GET <br>
http://127.0.0.1:8000/api/orders/{id}  

PLACE AN ORDER - POST <br>
http://127.0.0.1:8000/api/orders/{id} 

LOGOUT - POST <br>
http://127.0.0.1:8000/api/logout
