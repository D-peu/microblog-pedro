<?php
require "../inc/funcoes-sessao.php";
require "../inc/funcoes-noticias.php";
verificaAcesso();

verificaTipo();


$idNoticia = $_GET['id'];
$idUsuario = $_SESSION['id'];
$tipoUsuario = $_SESSION['tipo'];

excluirNoticia($conexao, $idNoticia, $idUsuario, $tipoUsuario);
header("location:noticias.php");
