<?php
    //funcao para facilitar a vida do desenvolvedor no futuro
    function erro($codigo)
    {
        if($codigo == "idade")
        {
            header("Location: erros_paginas/erro_idade.php");
            exit;
        }
        else if($codigo == "busca")
        {
            header("Location: erros_paginas/erro_busca.php");
            exit;
        }
        else if($codigo == "preco_invalido")
        {
            header("Location: erros_paginas/erro_preco_invalido.php");
            exit;
        }
    }