<?php
    include_once 'retirada-itemHelper.php';
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAENS | Retirada de Item</title>
    <link rel="stylesheet" href="../css/geral/import.css">
</head>
<body id="retirada-de-item">
    <header class="caens-bg cor-01">
        <div class="container caens-header">
            
            <span>CAENS</span>
            <nav class="caens-nav f-bold-400">
                <ul>
                    <li><a href="../php/inicio.php">Início</a></li>
                </ul>
            </nav>
         </div>
    </header>
    <main class="bg-verde-claro">
        <div class="container titulo-pagina">
            <h1>Retirada de Item</h1>
        </div>
        
        <form action="retirada-itemHelper.php" class="container form-retirada-de-item">
            <div class="bg-shadow">                    
                <div class="texto-itens select">
                    <label for="nome">Nome do item</label>
                    <input type="text" name="descricao" id="descricao"> <button class="botao-2">Pesquisar</button>

                   
                    <select name="nome" id="nome">
             
                    </select>
                    
                    <label for="quantidade">Quantidade</label>
                    <input type="number" placeholder="Quantidade" name="quantidade" id="quantidade">
                    <label for="tipo">Tipo</label>
                    <select name="tipo" id="tipo">
                        <option value="permanente">Permanente</option>
                        <option value="emprestado">Emprestado</option>
                    </select>
                </div>
        
            </div>
            </div>
            <button class="botao-2">Prosseguir</button>
        </form>
    </main>
</body>
</html>