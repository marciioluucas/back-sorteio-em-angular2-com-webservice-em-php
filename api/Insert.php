<?php
require_once '../controller/UsuarioController.php';

/**
 * Created by PhpStorm.
 * User: Márcio Lucas
 * E-mail: marciioluucas@gmail.com
 * Date: 12/09/2016
 * Time: 09:23
 */

header('Content-Type: application/json', 'charset=utf-8', true);
header('Content-Type: application/x-www-form-urlencoded', 'charset=utf-8', true);
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT');

class Insert
{
    private $usuarioController;


    function __construct()
    {


        $this->usuarioController = new UsuarioController();


        if (isset($_POST['q']) && $_POST['q'] == "usuario") {
            echo $this->doItUsuario();
        }


    }

    function doItUsuario()
    {
        return $this->usuarioController->cadastrar();
    }

}

new Insert();