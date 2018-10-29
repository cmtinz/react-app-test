/* Rellena los productos en el formulario de contacto */

if (document.querySelector(".wpcf7-form #producto")) {
    $.getJSON("/wp-json/wp/v2/productos", function (data) {
        data.forEach(item => {
            var producto = item.title.rendered
            $('#producto').append(`<option value="${producto}">${producto}</option>`)
        })
    })
}
if (document.getElementsByClassName('wpcf7-form')) {
    document.getElementsByClassName('wpcf7')[0].addEventListener('wpcf7submit', function (event) {
        $(".wpcf7 .form-group").hide(250)
    }, false);
}