<!DOCTYPE html>
<html>
<head>
  <title>Imprimir números</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <h1>Imprimir números</h1>
  <form method="post">
    <label for="inicio">Número inicial:</label>
    <input type="number" name="inicio" required><br><br>
    <label for="fim">Número final:</label>
    <input type="number" name="fim" required><br><br>
    <label for="tipo">Tipo (par ou ímpar):</label>
    <select name="tipo" required>
      <option value="par">Par</option>
      <option value="impar">Ímpar</option>
    </select><br><br>
    <input type="submit" value="Imprimir números">
  </form>
  <br>

  <?php
  function imprimirNumeros($inicio, $fim, $tipo) {
    for ($i = $inicio; $i <= $fim; $i++) {
      if (($tipo == "par" && $i % 2 == 0) || ($tipo == "impar" && $i % 2 == 1)) {
        echo $i . "<br>";
      }
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inicio = $_POST["inicio"];
    $fim = $_POST["fim"];
    $tipo = $_POST["tipo"];
    imprimirNumeros($inicio, $fim, $tipo);
  }
  ?>

  
</body>
</html>
