<?php
/* Script de conexão ao servidor de  */
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "microblog-pedro";


/* Usando a função mysqli_connect para conectar ao servidor de banco de dados */
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

/* Definindo o charset da conexão também como utf8 */
mysqli_set_charset($conexão, "utf8");

/* Verificação da conexão */

// Se NÃO FOR POSSÍVEL realizar a conexão
if( !$conexão ){
    // PARE a aplicação e mostre uma mensagem de erro 
    die("Deu ruim:".mysqli_connect_error());
} else {
    // Senão, a conexão foi feita com sucesso!
    echo "Beleza, conectado!";
}


?>