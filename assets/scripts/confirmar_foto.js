/* function mostrarMensaje() {
    var div = document.getElementById("mensajeConforme");
    popup.classList.toggle("show");
} */

/* function mostrar(){
    var div = document.getElementById('mensajeConforme');
    if (div.visibility == "hidden") {
        div.visibility = "visible";
    }
} */

var boton = document.getElementById('mensajeConforme');
		var div = document.getElementById('mensajeConforme');

		boton.addEventListener('click',mostrarModal);

		function mostrarModal(){
			if (div.visibility == "hidden") {
				div.visibility = "visible";
			} /* else{
				input.type = "password";
				boton.src = "image/mostrar.png";
			} */
		}