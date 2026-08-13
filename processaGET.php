<?php 
    require_once 'conexaoDB.php';
    require_once 'funcs.php';
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
            erro("busca");
        }
        else
        {
            $result = $busca[0]['raca'];
        }
    }
    else {
        header("Location: index.php");
        exit;
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
    <title>Haras Prime - <?php echo($result) ;?></title>
    
    <style>
        /* ==========================================================================
           ESTILIZAÇÃO CSS
           ========================================================================== */

        /* Configurações básicas da página inteira */
        body {
            background-color: #f4f1ea; /* Tom de areia claro (fundo elegante e rústico) */
            color: #2c1d11;            /* Marrom escuro para garantir excelente contraste de leitura */
            font-family: 'Georgia', serif; /* Fonte com serifa que transmite tradição/sofisticação */
            margin: 0;                 /* Remove margens padrão do navegador nas bordas da tela */
            padding: 20px;             /* Cria um espaçamento de segurança nas bordas em telas pequenas */
        }

        /* Caixa centralizadora do conteúdo */
        .container {
            max-width: 600px;          /* Impede que o conteúdo estique demais em monitores grandes */
            margin: 0 auto;            /* Zera o topo/baixo e centraliza a caixa horizontalmente na tela */
            background: #fff;          /* Fundo branco para destacar o conteúdo */
            padding: 30px;             /* Espaço interno entre as bordas da caixa e os elementos de texto */
            border-radius: 8px;        /* Arredondamento suave nos cantos da caixa */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Sombra sutil para dar efeito de profundidade */
        }

        /* Configurações para Títulos principais */
        h1 {
            color: #5c3a21;            /* Tom de marrom avermelhado institucional */
            text-align: center;        /* Alinhamento centralizado do texto */
            margin-top: 0;             /* Remove margem superior padrão */
            border-bottom: 2px solid #8c7863; /* Linha divisória fina abaixo do título */
            padding-bottom: 15px;      /* Espaço entre o texto e a linha divisória */
        }

        /* Estilização dos parágrafos informativos */
        .info-item {
            margin-bottom: 20px;       /* Cria espaço entre cada item de informação */
            padding-bottom: 15px;      /* Espaçamento interno */
            border-bottom: 1px solid #e0ddd7; /* Linha divisória sutil entre items */
        }

        .info-item:last-child {
            border-bottom: none;       /* Remove a borda do último item */
            margin-bottom: 30px;       /* Aumenta espaço antes dos botões */
        }

        .info-label {
            font-weight: bold;         /* Deixa o rótulo em negrito */
            color: #5c3a21;            /* Cor combinando com a identidade visual */
            display: block;            /* Coloca o label em linha própria */
            margin-bottom: 8px;        /* Afasta o label do valor */
            font-size: 13px;           /* Tamanho discreto para o rótulo */
            text-transform: uppercase; /* Maiúsculas para destaque */
            letter-spacing: 0.5px;     /* Espaçamento entre letras */
        }

        .info-value {
            font-size: 18px;           /* Tamanho maior para destacar os valores */
            color: #2c1d11;            /* Marrom escuro para boa leitura */
            line-height: 1.6;          /* Espaçamento entre linhas para melhor legibilidade */
        }

        /* Preço em destaque especial */
        .preco-destaque {
            background: #fbfaf8;       /* Fundo bege suave */
            border-left: 4px solid #5c3a21; /* Barra colorida na esquerda */
            padding: 15px;             /* Espaçamento interno */
            border-radius: 4px;        /* Cantos levemente arredondados */
            margin: 20px 0;            /* Espaço acima e abaixo */
        }

        .preco-destaque .info-value {
            font-size: 24px;           /* Texto maior para o preço */
            font-weight: bold;         /* Destaque em negrito */
            color: #5c3a21;            /* Cor marrom destaca o preço */
        }

        /* Container de botões/ações */
        .actions {
            display: flex;             /* Ativa o modelo Flexbox */
            gap: 10px;                 /* Espaço entre os botões */
            margin-top: 30px;          /* Afasta da área de informações */
        }

        /* Estilização dos links/botões */
        a {
            flex: 1;                   /* Faz os botões crescerem igualmente */
            display: block;            /* Trata o link como bloco */
            text-align: center;        /* Centraliza o texto */
            padding: 12px;             /* Altura do botão */
            background-color: #5c3a21; /* Fundo marrom escuro rústico */
            color: white;              /* Texto em cor branca para alto contraste */
            text-decoration: none;     /* Remove o sublinhado padrão */
            border-radius: 4px;        /* Cantos levemente arredondados */
            cursor: pointer;           /* Transforma o ponteiro do mouse na "mãozinha" */
            font-weight: bold;         /* Texto em negrito */
            transition: background-color 0.3s ease; /* Transição suave na cor de fundo */
        }

        /* Efeito visual ao passar o mouse por cima do link */
        a:hover {
            background-color: #8c7863; /* Altera para um tom de marrom mais claro */
        }

        /* Estilização de link secundário (voltar) */
        .btn-voltar {
            background-color: #8c7863; /* Cor diferente para diferenciar */
        }

        .btn-voltar:hover {
            background-color: #5c3a21; /* Inverte ao passar mouse */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1><?php echo($result) ;?></h1>
        
        <div class="info-item">
            <span class="info-label">Informações da Raça</span>
            <div class="info-value"><?php echo($info) ;?></div>
        </div>

        <div class="preco-destaque">
            <div class="info-item">
                <span class="info-label">Preço</span>
                <div class="info-value">R$ <?php echo(number_format($preco, 2, ',', '.')) ;?></div>
            </div>
        </div>

        <div class="actions">
            <a href="index.php" class="btn-voltar">← Voltar à Busca</a>
        </div>
    </div>
</body>

</html>