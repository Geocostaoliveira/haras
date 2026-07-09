<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haras Prime - Painel Administrativo</title>
    
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
            max-width: 600px;          /* Impede que o formulário estique demais em monitores grandes */
            margin: 0 auto;            /* Zera o topo/baixo e centraliza a caixa horizontalmente na tela */
            background: #fff;          /* Fundo branco para destacar os formulários */
            padding: 30px;             /* Espaço interno entre as bordas da caixa e os elementos de texto */
            border-radius: 8px;        /* Arredondamento suave nos cantos da caixa */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Sombra sutil para dar efeito de profundidade */
        }

        /* Configurações para Títulos principais e secundários */
        h1, h2 {
            color: #5c3a21;            /* Tom de marrom avermelhado institucional */
            text-align: center;        /* Alinhamento centralizado do texto */
        }

        /* Ajuste específico para os títulos de seções (h2) */
        h2 {
            border-bottom: 2px solid #8c7863; /* Linha divisória fina abaixo do título */
            padding-bottom: 5px;       /* Espaço entre o texto e a linha divisória */
            margin-top: 30px;          /* Afasta o título do bloco que estiver acima dele */
        }

        /* Organização estrutural de cada campo do formulário */
        .form-group {
            margin-bottom: 15px;       /* Cria espaço entre um campo e o próximo */
            display: flex;             /* Ativa o modelo Flexbox */
            flex-direction: column;    /* Alinha o Label acima do Input de forma vertical */
        }

        /* Estilização dos rótulos dos campos (Textos de orientação) */
        label {
            font-weight: bold;         /* Deixa o texto em negrito */
            margin-bottom: 5px;        /* Afasta ligeiramente o label do campo de digitação */
            color: #5c3a21;            /* Cor combinando com a identidade visual */
        }

        /* Estilização padrão para caixas de texto e seletores */
        input, select {
            padding: 10px;             /* Aumenta a área interna de clique e digitação */
            border: 1px solid #8c7863; /* Borda fina em tom de marrom claro */
            border-radius: 4px;        /* Arredonda os cantos dos campos */
            font-size: 14px;           /* Tamanho de letra confortável para leitura */
        }

        /* Estilização dos botões de envio */
        button {
            background-color: #5c3a21; /* Fundo marrom escuro rústico */
            color: white;              /* Texto em cor branca para alto contraste */
            padding: 12px;             /* Altura do botão */
            border: none;              /* Remove a borda padrão do sistema */
            border-radius: 4px;        /* Cantos levemente arredondados */
            cursor: pointer;           /* Transforma o ponteiro do mouse na "mãozinha" de clique */
            font-size: 16px;           /* Destaca o tamanho do texto do botão */
            font-weight: bold;         /* Texto em negrito */
            width: 100%;               /* Faz o botão ocupar toda a largura disponível da coluna */
        }

        /* Efeito visual ao passar o mouse por cima do botão (Feedback ao usuário) */
        button:hover {
            background-color: #8c7863; /* Altera para um tom de marrom mais claro */
        }

        /* Bloco exclusivo para a área de busca rápida */
        .search-box {
            background: #fbfaf8;       /* Fundo bege bem suave para diferenciar visualmente */
            border: 1px dashed #8c7863; /* Borda tracejada rústica */
            padding: 15px;             /* Espaçamento interno */
            border-radius: 6px;        /* Cantos arredondados */
            margin-bottom: 20px;       /* Afasta a área de busca do simulador de financiamento */
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Haras Prime - Sistema Interno</h1>

        <div class="search-box">
            <h2>Buscar Cavalo no Plantel</h2>
            
            <form action="processa.php" method="GET">
                <div class="form-group">
                    <label for="busca">Nome ou Raça do Animal:</label>
                    <input type="text" id="busca" name="txt_busca" placeholder="Ex: Quarto de Milha...">
                </div>
                <button type="submit">Pesquisar (GET)</button>
            </form>
        </div>


        <h2>Simulador de Financiamento Equino</h2>
        
        <form action="processa.php" method="POST">
            
            <div class="form-group">
                <label for="nome">Nome do Proponente:</label>
                <input type="text" id="nome" name="txt_nome" required>
            </div>

            <div class="form-group">
                <label for="idade">Idade do Proponente:</label>
                <input type="number" id="idade" name="num_idade" required>
            </div>

            <div class="form-group">
                <label for="valor">Valor do Cavalo (R$):</label>
                <input type="number" step="0.01" id="valor" name="num_valor" required>
            </div>

            <div class="form-group">
                <label for="parcelas">Quantidade de Parcelas:</label>
                <select id="parcelas" name="sel_parcelas">
                    <option value="1">À vista (Sem Juros)</option>
                    <option value="12">12 parcelas (Adicional de 5%)</option>
                    <option value="24">24 parcelas (Adicional de 12%)</option>
                </select>
            </div>

            <button type="submit">Processar Simulação (POST)</button>
        </form>
    </div>

</body>

</html>