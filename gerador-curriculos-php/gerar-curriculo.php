<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo 1</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <Style>
        * {
            font-family: arial;
    font-size: 15 ;
        }
        @page {
           
            margin: 20mm;
        }
   
        #bah{
            
            width: 210mm;
            height: 297mm;
            margin: 0;
            padding: 20mm;
            box-sizing: border-box;
        }
        .content {
            width: 100%;
            height: 100%;
            box-sizing: border-box;
        }

#name-t {
    font-family: arial;
    font-size: 50px;

}
    </Style>


</head>
<body id= "bah">

<script>
        // Função para imprimir a página
        function printPage() {
            window.print();
        }

        // Chama a função de impressão assim que a página é carregada
        window.onload = function() {
            printPage();
        };
    </script>
    
<!-- Nome  -->

 <div id="name-t">
<?php echo htmlspecialchars($_POST['nome']);
?>
    </div>
</div>


<h1> Idade </h1>
<?php echo htmlspecialchars($_POST['age']);
?><br />
 
 <h2> Data de Nascimento </h2>
<?php echo htmlspecialchars($_POST['date']);
?><br />


<!-- Contatos  -->
 <div id="contato" class="sidebar" class="cont" > 
<h1> Contato </h1>
<?php echo htmlspecialchars($_POST['telefone']);
?><br /><?php
      echo ($_POST['email']); 
      ?><br /><?php
      echo ($_POST['linkedin'])
      ?>
 </div>

 

<!-- Cargo Pretendido  -->
 
<h1> Cargo </h1>
<?php echo htmlspecialchars($_POST['cargo']);
?><br />
 
 
<!-- Objetivo  -->
 
<h1> Objetivo Profissional </h1>
<?php echo htmlspecialchars($_POST['objetivo']);
?><br /><?php
 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura os dados de formação e experiência
    $formacoes_nomes = $_POST['formacao_nome']; // Nome da Formação
    $formacoes_inicios = $_POST['formacao_inicio']; // Início
    $formacoes_conclusoes = $_POST['formacao_conclusao']; // Conclusão
    $experiencias = $_POST['experiencia']; // Dados de experiência (se houver)

    echo "<h2>Formações</h2>";

    // Processa e exibe as formações
    foreach ($formacoes_nomes as $index => $nome) {
        // Verifica se o índice existe para início e conclusão para evitar erros
        $inicio = isset($formacoes_inicios[$index]) ? $formacoes_inicios[$index] : 'Não informado';
        $conclusao = isset($formacoes_conclusoes[$index]) ? $formacoes_conclusoes[$index] : 'Não informado';

        echo "<p>Formação " . ($index + 1) . ": " . htmlspecialchars($nome) . "<br>";
        echo "Início: " . htmlspecialchars($inicio) . "<br>";
        echo "Conclusão: " . htmlspecialchars($conclusao) . "</p>";
    }
    

    echo "<h2>Experiências</h2>";
    foreach ($experiencias as $index => $experiencia) {
        echo "<p>Experiência " . ($index + 1) . ": " . htmlspecialchars($experiencia) . "</p>";
    }

    
}

