<?php
/**
 * Created by PhpStorm.
 * User: ÄrturÖ
 * Date: 17/10/2014
 * Time: 06:22 PM
 */

$usuario = new Usuario();

$titulo="welcome to my usuario";
$contenido="...............";
$variables=array('titulo'=>$titulo,'contenido'=>$contenido,'nombre'=>$usuario->setUsuario());

view('myusuario',$variables);


?>