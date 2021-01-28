function setIFrame(path) {
	document.getElementById('iframeSubPages').src = path;
}

function hamburgerMenu() {
    var hamburgerMenu = document.getElementById('mobileButtonsContainer');
    if (hamburgerMenu.style.display == "block") {
        hamburgerMenu.style.display = "none";
        document.getElementById("hamburgerButton").innerHTML = "≡";
    } else {
        hamburgerMenu.style.display = "block";
        document.getElementById("hamburgerButton").innerHTML = "✖";
    }
}

function playSound(url) {
    var audio = new Audio(url);
    audio.play();
}

function iframeRedirect(pagina) {
    if (pagina == '1') {
        window.location.href = 'http://informatica.lvo-weert.nl/~midas.n/'
    } else {
        window.location.href = 'http://informatica.lvo-weert.nl/~midas.n/?pagina=' + pagina;
    }
}

function iframeHeight() {
    var iframeSubPages = document.getElementById('iframeSubPages');
    iframeSubPages.style.height = iframeSubPages.contentWindow.document.documentElement.scrollHeight + 'px';
}