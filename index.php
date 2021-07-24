<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Bhaskara</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<form class="form-content" method="POST" action="salvar.php">
<!-- titulo -->
<h1>Calculo de Bhaskara</h1><br>

<!-- Ex formula -->
<p>ax<sup>2</sup>+ bx + c = 0</p>

<!-- pra digital -->
<input type="text" class="form-control" name="txta" placeholder="Digite o valor de A"><br>
<input type="text" class="form-control" name="txtb" placeholder="Digite o valor de B"><br>
<input type="text" class="form-control" name="txtc" placeholder="Digite o valor de C"><br>
<br>

  <br>
  <div class="col text-center">

  <!-- calcular -->
  <button type="submit" name="btncal" class="btn btn-info">Calcular</button>
</div>
</form>
</body>
</html>