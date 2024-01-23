<?php
namespace models;

class model
{

    public static function Selectall(string $sql): array
    {
       $sql = \MySql::conectar()->prepare($sql);
       $sql->execute();
     
       return $sql->fetchAll();
    
    }

  
    public static function create($tabela,$campos = [])
    {
       // print_r($campos);exit;
   
            $sql = "INSERT INTO ".$tabela." VALUES (NULL, '{$campos[0]}', '{$campos[1]}', '{$campos[2]}', '{$campos[3]}')";
            $stmt = \MySql::conectar()->prepare($sql);
            $condicao = $stmt->execute();
            
       // INSERT INTO `networks` (`id`, `origem`, `network`, `descricao`, `user`) VALUES (NULL, 'Servidor SGCHA', '172.24.196.200', 'sistema de chamado', '1');
    }

}


?>