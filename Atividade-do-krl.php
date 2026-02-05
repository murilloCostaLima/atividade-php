<?php
    $carrinho =
    [ 
        ["id" => 1, "nome" => "SSD 512GB", "preco" => 280.00, "quantidade" => 1], 
        ["id" => 2, "nome" => "Memória RAM 8GB", "preco" => 150.00, "quantidade" => 2], 
        ["id" => 3, "nome" => "Cabo HDMI 2.0", "preco" => 25.00, "quantidade" => 4], 
        ["id" => 4, "nome" => "Mouse Gamer", "preco" => 120.00, "quantidade" => 1], 
        ["id" => 5, "nome" => "Teclado Mecânico", "preco" => 350.00, "quantidade" => 1], 
        ["id" => 6, "nome" => "Fonte 600W", "preco" => 420.00, "quantidade" => 1], 
        ["id" => 7, "nome" => "HD Externo 1TB", "preco" => 390.00, "quantidade" => 1], 
        ["id" => 8, "nome" => "Headset USB", "preco" => 180.00, "quantidade" => 2], 
    ];
    
    $subtotalRAM = $carrinho[1]["preco"] * $carrinho[1]["quantidade"];
    $subtotalHDMI = $carrinho[2]["preco"] * $carrinho[2]["quantidade"];
    $subtotalUSB = $carrinho[7]["preco"] * $carrinho[7]["quantidade"];
    $percentual = 0.10;
    $percentualAplicado = 0.90;
    $subtotal = $carrinho[0]["preco"] + $subtotalRAM + $subtotalHDMI + $carrinho[3]["preco"] + $carrinho[4]["preco"] + $carrinho[5]["preco"] + $carrinho[6]["preco"] + $subtotalUSB;
    $subtotalFinal = $subtotal * (1 - $percentual);
    $subtotalPercetual = $subtotal * (1 - $percentualAplicado);

    echo $carrinho[0]["nome"]."<br>";
    echo "Quantidade de Itens = ", $carrinho[0]["quantidade"]."<br>";
    echo "Subtotal: ", $carrinho[0]["preco"]."<br><br>";

    echo $carrinho[1]["nome"]."<br>";
    echo "Quantidade: ", $carrinho[1]["quantidade"]."<br>";
    echo "Subtotal: ", $subtotalRAM."<br><br>";

    echo $carrinho[2]["nome"]."<br>";
    echo "Quantidade: ", $carrinho[2]["quantidade"]."<br>";
    echo "Subtotal: ", $subtotalHDMI."<br><br>";

    echo $carrinho[3]["nome"]."<br>";
    echo "Quantidade: ", $carrinho[3]["quantidade"]."<br>";
    echo "Subtotal: ", $carrinho[3]["preco"]."<br><br>";

    echo $carrinho[4]["nome"]."<br>";
    echo "Quantidade: ", $carrinho[4]["quantidade"]."<br>";
    echo "Subtotal: ", $carrinho[4]["preco"]."<br><br>";

    echo $carrinho[5]["nome"]."<br>";
    echo "Quantidade: ", $carrinho[5]["quantidade"]."<br>";
    echo "Subtotal: ", $carrinho[5]["preco"]."<br><br>";

    echo $carrinho[6]["nome"]."<br>";
    echo "Quantidade: ", $carrinho[6]["quantidade"]."<br>";
    echo "Subtotal: ", $carrinho[6]["preco"]."<br><br>";

    echo $carrinho[7]["nome"]."<br>";
    echo "Quantidade: ", $carrinho[7]["quantidade"]."<br>";
    echo "Subtotal: ", $subtotalUSB."<br>";
    
    echo "<hr>";

    echo "Subtotal da Compra: R$ ".number_format($subtotal, 2, ',', '.')."<br>";
    echo "Desconto Aplicado (10%): R$ ".number_format($subtotalPercetual, 2, ',', '.')."<br>";
    echo "Total Final a Pagar: R$ ".number_format($subtotalFinal, 2, ',', '.');
?>