<html>
    <head>
        <title>Sorteios</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
          .numero {
            text-align: center;
            font-size: 20rem;
            height: 43rem;
            font-weight: 700;
            color: #003576;
          }
          .ganhador {
            font-size: 3rem;
          }
        </style>
   </head>
   <?php
    $name = $_POST['name'];
    $numeroum = $_POST['numeroum'];
    $numerodois = $_POST['numerodois'];
?>
    <body class="h-100">
       <div class="container">
        <div class="ganhador text-center">O ganhador do sorteio <?php echo $name; ?>  foi o número:</div>
       <div class="numero"><?php echo rand($numeroum,$numerodois); ?></div>
       </div>
    </body>
</html>