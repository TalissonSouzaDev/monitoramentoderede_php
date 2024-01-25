<?php
namespace models;

use models\traits\TraitGlobal;

class User extends model
{
    use TraitGlobal;

    
    public int $id;
    public string $name;
    public string $email;
    public string $password;
    public string $profile;
    public string $token;



    public function autenticateLogin(string $email,string $password) : array
    {

        $autenticate = [];

        $sql = \MySql::conectar()->prepare( "SELECT * FROM users WHERE email = :email AND password=:password" );
        $sql->bindParam( ':email', $email );
        $sql->bindParam( ':password', $password );
        $sql->execute();
        if ( $sql->rowCount() == 1 )
 {
            $autenticate =  $sql->fetch();
            return $autenticate;
        }
        return $autenticate;

    }

    private function GenerateToken(): string
    {
        return md5(uniqid());
    }


    
    public function findByToken(string $token): array {
        $findbyToken = [];

        $sql = \MySql::conectar()->prepare( "SELECT * FROM users WHERE token = :token" );
        $sql->bindParam( ':token', $token );
        $sql->execute();
        if ( $sql->rowCount() == 1 )
 {
            $findbyToken =  $sql->fetch();
            return $findbyToken;
        }
        return $findbyToken;

    }

    public function newToken(string $id): array {
        $newToken = [];
        $token = $this->GenerateToken();

        $sql = \MySql::conectar()->prepare( "UPDATE users SET token=:token WHERE id = :id" );
        $sql->bindParam( ':id', $id );
        $sql->bindParam( ':token',$token );
        $sql->execute();

       
        if ( $sql->rowCount() == 1 )
 
            {
            $newToken =  $this->findById("users",$id);
            
            return $newToken;
            }

            return $newToken;
        }


    }



?>