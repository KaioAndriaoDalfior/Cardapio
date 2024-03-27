<?php

$total = 0;


if (isset($_GET['itens'])) {

    $itens_carrinho = json_decode($_GET['itens']);

    if (!empty($itens_carrinho)) {

        $itens_precos = array();

 
        foreach ($itens_carrinho as $item) {
         
            $preco_item = 0;
            switch ($item) {
                case 'Hamburguer':
                    $preco_item = 10.00;
                    break;
                case 'X-Burguer':
                    $preco_item = 12.00;
                    break;
                case 'EggBurguer':
                    $preco_item = 13.00;
                    break;
                case 'X-Tudo':
                    $preco_item = 15.00;
                    break;
                case 'XeggBacon':
                    $preco_item = 14.00;
                    break;
                case 'Xcalabresa':
                    $preco_item = 12.00;
                    break;
                case 'Xsalada':
                    $preco_item = 11.00;
                    break;
                case 'Misto Quente':
                    $preco_item = 8.00;
                    break;
                default:
                    $preco_item = 0;
                    break;
            }

            
            $total += $preco_item;

         
            $itens_precos[$item] = $preco_item;
        }

   
        echo '<script>';
        echo 'localStorage.setItem("itensPrecos", JSON.stringify(' . json_encode($itens_precos) . '));';
        echo '</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
            margin-bottom: 10px;
        }
        .total {
            margin-top: 20px;
            text-align: right;
            font-weight: bold;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Carrinho de Compras</h1>
        <?php
      
        $total = 0;

       
        if (isset($_GET['itens'])) {
           
            $itens_carrinho = json_decode($_GET['itens']);

            if (!empty($itens_carrinho)) {
                echo '<ul>';
                foreach ($itens_carrinho as $key => $item) {
                    // Define o preço de cada item
                    $preco_item = 0;
                    switch ($item) {
                        case 'Hamburguer':
                            $preco_item = 10.00;
                            break;
                        case 'X-Burguer':
                            $preco_item = 12.00;
                            break;
                        case 'EggBurguer':
                            $preco_item = 13.00;
                            break;
                        case 'X-Tudo':
                            $preco_item = 15.00;
                            break;
                        case 'XeggBacon':
                            $preco_item = 14.00;
                            break;
                        case 'Xcalabresa':
                            $preco_item = 12.00;
                            break;
                        case 'Xsalada':
                            $preco_item = 11.00;
                            break;
                        case 'Misto Quente':
                            $preco_item = 8.00;
                            break;
                        default:
                            $preco_item = 0;
                            break;
                    }
               
                    $total += $preco_item;
                  
                    echo '<li>' . htmlspecialchars($item) . ' - R$ ' . number_format($preco_item, 2, ',', '.') . ' <button class="btn" onclick="removerItem(' . $key . ')">Remover</button></li>';
                }
                echo '</ul>';
            } else {
                echo '<p>Seu carrinho está vazio!</p>';
            }
        } else {
            echo '<p>Seu carrinho está vazio!</p>';
        }
        ?>
      
        <div class="total">
            Total: R$ <?php echo number_format($total, 2, ',', '.'); ?>
        </div>
        <br>
      
        <button class="btn" onclick="limparCarrinho()">Limpar Carrinho</button>
       
        <a href="PaginaInicial.php" class="btn">Continuar Comprando</a>
       
        <button class="btn" onclick="finalizarCompra()">Finalizar Compra</button>
    </div>

    <script>
        function limparCarrinho() {
       
            localStorage.removeItem('carrinho');
           
            window.location.reload();
        }

        function removerItem(index) {
            let carrinho = JSON.parse(localStorage.getItem('carrinho'));
            carrinho.splice(index, 1);
            localStorage.setItem('carrinho', JSON.stringify(carrinho));
            window.location.reload();
        }

        function finalizarCompra() {
            alert('Compra finalizada! Redirecionando para a página de pagamento...');
            window.location.href = 'pagamento.php';
        }
    </script>
</body>
</html>
