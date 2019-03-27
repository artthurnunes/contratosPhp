<?php
//include './conexoes/conexaoMySQL.php';
include './conexaoMySQL.php';

$userURL = filter_input(INPUT_GET,'user'); //dados pela URL
$passURL = filter_input(INPUT_GET,'pass');
$funcaoPHP = filter_input(INPUT_GET,'funcao');

    switch ($funcaoPHP){
        case 'selectVerificaUsuarioSenha': 
            selectVerificaUsuarioSenha($userURL,$passURL);
        break;
    }

    function selectVerificaUsuarioSenha($userP,$passP){
        $acesso = false;        
        //echo("Entrei na function"); 
        //echo(" - Usuário digitado :".$userP);
        //echo(" - senha digitada :".$passP);
        
        $conn = getConnection();
        $sql = "SELECT CD_USUARIO,CD_SENHA FROM USUARIOS WHERE CD_USUARIO = '$userP' AND CD_SENHA = '$passP' ";
        //$sql = "SELECT CD_USUARIO,CD_SENHA FROM USUARIOS WHERE CD_USUARIO = 'anunes' AND CD_SENHA = '123456' ";
        //echo $sql;
        //funciona também com parametros no where por exemplo WHERE CD_USUARIO = (?) //$stmt->bindValue(1, ??);

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();

        if($result){
            $acesso = true; //login e senha existe
        }else{
            //mantem acesso false login invalido
        }

        echo json_encode($acesso);    
        /*
        foreach ($result as $value){    
          echo "\n\nNome usuário :".$value['CD_USUARIO'];
        //echo 'Descrição usuário: '.$value['NM_USUARIO'].'<br>';
        }*/
    }
    
    






