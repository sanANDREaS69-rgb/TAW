<?php
$conn = mysqli_connect("localhost", "root", "", "warsztat");

$result = mysqli_query($conn, "SELECT id, nazwa, cena FROM uslugi");
var_dump($_POST);
// $row = mysqli_fetch_array($result);
// var_dump($row);
$chekname = $_POST["name"] ?? " ";
$checknumber = $_POST["number"] ?? " ";

if (isset($_POST["name"], $_POST["number"], $_POST["usluga"], $_POST["uwagi"])) {
}
if (empty($chekname) || empty($checknumber)) {
    echo "nie jest wypełnione pole";
} else {
    echo "OK";
}
//$skript2 = mysqli_query($conn, "INSERT INTO ");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>AutoSerwis - Panel Obsługi Zgłoszeń</h1>
    </header>
    <main>
        <h2>Nowe zgłoszenie</h2>
        <form method="post">
            <label for="name">Imię i nazwisko</label>
            <input type="text" name="name">
            <label for="number">Numer rejestracji pojazdu</label>
            <input type="text" name="number">
            <select name="usluga" id="">
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    echo '<option value="' . $row["id"] . '">' . $row['nazwa'] . '</option>';
                }
                ?>
            </select>
            <textarea name="uwagi" id=""></textarea>
            <button type="submit">Dodaj zgłoszenie</button>
        </form>
    </main>
    <aside>
        <h2>Ostatnie naprawy</h2>
    </aside>
    <footer>san_ANDREaS 18.09.2026</footer>
</body>

</html>