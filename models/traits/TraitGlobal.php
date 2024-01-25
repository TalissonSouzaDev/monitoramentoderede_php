<?php
namespace models\traits;

use models\User;

session_start();
ob_start();

trait TraitGlobal
 {

    public function MiddlewareAuth( $protected = false )
 {

        if ( $protected )
 {
            if ( isset( $_SESSION[ 'user' ][ 'token' ] ) )
 {
                $token = $_SESSION[ 'user' ][ 'token' ];
                $user = new User;
                $userdate = $user->findByToken( $token );

                if ( count( $userdate ) > 0 )
 {
                    return true;
                }
                else
                {
                    session_destroy();
                    \Views\mainView::redirect( 'login' );
                }

            } else {
                \Views\mainView::redirect( 'login' );
            }
        } else {
            \Views\mainView::redirect( 'login' );
        }

    }

}

