<?php
/* Sessões no PHP
Recursos usado para o controle de acesso 
à determinadas páginas e/ou recursos do site.

Exemplos: área administrativa, painel de controle, área de 
cliente/aluno etc.

Nestas áreas o acesso só é possível mediante alguma forma
de autenticação. Exemplo: login/senha, digital, facial etc.
*/

/* Verificar se já NÃo EXISTE uma sessão em funcionamento */
if( !isset($_SESSION) ){
    // Então inicie uma sessão
    session_start();
}

function verificaAcesso(){
    /* Se NÃO EXISTIR uma variável de sessão chamada 
    "id" baseada no id de um usuário logado, então 
    significa que ele/ela NÃO ESTÁ LOGADO(A) no sistema */
    if(!isset($_SESSION['id'])){
        session_destroy();
        header("location:../login.php?acesso_negado");
        exit; // die()
    }
}

function login($id, $nome, $tipo){
    /* Criação de variáveis de sessão
    Recursos que ficam disponíveis para uso durante
    toda a duração da sessão, ou seja, enqunato o 
    navegador não for fechado ou o usuário não clicar
    em Sair*/
    $_SESSION["id"] = $id;
    $_SESSION["nome"] = $nome;
    $_SESSIOM["tipo"] = $tipo;
}

function logout(){
    session_destroy();
    header("location:../login.php?saiu");
    exit; // ou die()
}