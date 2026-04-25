<?php
  class Database {
    private static $connection;

    public static function connect() {
        self::$connection=new PDO("mysql:host=localhost;dbname=school;charset=ut8","root","");
        self::$connection->setAttribute(PDO::ATTR_AUTOCOMMIT, PDO::ERRMODE_EXCEPTION);
        return self::$connection;
    }
  }
  ?>