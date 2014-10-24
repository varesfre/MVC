<?php
/**
 * Created by PhpStorm.
 * User: ÄrturÖ
 * Date: 16/10/2014
 * Time: 05:41 PM
 */

require('template/header.php');
require('clases/Usuario.php');
require('helpers.php');
require('conexion.php');

if (empty($_GET['url']))
    $_GET['url']='home';

controller($_GET['url']);


require('template/footer.php');

?>