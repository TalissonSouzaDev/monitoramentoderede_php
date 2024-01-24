<?php
namespace models;

use Exception;
use models\interfaces\ModelInterface;

class model implements ModelInterface
{

    public static function Selectall(string $sql): array
    {
       $sql = \MySql::conectar()->prepare($sql);
       $sql->execute();
     
       return $sql->fetchAll();
    
    }

    public static function FindByid(string $tabela,int $id): array {
      $findbyid = [];

      $sql = \MySql::conectar()->prepare("SELECT * FROM ".$tabela." WHERE id = :id");
      $sql->bindParam(":id",$id);
      $sql->execute();
      if($sql->rowCount() == 1)
      {
         $findbyid =  $sql->fetch();
         return $findbyid;
      }
      return $findbyid;
      

    }

  
    public static function create($tabela,$campos = []): bool
    {
       try
       {
         $sql = "INSERT INTO ".$tabela." VALUES (NULL, '{$campos[0]}', '{$campos[1]}', '{$campos[2]}', '{$campos[3]}')";
         $stmt = \MySql::conectar()->prepare($sql);
         $stmt->execute();
         return true;
       }
       catch(Exception $e)
       {
         return false;
       }
            
     
    }

    public static function update(string $tabela,array $campos, int $id): bool
    {
      try
      {
        $sql = "UPDATE ".$tabela." SET   WHERE id =:id";
        $stmt = \MySql::conectar()->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return true;
      }
      catch(Exception $e)
      {
        return false;
      }
    }

    public static function delete(string $tabela , int $id): bool
    {
      try
      {
         $sql = \MySql::conectar()->prepare("DELETE FROM ".$tabela." WHERE id = :id");
         $sql->bindParam(":id",$id);
         $sql->execute();
         return true;
      }
     catch(Exception $e)
     {
      return false;
     }
    }

}


?>