<? php 

class  BaseDatos {

    public  $ usuarioBD = "root" ;
    public  $ passwordBD = "" ;

     función  pública __construct () {}

     función  pública conectarBD () {

        prueba {

            $ datosBD = "mysql: host = localhost; nombrebd = tiendacpc" ;
            $ conexion = nuevo  PDO ( $ datosBD , $ this -> usuarioBD , $ this -> passwordBD );
            echo("conectado con exito");
            retorno ( $ conexion );

        } catch ( PDOException  $ error ) {

            echo ( $ error -> getMessage ());
        }
    }

     función  pública agregarDatos ( $ consultaSQL ) {

        $ conexionBD = $ esto -> conectarBD ();
        $ insercionRegistro = $ conexionBD -> preparar ( $ consultaSQL );

        $ resultado = $ insercionRegistro -> ejecutar ();

        if ( $ resultado ) {

            echo ( "exito agregando el registro" );

        } más {

            echo ( "error agregando el registro" );
        }

    }

     función  pública consultarDatos ( $ consultaSQL ) {

        $ conexionBD = $ esto -> conectarBD ();
        $ buscarRegistros = $ conexionBD -> preparar ( $ consultaSQL );

        $ buscarRegistros -> setFetchMode ( PDO :: FETCH_ASSOC );

        $ resultado = $ buscarRegistros -> ejecutar ();

        if ( $ resultado ) {
           return ( $ buscarRegistros -> fetchAll ());
        } más {
            echo ( "error" );
        }

    }

     función  pública eliminarDatos ( $ consultaSQL ) {

        $ conexionBD = $ esto -> conectarBD ();

        $ eliminarRegistro = $ conexionBD -> preparar ( $ consultaSQL );

        $ resultado = $ eliminarRegistro -> ejecutar ();

        if ( $ resultado ) {

            echo ( "exito eliminando el registro" );

        } más {

            echo ( "error eliminando el registro" );
        }

    }

     función  pública actualizarDatos ( $ consultaSQL ) {

        $ conexionBD = $ esto -> conectarBD ();


        $ editarRegistro = $ conexionBD -> preparar ( $ consultaSQL );

        $ resultado = $ editarRegistro -> ejecutar ();

        if ( $ resultado ) {

            echo ( "exito editando el registro" );

        } más {

            echo ( "error editando el registro" );
        }


    }





}






?> 