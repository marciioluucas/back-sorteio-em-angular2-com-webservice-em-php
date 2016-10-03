<?php
require_once '../model/Banco.php';
require_once '../model/Usuario.php';

/**
 * Created by PhpStorm.
 * User: Márcio Lucas
 * E-mail: marciioluucas@gmail.com
 * Date: 12/09/2016
 * Time: 09:20
 */
class Search
{
    private $usuario;


    function __construct()
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        if (isset($_GET['q']) && $_GET['q'] == "usuario") {

            echo $this->doItUsuario();
        }


    }

    function doItUsuario()
    {
        $this->usuario = new Usuario();
        if (isset($_GET['filtro']) &&
            isset($_GET['valorFiltro'])
        ) {
            $this->usuario->tabela = "usuario";
            return $this->usuario->listarUsuario(1, 1);

        } else {
            return
                "
{
  \"api\": {
     \"erro\":\"API-INSERT 001 | Usuario:\",
     \"msg\":\"Não informado qual metodo a seguir.\"
  }
}
";
        }
    }
}

new Search();