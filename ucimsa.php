<?php
$sprava = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $vek = $_POST["vek"];

    if ($vek >= 18) {
        $sprava = "Si plnoletá osoba.";
    } else {
        $sprava = "Si ešte neplnoletá.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kontrola veku</title>
</head>
<body>

    <h2>Zadaj svoj vek pls</h2>

    <form method="POST">
        <input type="number" name="vek" required>
        <button type="submit">Skontrolovať</button>
    </form>

    <p><?php echo $sprava; ?></p>

</body>
</html> &&&&