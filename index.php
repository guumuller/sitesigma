<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<h1>Home</h1>
<?php
   for ($i=0; $i < 3; $i++) { 
       
       echo $produtos[$i]['nome'];
       echo $produtos[$i]['preco'];
       echo '<img src="./content/'.$produtos[$i]['imagem'].'">';
       echo '<hr>';
   }   


?>

<?php
// include do footer
include_once './includes/_footer.php';
?>