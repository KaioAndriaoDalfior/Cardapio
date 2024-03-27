<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
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
            text-align: center;
        }
        .item {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pagamento</h1>
        <?php
        echo '<script>';
        echo 'let itensPrecos = JSON.parse(localStorage.getItem("itensPrecos"));';
        echo 'let total = 0;';
        echo 'for (let item in itensPrecos) {';
        echo 'total += itensPrecos[item];';
        echo 'document.write("<div class=\'item\'>" + item + " - R$ " + itensPrecos[item].toFixed(2) + "</div>");';
        echo '}';
        echo 'document.write("<div class=\'item\'><strong>Total:</strong> R$ " + total.toFixed(2) + "</div>");';
        echo '</script>';
        ?>
        
   
        <form action="confirmacao.php" method="post">
            <label for="observacoes">Observações:</label>
            <textarea name="observacoes" id="observacoes" rows="4" placeholder="Digite suas observações aqui..."></textarea>
            <input type="submit" value="Confirmar Pagamento" onclick="enviarMensagemWhatsApp()">
        </form>
    </div>

    <script>
  
        function enviarMensagemWhatsApp() {
 
            let itensPrecos = JSON.parse(localStorage.getItem("itensPrecos"));
            let total = 0;
            let mensagem = "Obrigado por comprar!\n\nPedido:\n";
            for (let item in itensPrecos) {
                total += itensPrecos[item];
                mensagem += item + " - R$ " + itensPrecos[item].toFixed(2) + "\n";
            }
            
    
            let observacoes = document.getElementById("observacoes").value;
            if (observacoes.trim() !== "") {
                mensagem += "\nObservações: " + observacoes;
            }
            
            mensagem += "\n\nTotal: R$ " + total.toFixed(2);
            let url = "https://api.whatsapp.com/send?phone=5528999401258&text=" + encodeURIComponent(mensagem);
            window.open(url, "_blank");
        }
    </script>
</body>
</html>
