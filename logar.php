<?php

//valida se existe ou não login, se não prende o usuario a tela de login
if(isset ($_POST['email']) && !empty($_POST['email']) && isset ($_POST['pwd']) && !empty($_POST['pwd'] )){

    require 'configBD.php';
    //requere a classe
    require 'UsuarioClass.php';

    //chama classe
    $u = new Usuario();

    $email = $_POST['email'];
    $senha = $_POST['pwd'];
    
    setcookie('email',$_POST['email'], time() + 120);
    setcookie('senha',$_POST['pwd'], time() + 120);
    
    //chama a função e testa o bloco de código
   if($u->login($email,$senha)==true){

        if(isset($_SESSION['email'])){
            header('location:conteudo.php');
        }else{
            header('location:telaLogin');
        }

   }else{
    header('location:telaLogin.php');
    }

}else{
    header('location:telaLogin.php');
    }


?>