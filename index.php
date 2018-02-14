<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<body>
    <?php
      include "conexao.php";

      //Dados do formulario
      $nome=$_POST['name'];
      $email=$_POST['endelet'];
      $sugestao=$_POST['suggestion'];

      if ($nome=='' || $email=='' || $sugestao=='')
      {
        echo "<script type='text/javascript'>alert('Campo em branco !!!')</script>";
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.html'>";
      }
      else {
        //Inserção no banco
        $sql="insert into formulario values (nextval('sq_pk_formulario'::regclass),
        '$nome',
        '$email',
        '$sugestao')";


        $resultado=pg_query($conecta,$sql);
        $linhas=pg_affected_rows($resultado);
        if ($linhas > 0)
        {
          //echo "Done!";
          echo "<script type='text/javascript'>alert('Thank you for your suggestion !!!')</script>";
          echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.html'>";
        }
        else {
          echo "Error!!!";

        }
        //Encerra conexão
        pg_close($conecta);
      }
    ?>
</body>
</html>
