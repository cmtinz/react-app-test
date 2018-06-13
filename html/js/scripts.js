// Documento listo
document.addEventListener("DOMContentLoaded", function () {
    redimensionarBody()
    window.onresize = redimensionarBody;
})

// Establece que el padding del body sea igual a la altura del footer para que este elemento esté debidamente posicionado bottom.
function redimensionarBody(){
    alto = document.getElementsByTagName("footer")[0].clientHeight + 15;
    document.body.style.paddingBottom = alto + "px";
}