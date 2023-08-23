<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Do Processamento</h1>
    </header>
    <main>
      <?php 
       $n = $_REQUEST ["nome"] ?? "Sem nome";
       $s = $_REQUEST ["sobrenome"] ?? "Sem sobrenome";
       echo "<p>É um grande prazer em te conhecer, <strong> $n $s </strong>! <p> Este é o meu site! \u{1F525} </p>";
      ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>