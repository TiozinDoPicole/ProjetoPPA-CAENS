<?php
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAENS | Coordenação de Apoio ao Ensino</title>

    <link rel="stylesheet" href="../css/geral/import.css">
</head>

<body id="dashboard">
    <header class="caens-bg cor-01">
        <div class="container caens-header">
            
            <span>CAENS</span>
         </div>
    </header>

    <main class="bg-verde-claro">
        <div class="container">
            <div class="titulo-pagina">
                <h1>Coordenação de Apoio ao Ensino</h1>
            </div>

            <nav class="dashboard-nav">
                <a href="../php/retirada-item.php">Solicitar Retirada de Item</a>
                <a href="../php/estoque.php">Estoque</a>
                <a href="../php/cadastrar-item.php">Cadastrar Item</a>
                <a href="../php/cadastro-professor.php">Cadastrar Professor</a>
            </nav>
        

            <div class="dashboard-infos ">
                <div class="solicitacoes-atuais dashboard-infos-definicao">
                    <h2>Solicitações Atuais</h2>
                    <ul class="f-bold-400">
                        <li>Empréstimos<span class="solicitacoes-atuais-num">0</span></li>
                        <li>Permanentes<span class="solicitacoes-atuais-num">0</span></li>
                        <li><span class="pendentes">Pedentes</span><span class="solicitacoes-atuais-num">0</span></li>
                    </ul>
                    <a href="#" class="up botao-1">Ver Mais</a>
                </div>                

                <div class="estoque-atual dashboard-infos-definicao">
                    <h2>Estoque Atual</h2>
                    <ul class="f-bold-400">
                        <li>Item A <span>0</span></li>
                        <li>Item B <span>0</span></li>
                        <li>Item C <span>0</span></li>
                        <li>Item D <span>0</span></li>
                        <li>Item E <span>0</span></li>
                        <li>Item F <span>0</span></li>
                    </ul>
                    <span class="estoque-atual-detalhe"></span>
                    <ul class="f-bold-400">
                        <li>Item G <span>0</span></li>
                        <li>Item H <span>0</span></li>
                        <li>Item I <span>0</span></li>
                        <li>Item J <span>0</span></li>
                        <li>Item K <span>0</span></li>
                        <li>Item L <span>0</span></li>
                    </ul>
                    <a href="#" class="botao-3">Ver Mais</a>
                </div>

                <div class="pedidos-mais-recentes dashboard-infos-definicao">
                    <h2>Pedidos Mais Recorrentes</h2>
                    <ul class="f-bold-400">
                        <li>Item A</li>
                        <li>Item B</li>
                        <li>Item C</li>
                        <li>Item D</li>
                        <li>Item E </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

</body>
</html>

