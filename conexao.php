<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<body>
    <?php
      //conexão com o banco de dados postgreSQL
      $conecta = pg_connect("host=localhost port=5432 dbname=desafio user=postgres password=sqladimin");
      if (!$conecta)
      {
        echo "Connection fallied!!!";
      }
      else
      {
        //echo "Connection Sucessful!!!";
      }
    ?>
</body>
</html>
