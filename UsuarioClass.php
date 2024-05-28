<?php
//cria classe
 class Usuario{

    //valida os dados do usuario
    public function login($email, $senha){
        global $pdo;
       

        //criando a consulta
        $sql = "SELECT * FROM usuarios WHERE email = :email AND pwd = :pwd";
        //preparando a consulta
        $sql = $pdo->prepare($sql);
        //vinculando os valores ao espaço reservado utilizando bindValue
        $sql->bindValue("email", $email);
        $sql->bindValue("pwd", $senha);
        $sql->execute();

        if($sql->rowCount()> 0){
            $dado = $sql->fetch();
            //guardamos o usuario em uma sessao
            $_SESSION['email'] = $dado['email'];

            return true;
        }else{
            return false;
        }
    }

    //cadastra os usuarios
    public function cadastrar( $nome, $email, $pwd){
        global $pdo;

        //isso serve para verificar se o usuario ja foi cadastrado dentro do banco
        $sql = $pdo->prepare("SELECT email FROM usuarios WHERE email = :email");
        //se ja existir um email ele não ira permitir o cadastro 
        $sql->bindValue("email", $email);
        $sql->execute();

        //se o row count for igual a 0 ele vai retornar false
        if($sql->rowCount()>0){
            
            return false; 
        
        }else{
            //prepara a inserção dos dados vindos de cadastro no banco 
            $sql = $pdo->prepare("INSERT INTO usuarios (nome, email, pwd) VALUES (:nome, :email, :pwd);");  
              //vinculando os valores ao espaço reservado utilizando bindValue 
                $sql->bindValue(':nome', $nome);
                $sql->bindValue(':email', $email);
                $sql->bindValue(':pwd', $pwd);
               // $sql->bindValue('Confpwd', $Confpwd);
            //executa a inserção
            $sql->execute();
            return true; 
        }

    }
}

