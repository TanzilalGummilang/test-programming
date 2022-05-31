<?php

namespace TanzilalGummilang\AplikasiTransaksi\Repository;
use PDO;


class ItemRepository
{
  public function __construct(private PDO $connection){}

  public function showAll()
  {
    $statement = $this->connection->query("SELECT * FROM master_item");
    
    try{
      if($result = $statement->fetchAll()){
        return $result;
      }else{
        return null;
      }
    }finally{
      $statement->closeCursor();
    }
  }
}