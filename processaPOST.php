<?php
    require_once 'funcs.php';

    $nome = $_POST['txt_nome'];
    $idade = $_POST['num_idade'];
    $valor = $_POST['num_valor'];
    $parcelas = $_POST['sel_parcelas'];


    //tratamento de erros
    if ($valor <= 0)
    {
        erro("preco_invalido");
    }
    //nao sabia como usar a idade de um jeito legal, entao fiz isso KKKKK
    if ($idade < 18)
    {
        erro("idade");
        exit;
    }

    // Cálculo do valor total com juros
    if ($parcelas == 1)
    {
        $valor_total = $valor;
        $parcela = $valor;
    }
    else if ($parcelas == 12)
    {
        $valor_total = $valor * 1.05;
        $parcela = $valor_total / 12;
    }
    else if ($parcelas == 24)
    {
        $valor_total = $valor * 1.12;
        $parcela = $valor_total / 24;
    }
    //projeto muito simples, entao nao vou me preocupar com o else, nesse caso.
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simule seu financiamento!</title>
</head>
<body>
    <h1>Simulação de Financiamento Equino</h1>
    <h2>Ola, <?php echo $nome; ?>! <br> 
    Em busca de um companheiro?</h2>

    <p>Valor total do financiamento: R$ <?php echo number_format($valor_total, 2, ',', '.'); ?></p>
    <p>Quantidade de parcelas: <?php echo $parcelas; ?></p>
    <p>Valor de cada parcela: R$ <?php echo number_format($parcela, 2, ',', '.'); ?></p>
</body>
</html>