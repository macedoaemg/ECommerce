<?php
  require_once('../model/Produtos.class.php');

  $produtos = new Produtos();
  $produtos->pedido();
  //$produtos->inserirProduto();
  
?>
