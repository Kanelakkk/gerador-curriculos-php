<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo 1</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <Style>
        @page {
           
            margin: 20mm;
        }
    #img1{
        display: flex;
        align-items: center;
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
    margin-left: 20px;
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
 <div id= img1>
<img src="img/ricardo.jpg"alt="" width="200" height="200">
 <div id="name-t">
<?php echo htmlspecialchars($_POST['nome']);
?>
    </div>
</div>

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
    $formacoes = $_POST['formacao'];
    $experiencias = $_POST['experiencia'];

    // Exemplo de como você pode processar os dados (exibir na tela, salvar em banco de dados, etc.)
    echo "<h2>Formações</h2>";
    foreach ($formacoes as $index => $formacao) {
        echo "<p>Formação " . ($index + 1) . ": " . htmlspecialchars($formacao) . "</p>";
    }

    echo "<h2>Experiências</h2>";
    foreach ($experiencias as $index => $experiencia) {
        echo "<p>Experiência " . ($index + 1) . ": " . htmlspecialchars($experiencia) . "</p>";
    }

    
}

