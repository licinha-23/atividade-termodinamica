<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
if (isset ( $_POST['P1']) ) {
    $P1 = $_POST['P1'];
    $P2 = $_POST['P2'];
    $V1 = $_POST['V1'];
    $V2 = $_POST['V2'];
    $T1 = $_POST['T1'];
    $T2 = $_POST['T2'];

   
if ($P1 == null) {
    $resultado = ($P1)*($V1*$T2)/($T1*$V2);
    echo $resultado;
};
if ($P2 == null) {
    $resultado = ($P2)*($V2*$T1)/($T2*$V1);
    echo $resultado;
};
if ($V1 == null) {
    $resultado = ($V1)*($P1*$)/($T2*$V1);
    echo $resultado;
};
if ($V2 == null) {
    $V2 = "";
};
if ($T1 == null) {
    $T1 = "";
};
if ($T2 == null) {
    $T2 = "";
};

$resultado1 = ($P1*$V1)/$T1;
$resultado2 = ($P2*$V2)/$T2;
$resultado = $resultado1/$resultado2;
}

?>

<h1>Atividade 04.07</h1>
<form action="pagina_um.php" method="post">
    <ul>
        <li>
        <label for="P1">P1</label>
        <input type="number" name="P1" id="P1">
        </li>
        <li>
        <label for="P2">P2</label>
        <input type="number" name="P2" id="P2">
        </li>
        <li>
        <label for="V1">V1</label>
        <input type="number" name="V1" id="V1">
        </li>
        <li>
        <label for="V2">V2</label>
        <input type="number" name="V2" id="V2">
        </li>
        <li>
        <label for="T1">T1</label>
        <input type="number" name="T1" id="T1">
        </li>
        <li>
        <label for="T2">T2</label>
        <input type="number" name="T2" id="T2">
        </li>
        <input id= "Cadastrar" type="submit" value="Cadastrar">
    </ul>
</form>

<?php echo "Resultado é $resultado"; ?>

</body>
</html>
