<?php
include_once "config/Database.php";

class Modelo
{
  function ejecutar($sql)
  {
    return Database::ejecutar($sql);
  }
}