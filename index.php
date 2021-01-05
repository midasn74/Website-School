<!DOCTYPE html>
<html lang="nl">

<head>
    <title>Midas' Site</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" type="image/x-icon" href="/~midas.n/fotos/standaardIcon.ico">
    <script src="script/script.js"></script>
</head>

<body>
    <header>
        <h1 id="title">Midas' Site</h1>
        <button id="hamburgerButton" onclick="hamburgerMenu()">≡</button>
    </header>

    <main>
        <div id="contentMobile">
            <div id="navigationMenuMobile">
                <button style="display: block;" class="navigationButton" onclick="iframeRedirect('0')">Home</button>
                <button style="display: block;" class="navigationButton" onclick="iframeRedirect('1')">Wachtwoord</button>
                <button style="display: block;" class="navigationButton" onclick="iframeRedirect('2')">Features</button>
                <button style="display: block;" class="navigationButton" onclick="iframeRedirect('3')">Contact</button>
            </div>
        </div>

        <div id="contentDesktop">
            <div id="navigationMenuDesktop">
                <button class="navigationButton" onclick="iframeRedirect('0')">Home</button>
                <button class="navigationButton" onclick="iframeRedirect('1')">Wachtwoord</button>
                <button class="navigationButton" onclick="iframeRedirect('2')">Features</button>
                <button class="navigationButton" onclick="iframeRedirect('3')">Contact</button>
            </div>
        </div>

        <hr>

        <div id="iframeContainer" style="overflow: hidden;">
            <iframe src="subpaginas/subPagina1.html" style="width:100%; overflow: hidden;" id="iframeSubPages" onload="iframeHeight()"></iframe>
        </div>
    </main>

<?php
    if (isset($_GET['pagina'])) {
        if ($_GET['pagina'] == '1') {
            echo "<script>setIFrame(path='subpaginas/subPagina2.html')</script>";
        }
        if ($_GET['pagina'] == '2') {
            echo "<script>setIFrame(path='subpaginas/subPagina3.html')</script>";
        }
        if ($_GET['pagina'] == '3') {
            echo "<script>setIFrame(path='subpaginas/subPagina4.php')</script>";
        }
    } else {
        echo "<script>setIFrame(path='subpaginas/subPagina1.html')</script>";
    }
?>

</body>

</html>