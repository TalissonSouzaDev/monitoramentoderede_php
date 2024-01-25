<?php
namespace models;

use Exception;
use models\interfaces\ModelInterface;

class model implements ModelInterface
 {

    public static function Selectall( string $sql ): array
 {
        $sql = \MySql::conectar()->prepare( $sql );
        $sql->execute();

        return $sql->fetchAll();

    }

    public static function FindByid( string $tabela, int $id ): array {
        $findbyid = [];

        $sql = \MySql::conectar()->prepare( 'SELECT * FROM '.$tabela.' WHERE id = :id' );
        $sql->bindParam( ':id', $id );
        $sql->execute();
        if ( $sql->rowCount() == 1 )
 {
            $findbyid =  $sql->fetch();
            return $findbyid;
        }
        return $findbyid;

    }


    public static function create( string $tabela, array $campos = [] ): bool
 {

        switch( $tabela )
 {
            case 'networks':
            $network = new Network();
            $network->origem = $campos[ 0 ];
            $network->network = $campos[ 1 ];
            $network->descricao = $campos[ 2 ];
            $network->user_id = $campos[ 3 ];

            $sql = 'INSERT INTO '.$tabela.' VALUES (NULL, :origem, :network, :descricao, :user_id)';
            $stmt = \MySql::conectar()->prepare( $sql );
            $stmt->bindParam( ':origem', $network->origem );
            $stmt->bindParam( ':network', $network->network );
            $stmt->bindParam( ':descricao', $network->descricao );
            $stmt->bindParam( ':user_id', $network->user_id );
            $stmt->execute();
            return true;
            break;

            case 'users':
            $sql = 'INSERT INTO '.$tabela." VALUES (NULL, '{$campos[0]}', '{$campos[1]}', '{$campos[2]}', '{$campos[3]}')";
            $stmt = \MySql::conectar()->prepare( $sql );
            $stmt->execute();
            return true;
            break;

            default:
            return false;

        }

    }

    public static function update( string $tabela, array $campos = [], int $id ): bool
 {
        switch( $tabela )
 {
            case 'networks':
            $sql = 'UPDATE '.$tabela.' SET origem=:origem, network=:network, descricao=:descricao WHERE id =:id';
            $stmt = \MySql::conectar()->prepare( $sql );
            $stmt->bindParam( ':id', $id );
            $stmt->bindParam( ':origem', $campos[ 'origem' ] );
            $stmt->bindParam( ':network', $campos[ 'network' ] );
            $stmt->bindParam( ':descricao', $campos[ 'descricao' ] );
            $stmt->execute();
            return true;
            break;

            case 'users':
            $sql = 'UPDATE '.$tabela.' SET   WHERE id =:id';
            $stmt = \MySql::conectar()->prepare( $sql );
            $stmt->bindParam( ':id', $id );
            $stmt->execute();
            return true;
            break;
        }
    }
    public static function delete( string $tabela, int $id ): bool
 {
        try
 {
            $sql = \MySql::conectar()->prepare( 'DELETE FROM '.$tabela.' WHERE id = :id' );
            $sql->bindParam( ':id', $id );
            $sql->execute();
            return true;
        } catch( Exception $e )
 {
            return false;
        }
    }

}

?>