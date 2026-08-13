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
    <title>Haras Prime - Simulação de Financiamento</title>
    
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

        /* Subtítulo com mensagem de boas-vindas */
        h2 {
            color: #5c3a21;            /* Cor harmonizada com títulos */
            text-align: center;        /* Centralizado */
            font-size: 18px;           /* Tamanho maior que elementos comuns */
            font-weight: normal;       /* Peso de fonte regular */
            margin: 20px 0 30px 0;     /* Espaçamento */
            padding-bottom: 10px;      /* Espaço interno */
        }

        /* Container para o resultado da simulação */
        .resultado-simulacao {
            background: #fbfaf8;       /* Fundo bege bem suave */
            border: 1px solid #e0ddd7; /* Borda discreta */
            border-radius: 6px;        /* Cantos arredondados */
            padding: 25px;             /* Espaçamento interno */
            margin: 20px 0;            /* Espaço acima e abaixo */
        }

        /* Item de informação individual */
        .info-item {
            margin-bottom: 20px;       /* Cria espaço entre cada item */
            padding-bottom: 15px;      /* Espaçamento interno */
            border-bottom: 1px solid #e0ddd7; /* Linha divisória sutil */
        }

        .info-item:last-child {
            border-bottom: none;       /* Remove a borda do último item */
            margin-bottom: 0;          /* Remove margem do último item */
        }

        /* Label para cada informação */
        .info-label {
            font-weight: bold;         /* Deixa o rótulo em negrito */
            color: #5c3a21;            /* Cor combinando com a identidade visual */
            display: block;            /* Coloca o label em linha própria */
            margin-bottom: 8px;        /* Afasta o label do valor */
            font-size: 12px;           /* Tamanho discreto para o rótulo */
            text-transform: uppercase; /* Maiúsculas para destaque */
            letter-spacing: 0.5px;     /* Espaçamento entre letras */
        }

        /* Valor/Conteúdo da informação */
        .info-value {
            font-size: 20px;           /* Tamanho maior para destacar os valores */
            color: #2c1d11;            /* Marrom escuro para boa leitura */
            font-weight: bold;         /* Negrito para destaque */
            line-height: 1.6;          /* Espaçamento entre linhas */
        }

        /* Destaque especial para a parcela */
        .parcela-destaque {
            background: #fff5e6;       /* Fundo mais amarelado para destacar */
            border-left: 4px solid #d4a574; /* Barra colorida na esquerda */
            padding: 15px;             /* Espaçamento interno */
            border-radius: 4px;        /* Cantos levemente arredondados */
            margin-top: 20px;          /* Espaço acima */
        }

        .parcela-destaque .info-value {
            color: #d4a574;            /* Cor diferente para destacar */
            font-size: 24px;           /* Texto bem maior para a parcela */
        }

        /* Container de ações/botões */
        .actions {
            display: flex;             /* Ativa o modelo Flexbox */
            gap: 10px;                 /* Espaço entre os botões */
            margin-top: 30px;          /* Afasta da área de informações */
            flex-wrap: wrap;           /* Permite quebra de linhas em telas pequenas */
        }

        /* Estilização dos links/botões */
        a {
            flex: 1;                   /* Faz os botões crescerem igualmente */
            min-width: 150px;          /* Largura mínima para não ficar muito pequeno */
            display: block;            /* Trata o link como bloco */
            text-align: center;        /* Centraliza o texto */
            padding: 12px;             /* Altura do botão */
            background-color: #5c3a21; /* Fundo marrom escuro rústico */
            color: white;              /* Texto em cor branca */
            text-decoration: none;     /* Remove o sublinhado padrão */
            border-radius: 4px;        /* Cantos levemente arredondados */
            cursor: pointer;           /* Transforma o ponteiro do mouse */
            font-weight: bold;         /* Texto em negrito */
            transition: background-color 0.3s ease; /* Transição suave */
            box-sizing: border-box;    /* Inclui padding na largura */
        }

        /* Efeito visual ao passar o mouse por cima */
        a:hover {
            background-color: #8c7863; /* Altera para um tom de marrom mais claro */
        }

        /* Botão secundário com cor diferente */
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
        <h1>Simulação de Financiamento Equino</h1>
        
        <h2>Olá, <?php echo $nome; ?>! <br>Em busca de um companheiro?</h2>

        <div class="resultado-simulacao">
            <div class="info-item">
                <span class="info-label">Valor Total do Financiamento</span>
                <div class="info-value">R$ <?php echo number_format($valor_total, 2, ',', '.'); ?></div>
            </div>

            <div class="info-item">
                <span class="info-label">Quantidade de Parcelas</span>
                <div class="info-value"><?php echo $parcelas; ?>x</div>
            </div>

            <div class="parcela-destaque">
                <div class="info-item">
                    <span class="info-label">Valor de Cada Parcela</span>
                    <div class="info-value">R$ <?php echo number_format($parcela, 2, ',', '.'); ?></div>
                </div>
            </div>
        </div>

        <div class="actions">
            <a href="index.php" class="btn-voltar">← Voltar à Página Principal</a>
        </div>
    </div>
</body>

</html>