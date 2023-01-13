<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/seup.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <section>
    <button type="button" class="btn btn-edit btn-danger"><a href="./painel.php">Voltar</a></button>
    <div class="text-center">
      <h1 id="white">Confira</h1>
      <h3 id="white">Seus Palpites</h3>
    </div>
    <form class="conteiner form">
      <div class="text-center">
        <h1 id="acerto">Acertos</h1>
        <i class="icone fa-sharp fa-solid fa-arrow-down"></i>
      </div>
      <?php
      include "./conexao.php";

      $sql = "SELECT * FROM aposta a JOIN dados_jogos d ON a.id_dados_jogos = d.id HAVING t1 = rt1 && t2 = rt2";
      $query = $conexao->query($sql);
      while ($dados = $query->fetch_array()) {
      ?>

        <div class="container top-r text-center align-items-center">
          <div class="colum-edit black-edit">
            <div class="sec-edit">
              <img id="img-time" src="./_images/bandeiras/<?php echo $dados['timea']; ?>.png">
              <h6><?php echo $dados['timea']; ?></h6>
              <input type="text" class="rusul" name="timea" value="<?php echo $dados['t1']; ?>">
              <span>X</span>
              <input type="text" class="rusul" name="timea" value="<?php echo $dados['t2']; ?>">
              <h6><?php echo $dados['timeb']; ?></h6>
              <img id="img-time" src="./_images/bandeiras/<?php echo $dados['timeb']; ?>.png">
            </div>
            <div class="link-itens text-center">
              <i class="fa-solid fa-calendar-days"></i>
              <p><?php echo $dados['data'] ?> Ás <?php echo $dados['horario'] ?></p>
              <i class="fa-solid fa-location-dot"></i>
              <p><?php echo $dados['local'] ?></p>
            </div>
          </div>
        </div>

      <?php } ?>
    </form>
    <form class="conteiner form">
      <div>
        <div class="text-center">
          <h1 id="acerto">Erros</h1>
          <i class=" icone fa-sharp fa-solid fa-arrow-down"></i>
        </div>
        <?php
        include "./conexao.php";

        $sql = "SELECT * FROM aposta a JOIN dados_jogos d ON a.id_dados_jogos = d.id having  t1 != rt1 || t2 != rt2";
        $query = $conexao->query($sql);
        while ($dados = $query->fetch_array()) {
        ?>

          <div class="container top-r text-center align-items-center">
            <div class="colum-edit black-edit1">
              <div class="sec-edit">
                <img id="img-time" src="./_images/bandeiras/<?php echo $dados['timea']; ?>.png">
                <h6><?php echo $dados['timea']; ?></h6>
                <input type="text" class="rusul" name="timea" value="<?php echo $dados['t1']; ?>">
                <span>X</span>
                <input type="text" class="rusul" name="timea" value="<?php echo $dados['t2']; ?>">
                <h6><?php echo $dados['timeb']; ?></h6>
                <img id="img-time" src="./_images/bandeiras/<?php echo $dados['timeb']; ?>.png">
              </div>
              <div class="link-itens text-center">
                <i class="fa-solid fa-calendar-days"></i>
                <p><?php echo $dados['data'] ?> Ás <?php echo $dados['horario'] ?></p>
                <i class="fa-solid fa-location-dot"></i>
                <p><?php echo $dados['local'] ?></p>
              </div>
            </div>
          </div>

      </div>
      </div>
      </div>
    <?php } ?>
    </form>

  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>