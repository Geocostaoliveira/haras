<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haras Prime - Preço Inválido</title>
    
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
            color: #8c5a3a;            /* Cor de aviso/erro (marrom avermelhado) */
            text-align: center;        /* Alinhamento centralizado do texto */
            margin-top: 0;             /* Remove margem superior padrão */
            border-bottom: 2px solid #8c7863; /* Linha divisória fina abaixo do título */
            padding-bottom: 15px;      /* Espaço entre o texto e a linha divisória */
            font-size: 28px;           /* Tamanho destaque para o erro */
        }

        /* Ícone de aviso/erro */
        .error-icon {
            display: block;            /* Coloca em linha própria */
            text-align: center;        /* Centralizado */
            font-size: 48px;           /* Tamanho grande */
            margin-bottom: 20px;       /* Espaço abaixo do ícone */
        }

        /* Mensagem de aviso */
        .error-message {
            background: #fdf5f0;       /* Fundo bege avermelhado suave */
            border-left: 4px solid #d9746a; /* Barra lateral em cor de aviso */
            padding: 20px;             /* Espaçamento interno */
            border-radius: 4px;        /* Cantos levemente arredondados */
            margin: 25px 0;            /* Espaço acima e abaixo */
            line-height: 1.8;          /* Espaçamento entre linhas */
            color: #5c3a21;            /* Texto em marrom escuro */
            font-size: 15px;           /* Tamanho confortável para leitura */
        }

        /* Container de ações/botões */
        .actions {
            display: flex;             /* Ativa o modelo Flexbox */
            gap: 10px;                 /* Espaço entre os botões */
            margin-top: 30px;          /* Afasta da área de mensagens */
            justify-content: center;   /* Centraliza os botões */
        }

        /* Estilização dos links/botões */
        a {
            display: inline-block;     /* Trata o link como bloco inline */
            text-align: center;        /* Centraliza o texto */
            padding: 12px 30px;        /* Altura e largura do botão */
            background-color: #5c3a21; /* Fundo marrom escuro rústico */
            color: white;              /* Texto em cor branca */
            text-decoration: none;     /* Remove o sublinhado padrão */
            border-radius: 4px;        /* Cantos levemente arredondados */
            cursor: pointer;           /* Transforma o ponteiro do mouse */
            font-weight: bold;         /* Texto em negrito */
            transition: background-color 0.3s ease; /* Transição suave */
        }

        /* Efeito visual ao passar o mouse por cima */
        a:hover {
            background-color: #8c7863; /* Altera para um tom de marrom mais claro */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="error-icon">💰</div>
        <h1>Preço Inválido</h1>
        
        <div class="error-message">
            <p>O valor informado para o cavalo é inválido. Por favor, verifique o valor e tente novamente.</p>
        </div>

        <div class="actions">
            <a href="../index.php">← Voltar à Página Principal</a>
        </div>
    </div>
</body>
</html>