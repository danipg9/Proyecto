window.addEventListener("load", function () {
    document.getElementById("bt_html_eje_1").addEventListener("click", mostrarEjercicio);
    document.getElementById("comprobar_html_1").addEventListener("click", comprobar1);
});

function mostrarEjercicio() {
    var contenedor = document.getElementById("container_html_eje_" + 1);
    contenedor.style.visibility = "visible";

}

function comprobar1(){
    var texto1  = document.getElementById("texto_eje1_1").value;
    var texto2  = document.getElementById("texto_eje1_2").value;
    
    if(texto1.toLowerCase() && texto2.toLowerCase() == "h1"){
        document.getElementById("container_html_eje_1").style.backgroundColor="green";
    }else{
         document.getElementById("container_html_eje_1").style.backgroundColor="red";
    }
}