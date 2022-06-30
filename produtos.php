<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<h1>Produtos</h1>

<div class="container">
    <div class="row mt-5">

    <?php
    foreach ($produtos as $key => $value) {
    ?>
        
    <div class="card m-3" style="width: 18rem;">
        <img src="./content/<?php echo $value['imagem'];?>" class="card-img-top" src=".../100px180/" alt="Imagem de capa do card">
        <div class="card-body">
            <h5 class="card-title"><?php echo $value['nome'];?></h5>
            <p class="card-text"><?php echo $value ['descricao'];?></p>
            <a href="produto-detalhe.php?id=<?php echo $key;?>&tipo=" class="btn btn-primary">Visitar</a>
        </div>
    </div>

    <?php
    }
    ?>

    </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>