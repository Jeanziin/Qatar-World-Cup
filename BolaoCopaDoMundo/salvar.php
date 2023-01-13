<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css/salvar.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/salva2.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <section id="sections">



    <div class="container cont">
      <div class="col-12">
        <div class="row">
          <div class="col-6">
            <img src="./imagens/2022_FIFA_World_Cup.svg.png" class="img-fluid" id="img-e" alt="">
          </div>
          <div class="col-6 text-center div-2">
            <h1 id="h1">
              Obrigado

            </h1>
            <h2 id="h2">Por palpitar</h2>
            <p id="pw">Volte Sempre!</p>
            <button type="button" class="edit_btn btn  btn-danger"><a href="./painel.php">Voltar</a></button>
          </div>
        </div>

      </div>

    </div>

  </section>
  <!--JavaScript Bundle with Popper -->
  <script src="jeanejao.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
<?php
include "./conexao.php";

//echo json_encode($_POST);
date_default_timezone_set('America/Sao_Paulo');
$login = '';
$data = date("Y-m-d H:i:s");

$variavel = $_POST['contador'] - 1;
echo $variavel;



$a = 1;
for ($i = 1; $i <= $variavel; $i++) {
  $jogo1 = $_POST['jogo' . $a];
  $timea1 = $_POST['timea' . $a];
  $timeb1 = $_POST['timeb' . $a];
  $sql = "INSERT INTO aposta (id_dados_jogos, t1, t2, login , data) VALUES ('$jogo1','$timea1','$timeb1','$login','$data');";
  $query = $conexao->query($sql);
  if (isset($_POST['jogo2'], $_POST['timea2'], $_POST['timeb2'])) {
    if ($query) {
      echo "BOM";
    } else {
      echo "Ruim";
    }
    $a++;
  }
}
?>