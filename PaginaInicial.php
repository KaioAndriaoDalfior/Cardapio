<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .item {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            position: relative; 
        }
        .item h2 {
            margin-top: 0;
        }
        .ingredientes {
            margin-top: 5px;
            font-size: 14px;
        }
        .preco {
            font-weight: bold;
            font-size: 16px;
        }
        .btn-adicionar {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }
        .btn-adicionar:hover {
            background-color: #0056b3;
        }
        .carrinho {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }
        #contador-carrinho {
            background-color: #fff;
            color: #007bff;
            border: 2px solid #007bff;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            line-height: 20px;
            text-align: center;
            font-size: 14px;
            position: absolute;
            top: -5px;
            right: -5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cardápio</h1>
        
        <div class="item">
            <h2>Hamburguer</h2>
            <p class="ingredientes">Pão, carne de hambúrguer, alface, tomate, queijo, maionese, ketchup, mostarda</p>
            <p class="preco">Preço: R$ 10,00</p>
            <button class="btn-adicionar" onclick="adicionarAoCarrinho('Hamburguer')">Adicionar ao Carrinho</button>
        </div>

        <div class="item">
            <h2>X-Burguer</h2>
            <p class="ingredientes">Pão, carne de hambúrguer, queijo, alface, tomate, maionese, ketchup, mostarda</p>
            <p class="preco">Preço: R$ 12,00</p>
            <button class="btn-adicionar" onclick="adicionarAoCarrinho('X-Burguer')">Adicionar ao Carrinho</button>
        </div>

        <div class="item">
            <h2>EggBurguer</h2>
            <p class="ingredientes">Pão, carne de hambúrguer, ovo frito, queijo, alface, tomate, maionese, ketchup, mostarda</p>
            <p class="preco">Preço: R$ 13,00</p>
            <button class="btn-adicionar" onclick="adicionarAoCarrinho('EggBurguer')">Adicionar ao Carrinho</button>
        </div>

        <div class="item">
            <h2>X-Tudo</h2>
            <p class="ingredientes">Pão, 2 carnes de hambúrguer, presunto, queijo, ovo frito, bacon, alface, tomate, maionese, ketchup, mostarda</p>
            <p class="preco">Preço: R$ 15,00</p>
            <button class="btn-adicionar" onclick="adicionarAoCarrinho('X-Tudo')">Adicionar ao Carrinho</button>
        </div>

        <div class="item">
            <h2>XeggBacon</h2>
            <p class="ingredientes">Pão, carne de hambúrguer, ovo frito, bacon, queijo, alface, tomate, maionese, ketchup, mostarda</p>
            <p class="preco">Preço: R$ 14,00</p>
            <button class="btn-adicionar" onclick="adicionarAoCarrinho('XeggBacon')">Adicionar ao Carrinho</button>
        </div>

        <div class="item">
            <h2>Xcalabresa</h2>
            <p class="ingredientes">Pão, linguiça calabresa, queijo, alface, tomate, maionese, ketchup, mostarda</p>
            <p class="preco">Preço: R$ 12,00</p>
            <button class="btn-adicionar" onclick="adicionarAoCarrinho('Xcalabresa')">Adicionar ao Carrinho</button>
        </div>

        <div class="item">
            <h2>Xsalada</h2>
            <p class="ingredientes">Pão, carne de hambúrguer, alface, tomate, queijo, maionese, ketchup, mostarda</p>
            <p class="preco">Preço: R$ 11,00</p>
            <button class="btn-adicionar" onclick="adicionarAoCarrinho('Xsalada')">Adicionar ao Carrinho</button>
        </div>

        <div class="item">
        <h2>Misto Quente</h2>
            <p class="ingredientes">Pão de forma, presunto, queijo</p>
            <p class="preco">Preço: R$ 8,00</p>
            <button class="btn-adicionar" onclick="adicionarAoCarrinho('Misto Quente')">Adicionar ao Carrinho</button>
        </div>
    </div>

    <button class="carrinho" onclick="verCarrinho()">Carrinho<span id="contador-carrinho">0</span></button>

    <script>
        let carrinho = [];

        function adicionarAoCarrinho(lanche) {
            carrinho.push(lanche);
            atualizarContadorCarrinho();
        }

        function atualizarContadorCarrinho() {
            document.getElementById('contador-carrinho').innerText = carrinho.length;
        }

        function verCarrinho() {
            if (carrinho.length > 0) {
                window.location.href = 'Carrinho.php?itens=' + encodeURIComponent(JSON.stringify(carrinho));
            } else {
                alert('Seu carrinho está vazio!');
            }
        }
    </script>
</body>
</html>
