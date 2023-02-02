<?php
    require_once('Estoque.php');
    require_once('Compra.php');
    require_once('Endereco.php');
    require_once('CadastroCliente.php');
    require_once('Estoque.php');

    
    $estoqueLoja = new Estoque("Doritos", 2, 10);
    $estoqueNew = new Estoque("Fandangos", 1, 20.00);

    $clientCompra = new Compra("GuiDelas", "123", "31/01/2023", $estoqueLoja, 10,00);

    $clientNew = new Compra("Gabrielzin", "354535435", "01/01/01" , $estoqueNew, 20.00);

    echo $clientCompra;
    echo "<br><br>";
    echo $clientNew;

    $enderecoClient = new Endereco("Rua das Minas", "69", "12345678");
    $newClient = new CadastroClient("Allanzinho GamePlay", "994433114342", $enderecoClient, "12345", "50", 1000);

    echo $newClient;

?>