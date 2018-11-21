/* Rellena los productos en el formulario de contacto */

if (document.querySelector(".wpcf7-form #producto")) {
    $.getJSON("/wp-json/wp/v2/productos?per_page=100", function (data) {
        data.forEach(item => {
            if (item.parent != 0) {
                var producto = item.title.rendered
                var id = item.id
                $('#producto').append(`<option value="${producto}" data-id="${id}">${producto}</option>`)
            }
        })
        if (window.location.search) {
            var search =  window.location.search.replace("?", "").split("=")
            indexId = search.indexOf("id")
            var id = search[indexId + 1]
            seleccionarDataId(id)
        }
    })
}
if (document.getElementsByClassName('wpcf7-form')) {
    document.getElementsByClassName('wpcf7')[0].addEventListener('wpcf7mailsent', function (event) {
        $(".wpcf7 .form-group").hide(250)
    }, false);
}

function seleccionarDataId (id) {
    productos = document.getElementById("producto")
    document.querySelectorAll("#producto option").forEach(producto => {
        if (producto.attributes.getNamedItem("data-id")) {
            var valor = producto.attributes.getNamedItem("data-id").nodeValue
            var index = producto.index
            if (valor == id.toString()) {
                productos.options.selectedIndex = index
            }
        }
    })
}