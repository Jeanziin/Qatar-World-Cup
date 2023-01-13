<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/palpites.css" type="text/css">
  <link rel="stylesheet" href="css/palpites2.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <section id="sec">
    <button type="button" class="edit_btn btn btn-danger"><a href="./painel.php">Voltar</a></button>
    <div class="container cont-edit">
      <div class="text-center">
        <h1>Faça os seus<br>Palpites</h1>
        <div class="grupos text-center">
          <button type="button" class="btn btn-edit btn-danger"><a href="palpites.php?r=palpites&tipo=1 rodada">1° Rodada</a></button>
          <button type="button" class="btn btn-edit btn-danger"><a href="palpites.php?r=palpites&tipo=2 rodada">2° Rodada</a></button>
          <button type="button" class="btn btn-edit btn-danger"><a href="palpites.php?r=palpites&tipo=3 rodada">3° Rodada</a></button>
          <button type="button" class="btn btn-edit btn-danger"> <a href="palpites.php?r=palpites&tipo=OITAVAS">OITAVAS</a></button>
          <button type="button" class="btn btn-edit btn-danger"> <a href="palpites.php?r=palpites&tipo=QUARTAS">QUARTAS</a></button>
          <button type="button" class="btn btn-edit btn-danger"> <a href="palpites.php?r=palpites&tipo=SEMIFINAL">SEMIFINAL</a></button>
          <button type="button" class="btn btn-edit btn-danger"> <a href="palpites.php?r=palpites&tipo=TERCEIRO">TERCEIRO</a></button>
          <button type="button" class="btn btn-edit btn-danger"> <a href="palpites.php?r=palpites&tipo=FINAL">FINAL</a></button>

        </div>
      </div>
      <div class="container  text-center cont2-edit">

        <table class="table text-center">
          <thead>
            <tr>
              <th style="text-align:center;vertical-align:middle">Time A</th>
              <th style="text-align:center;vertical-align:middle">Resultado</th>
              <th id="vs" style="text-align:center;vertical-align:middle">x</th>
              <th style="text-align:center;vertical-align:middle">Resultado</th>
              <th style="text-align:center;vertical-align:middle">Time B</th>
            </tr>
          </thead>
          <form method="post" action="salvar.php">
            <tbody>

              <?php
              include "./conexao.php";
              $tipo = $_GET['tipo'];
              $sql = "SELECT * FROM dados_jogos WHERE rodada = '$tipo'";
              $query = $conexao->query($sql);
              $a = 1;
              while ($dados = $query->fetch_array()) {
              ?>
                <tr>
                  <td class="text-info" colspan="5">
                    <?php echo $dados['data']; ?><br>
                    <?php echo $dados['local'] . ' '; ?>
                    <?php echo $dados['horario'] . ' '; ?>
                    <?php echo $dados['tipo'] . ' '; ?>
                  </td>
                </tr>
                <input type="hidden" name="jogo<?php echo $a; ?>" value="<?php echo $dados['id']; ?>">
                <tr>
                  <td>
                    <img class="img-logob" src="./_images/bandeiras/<?php echo $dados['timea']; ?>.png">
                    <?php echo $dados['timea']; ?>
                  </td>
                  <td style="text-align:center;vertical-align:middle;">
                    <input class="inpt" type="text" name="timea<?php echo $a; ?>" maxlength="2" required>
                  </td>
                  <td style="text-align:center;vertical-align:middle"> x </td>
                  <td style="text-align:center;vertical-align:middle;">
                    <input class="inpt" type="text" name="timeb<?php echo $a; ?>" maxlength="2" required>
                  </td>
                  <td>
                    <?php echo $dados['timeb']; ?>
                    <img class="img-logob" src="./_images/bandeiras/<?php echo $dados['timeb']; ?>.png">
                  </td>
                </tr>

              <?php $a++;
              } ?>
              <input type="hidden" name="contador" value="<?php echo $a; ?>">
            </tbody>
            <tr>
              <td class="text-center justify-content-center" style="text-align:center;vertical-align:middle">
                <button id="butao" type="submit" class="btn-clas justify-content-center btn btn-primary">Salvar</button>
              </td>
            </tr>
          </form>
        </table>

      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>