<?php
require_once "../model/Usuario.php";

/**
 * Created by PhpStorm.
 * User: Márcio Lucas
 * E-mail: marciioluucas@gmail.com
 * Date: 09/09/2016
 * Time: 13:57
 */
class UsuarioController
{
    private $usuario;

    public function __construct()
    {
        $this->usuario = new Usuario();

        if (isset($_POST["entrar"]) && $_POST['entrar'] == "1") {
            echo $this->usuario->logarUsuario($_POST['email'], $_POST['senha']);
        }

    }

    public function cadastrar()
    {
        if ($_POST['nome'] && $_POST['email'] && $_POST['senha']) {
            $this->usuario->setNome($_POST['nome']);
            $this->usuario->setEmail($_POST['email']);
            $this->usuario->setSenha($_POST['senha']);

            return $this->usuario->cadastrarUsuario();
        } else {
            return "
      {
            \"erro\":{
                \"classe\":\"UsuarioController\",
                \"metodo\":\"cadastrar()\"
            },
            \"msg\": \"Não informado algum dos campos obrigatórios!\"
        }
        ";
        }

    }

    public function alterar()
    {

    }

    public function listar()
    {

    }

    public function excluir()
    {

    }

}

new usuarioController();