<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">

    </div>
  </nav>
  <style> #section1 {padding-left:50px;padding-right:5px; padding-top: 100px; padding-bottom: 50px;} </style>
  <div id="section1" class="container-fluid">
  <?php
    if(!@($conexao = pg_connect("host=localhost port=5432 dbname=desafio user=postgres password=sqladimin");))
    {
     print "Não foi possível estabelecer uma conexão com o banco de dados.";
    }
    else
    {
       $query = "select * from formulario";



       $result = pg_query($conexao, $query);

        echo '<table width="100%">';
        echo '<thead><tr>';
        echo '<th>id</th>';
        echo '<th>Name</th>';
        echo '<th>Email</th>';
        echo '<th>Suggestion</th>';
        echo '</tr></thead>';

      /* Retonar um array associativo correspondente a cada linha da tabela */
       while($consulta = pg_fetch_assoc($result))
       {
         echo '<tr>';
         echo '<td>' .$consulta['id']. '</td>';
         echo '<td>' .$consulta['nome']. '</td>';
         echo '<td>' .$consulta['email'] . '</td>';
         echo '<td>' .$consulta['sugestao'] . '</td>';
         echo '</tr>';

       }

       pg_close($conexao);
    }
    ?>
  </div>
</body>
</html>
