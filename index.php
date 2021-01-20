<!DOCTYPE html>
<html lang="nl">

<head>
    <title>Midas' Site</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" type="image/x-icon" href="/~midas.n/fotos/standaardIcon.ico">
    <script src="script/script.js"></script>
    <meta property="og:type" content="website">
    <meta property="og:title" content="Midas" />
    <meta property="og:url" content="http://informatica.lvo-weert.nl/~midas.n/" />
    <meta property="og:image" content="/~midas.n/fotos/tumbnail.png" />
    <meta name="theme-color" content="#5CDB95">
    <?php
        if (isset($_GET['pagina'])) {   
            if ($_GET['pagina'] == '2') {
                echo "<meta property='og:description' content='Wesbite school, Midas Nies H4F. Wachtwoord generator' />";
            }
            if ($_GET['pagina'] == '3') {
                echo "<meta property='og:description' content='Wesbite school, Midas Nies H4F. Features ' />";
            }
            if ($_GET['pagina'] == '4') {
                echo "<meta property='og:description' content='Wesbite school, Midas Nies H4F. Contact formulier' />";
            }
        } else {
            echo "<meta property='og:description' content='Wesbite school, Midas Nies H4F.' />";
        }
    ?>
</head>

<body>
    <header>
        <h1 id="title">Midas' Site</h1>
    </header>

    <main>
        <div id="contentMobile">
            <button style="width: 100%;" id="hamburgerButton" onclick="hamburgerMenu()">≡</button>

            <div id="mobileButtonsContainer">
                <button style="width: 100%;" class="navigationButton" onclick="iframeRedirect('1')">Home</button>
                <button style="width: 100%;" class="navigationButton" onclick="iframeRedirect('2')">Wachtwoord</button>
                <button style="width: 100%;" class="navigationButton" onclick="iframeRedirect('3')">Features</button>
                <button style="width: 100%;" class="navigationButton" onclick="iframeRedirect('4')">Contact</button>
            </div>
        </div>

        <div id="contentDesktop">
            <button class="navigationButton" onclick="iframeRedirect('1')">Home</button>
            <button class="navigationButton" onclick="iframeRedirect('2')">Wachtwoord</button>
            <button class="navigationButton" onclick="iframeRedirect('3')">Features</button>
            <button class="navigationButton" onclick="iframeRedirect('4')">Contact</button>
        </div>

        <hr>

        <div id="iframeContainer" style="overflow: hidden;">
            <iframe src="subpaginas/subPagina1.html" style="width:100%; overflow: hidden;" id="iframeSubPages" onload="iframeHeight()"></iframe>
        </div>
    </main>

<?php
    if (isset($_GET['pagina'])) {
        if ($_GET['pagina'] == '2') {
            echo "<script>setIFrame(path='subpaginas/subPagina2.html')</script>";
        }
        if ($_GET['pagina'] == '3') {
            echo "<script>setIFrame(path='subpaginas/subPagina3.html')</script>";
        }
        if ($_GET['pagina'] == '4') {
            echo "<script>setIFrame(path='subpaginas/subPagina4.php')</script>";
        }
    } else {
        echo "<script>setIFrame(path='subpaginas/subPagina1.html')</script>";
    }
?>

</body>

</html>