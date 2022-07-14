<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$validado = FALSE;
if(isset( $_POST['txtNome'] ) ){
    $nome = strtoupper ( $_POST['txtNome'] );
    echo $nome;
    $validado = TRUE;
}

if(isset( $_POST['txtEmail'] ) ){
    $email = strtoupper ( $_POST['txtEmail'] );
    echo $email;
    $validado = TRUE;
}
if(isset( $_POST['txtTelefone'] ) ){
    $telefone = strtoupper ( $_POST['txtTelefone'] );
    echo $telefone;
    $validado = TRUE;
}
if(isset( $_POST['txtMensagem'] ) ){
    $mensagem = strtoupper ( $_POST['txtMensagem'] );
    echo $mensagem;
    $validado = TRUE;
}
if ($validado === TRUE){
    echo $nome;
    echo $email;
    echo $telefone;
    echo $mensagem;
}
?>

<h1>Contato</h1>

<form action="./contato.php" method="post">
    <ul>
    <li>
        <label for="txtNome">Nome Completo</label>
        <input type="text" name="txtNome" id="txtNome">
    </li>
    <li>
        <label for="txtEmail">E-mail</label>
        <input type="text" name="txtEmail" id="txtEmail">
    </li>
    <li>
        <label for="txtTelefone">Telefone</label>
        <input type="text" name="txtTelefone" id="txtTelefone">
    </li>
    <li>
        <label for="txtMensagem">Mensagem</label>
        <input type="textarea" name="txtMensagem" id="txtMensagem">
    </li>
    </ul>
    <input type="submit" value="Cadastrar">
</form>

<?php
// include do footer
include_once './includes/_footer.php';
?>