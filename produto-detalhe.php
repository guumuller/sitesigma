<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$id = $_GET['id'];
$tipo = $_GET['tipo'];
?>

<div class="container">
    <div class="row">

        <div class="col">
        <h1><?php echo $produtos[$id]['nome'];?></h1>
        <h4><?php echo $produtos[$id]['descricao'];?></h4>
        <h4>R$<?php echo $produtos[$id]['preco'];?></h4>
        <img src="./content/<?php echo $produtos[$id]['imagem'];?>">    
        </div>
    </div>
    <div class="row">
        <div class="col">Voltar</div>
        <div class="col">Comprar</div>

    </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>