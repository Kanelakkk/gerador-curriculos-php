<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo</title>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>

<script>

    function printPage() {
        window.print();
    }


    window.onload = function() {
        printPage();
    };
</script>


<h1><?php echo htmlspecialchars($_POST['nome']); ?></h1>


<p><strong>Telefone:</strong> <?php echo htmlspecialchars($_POST['telefone']); ?></p>
<p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
<p><strong>LinkedIn:</strong> <?php echo htmlspecialchars($_POST['linkedin']); ?></p>


<p><strong>Idade:</strong> <?php echo htmlspecialchars($_POST['age']); ?></p>
<p><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($_POST['date']); ?></p>


<h2>Cargo Pretendido</h2>
<p><?php echo htmlspecialchars($_POST['cargo']); ?></p>


<h2>Objetivo Profissional</h2>
<p><?php echo htmlspecialchars($_POST['objetivo']); ?></p>


<h2>Formação Acadêmica</h2>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $formacoes_nomes = $_POST['formacao_nome']; 
    $formacoes_inicios = $_POST['formacao_inicio']; 
    $formacoes_conclusoes = $_POST['formacao_conclusao']; 


    foreach ($formacoes_nomes as $index => $nome) {
        $inicio = isset($formacoes_inicios[$index]) ? $formacoes_inicios[$index] : 'Não informado';
        $conclusao = isset($formacoes_conclusoes[$index]) ? $formacoes_conclusoes[$index] : 'Não informado';

        echo "<p><strong>Formação " . ($index + 1) . ":</strong> " . htmlspecialchars($nome) . "<br>";
        echo "<strong>Início:</strong> " . htmlspecialchars($inicio) . "<br>";
        echo "<strong>Conclusão:</strong> " . htmlspecialchars($conclusao) . "</p>";
    }
}
?>


<h2>Experiência Profissional</h2>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $experiencias = $_POST['experiencia'];

    foreach ($experiencias as $index => $experiencia) {
        echo "<p><strong>Experiência " . ($index + 1) . ":</strong> " . htmlspecialchars($experiencia) . "</p>";
    }
}
?>

</body>
</html>
