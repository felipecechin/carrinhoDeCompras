<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './class/carrinho.class.php';
        require_once './class/cliente.class.php';
        require_once './class/produto.class.php';

        $cliente = new cliente('Totumo', 'Avenida Dores, 796', 32947248553);
        $produto = new produto('Ferlis', 1.50);
        $produto2 = new produto('Tomolis', 5.50);

        $carrinho = new carrinho();
        $carrinho->adicionarNoCarrinho($produto);
        $carrinho->adicionarNoCarrinho($produto2);

        $carrinho->removerNoCarrinho($produto);
        var_dump($carrinho);
        
        $carrinho->calcularTotal();
        ?>
    </body>
</html>
