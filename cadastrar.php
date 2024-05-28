<?php

//requeriindo classe e conexão com banco de dados

//classe
require_once 'UsuarioClass.php';
//conexão
require_once 'configBD.php' ;

//verificando se recebe os dados do cadastro
if(isset($_POST['nome']) && !empty($_POST['nome']) && ($_POST['email'])&& !empty($_POST['email']) && ($_POST['pwd']) && !empty($_POST['pwd']) ){

    //definindo as variaveis 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    //$Confpwd = ['Confpwd'];

    //verificando se os campos não estão vazios, caso não estejam ele vai fazer o que esta dentro do if
    if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['pwd'])){
        $u = new Usuario();

       if($u->cadastrar($nome, $email, $pwd)){

        header('location:telaLogin.php?msg=cadastrado-com-sucesso!');

       }else{
        echo "email ja foi cadastrado";

       }

    }else{
        echo "preencha todos os campos";
    }

   



}

?>