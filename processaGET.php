<?php 
    require_once 'conexaoDB.php';
    $cavalo = $_GET['txt_busca'] ?? ''; //pega o valor cavalo via get
    if (!empty($cavalo))
    {
        //prepara a consulta para buscar o cavalo no banco de dados
        $stmt = $pdo->prepare("SELECT * FROM cavalos WHERE raca = :raca");
        $stmt->bindValue(':raca', $cavalo);
        $stmt->execute();
        //verifica a existencia do resultado atraves da variavel de busca
        $busca = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //condicional para a existencia do cavalo no banco de dados, caso nao exista, retorna a mensagem de erro
        if (!$busca)
        {
            /*eu ia colocar a variavel result como "Nao encontrada, 
            mas eu so vou usar isso na pagina de erro,
            entao nao precisa, ia dar mais trbalho e deixar o codigo mais feio"*/
            header("Location: erro.php");
            exit;
        }
        else
        {
            $result = $busca[0]['raca'];
        }
    }
    else {
        require_once 'index.php'; //se a string estiver vazia, redireciona para a pagina inicial
    }

    //informacoes do cavalo
    $raca = $result;
    $info = $busca[0]['info'];
    $preco = $busca[0]['preco'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo($result) ;?> </title>
</head>
<body>
    
    <h1> <?php echo($result) ;?> </h1>
    <p>Informações: <?php echo($info) ;?> </p>
    <p>Preço: R$ <?php echo($preco) ;?> </p>
    <a href="index.php">Voltar</a>
</body>
</html>