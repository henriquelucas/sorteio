<html>
    <head>
        <title>Sorteios</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>

        </style>
    </head>
    <body class="h-100 mt-5">
       <div class="container">
            <form action="./sorteia.php" method="post">
                <label for="name">Nome do Sorteio:</label>
                <input id="name" class="col-sm-12" type="text" name="name"></br></br>
                <label for="name">Do número:</label>
                <input id="numeroum" type="number" name="numeroum"  placeholder="1"  style="width: 70px;" required>
                <label for="name">até número:</label>
                <input id="numerodois" type="number" name="numerodois" placeholder="100"  style="width: 70px;" required></br></br>
                <input type="submit" value="Sortear">
            </form>
           <div class="text-center"><span>Desenvolvido por Henrique Lucas</span></div>
       </div> 
    </body>
</html>