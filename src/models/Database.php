<?php
// CREATE THE ILLUMINATE DATABASE CAPSULE IN THIS FILE

namespace Models;

use Illuminate\Database\Capsule\Manager as Capsule;

class Database
{
    function __construct()
    {
        // Instantiate and configure the database connection.
        $capsule = new Capsule;
        $capsule->addConnection([
            'driver' => DBDRIVER,
            'host' => DBHOST,
            'database' => DBNAME,
            'username' => DBUSER,
            'password' => DBPASS,
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);

        //boot the Eloquent ORM inside capsule.
        $capsule->bootEloquent();
    }

}

?>