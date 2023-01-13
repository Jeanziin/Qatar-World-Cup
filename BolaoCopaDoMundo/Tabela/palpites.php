
<?php include "config.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./templates/palpites/styles.css">
   <!-- Bootstrap CSS -->
  
</head>


<body>


  <form method="POST" class="container form" action="_scripts/inserir.php">
    <div class="grupos">
      <button type="button"><a href="index.php?r=palpites&tipo=GRUPO A">GRUPO A</a></button>
      <button type="button"><a href="index.php?r=palpites&tipo=GRUPO B">GRUPO B</a></button>
      <button type="button"><a href="index.php?r=palpites&tipo=GRUPO C">GRUPO C</a></button>
      <button type="button"><a href="index.php?r=palpites&tipo=GRUPO D">GRUPO D</a></button>
    </div>   
    <div class="grupos">
      <button type="button"><a href="index.php?r=palpites&tipo=GRUPO E">GRUPO E</a></button>
      <button type="button"><a href="index.php?r=palpites&tipo=GRUPO F">GRUPO F</a></button>
      <button type="button"><a href="index.php?r=palpites&tipo=GRUPO G">GRUPO G</a></button>
      <button type="button"><a href="index.php?r=palpites&tipo=GRUPO H">GRUPO H</a></button>
    </div>
    <div class="grupos">
      <button type="button"><a href="index.php?r=palpites&tipo=OITAVAS DE FINAL">OITAVAS</a></button>
      <button type="button"><a href="index.php?r=palpites&tipo=QUARTAS DE FINAL">QUARTAS</a></button>
      <button type="button"><a href="index.php?r=palpites&tipo=SEMIFINAL">SEMIFINAL</a></button>
      <button type="button"><a href="index.php?r=palpites&tipo=FINAL">FINAL</a></button>
    </div>
    <?php
         $tipo = $_GET['tipo'];  
          $sql = "SELECT * FROM dados_jogos WHERE tipo = '$tipo'";
          $query = $mysqli->query($sql);
          $i = 1;
          while ($dados = $query->fetch_array()){
        ?>

        <div class="rodadas" style=" 
        background-image: url(./img/selecao/grupo1.svg);
        background-repeat: no-repeat, no-repeat;
        background-size: cover;">

            <div class="col-12">
             <div class="rodadas-text">
              Data do Jogo: <?php echo $dados['data']; ?> <br>
            Hora do Jogo: <?php echo $dados['horario']; ?> <br>
            Estadio: <?php echo $dados['local']; ?> <br>
              </div>
            
              <div class="rodadas-img">
              <img src="_images/<?php echo $dados['timea']; ?>.svg">
            <?php echo $dados['timea']; ?>
            <input type="text" class="form-control" width="20px" name="timea<?php echo $i; ?>"> 
            <span>X</span>
            <input type="text"class="form-control" width="20px"  name="timeb<?php echo $i; ?>" >
            <?php echo $dados['timeb']; ?>
            <img src="_images/<?php echo $dados['timeb']; ?>.svg"><br>
              </div>
           
            </div>
            
    </div>
            
        <?php $i++;} ?>
            
        
 
    </div>
            <button class="subm it">CIRAR</button>
          </form>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  
  

</body>

</html>
