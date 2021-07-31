# laravel8-mongodb-simple-crud

## Create your mongo database
<p>For example <i>laravelmongocrud</i></p>

## Add this variable on .env
> DB_CONNECTION=mongodb
>
> MONGO_DB_HOST=127.0.0.1
>
> MONGO_DB_PORT=27017
>
> MONGO_DB_DATABASE=laravelmongocrud
>
> MONGO_DB_USERNAME=
>
> MONGO_DB_PASSWORD=

## On config/database.php add this code inside 'connections' array.
> 'mongodb' => [
>
>    'driver'   => 'mongodb',
>
>    'host'     => env('MONGO_DB_HOST'),
>
>    'port'     => env('MONGO_DB_PORT'),
>
>    'database' => env('MONGO_DB_DATABASE'),
>
>    'username' => env('MONGO_DB_USERNAME'),
>
>    'password' => env('MONGO_DB_PASSWORD'),
>
>    'options'  => []
>
>],
