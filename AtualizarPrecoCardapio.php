<?php

$item = $_POST['item'];
$novoPreco = $_POST['novoPreco'];

$itens_cardapio[$item] = $novoPreco;

echo "Preço atualizado com sucesso para " . $novoPreco . " para o item " . $item;
?>
