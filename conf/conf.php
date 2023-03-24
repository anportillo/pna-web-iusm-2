<?php
/* Configuracion de la Base de Datos */
/* Actualmente estan incorporadas en una funcion las dejo por las dudas pero no se usan*/
ini_set( 'extension', 'php_openssl.dll' );
ini_set( 'display_errors', 'on' );
header('Content-Type: text/html; charset=UTF-32');

/**
Estas son las funciones de coneccion a la Base de datos
La primer funcion me permite identificar los Parametros de Coneccion
Todas estas funciones son las utilizadas para la conexion con la base de datos
Esto significa que si las transformamos podemos usar ODBC desde aqui
------------------------------------------------------------------------------------------------------------------------------------------------------------- **/
/* PRODUCCION
function sql_cnx_data($db='0'){
   switch ($db)
   {
    case '1':
        $data=array();
        $data['dns']="dedu";
        $data['user']="dedu";
        //$data['pws']="educ2020"; //desarrollo
        $data['pws']="k3r6ss"; //pro duccion
        //$data['db']="dedu_certificados";
    break;
    /*default:
        $data=array();
        $data['dns']="dedu";
        //$data['host']="192.168.9.29";
        $data['user']="dedu";
        //$data['pws']="educ2020"; //desarrollo
        $data['pws']="k3r6ss"; //produccion
        //$data['db']="dedu_certificados";
    
    }
return $data;
}
*/
//STAGING
function sql_cnx_data($db='1'){
    switch ($db)
    {
     case '1':
         $data=array();
         $data['dns']="dedu";
         $data['host']="172.21.0.2";
         $data['user']="aportillo";
         $data['pws']="aportillo";
         $data['db']="dedu_webiusm";
     break;
     default:
         $data=array();
         $data['dns']="dedu";
         $data['host']="172.21.0.2";
         $data['user']="aportillo";
         $data['pws']="aportillo";
         $data['db']="dedu_webiusm";
     }
 return $data;
 }
?>
