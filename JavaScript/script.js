
ajax();

function ajax() {
    let http = new XMLHttpRequest();
    http.open("POST", "php/mantenimiento.php");
    http.send(null);


    http.onreadystatechange = function () {
        console.log("Funciona creo");
        if (this.readyState == 4 && this.status == 200) {
            let data = JSON.parse(this.responseText);
            cargarProductos(data);
        }
    }
}

function cargarMantenimientos(mantenimientos) {
    mantenimientos.forEach(mantenimiento => {
        const img = mantenimiento.img;
        const marca = mantenimiento.marca;
        const arreglos = mantenimiento.arreglos;

        const imgBici = document.createElement("img");
        imgBici.src = "img/bicicletas/" + img;
        imgBici.alt = "Bicicleta";

        const marcaBici = document.createElement("h3");
        marcaBici.textContent = marca;

        const arreglosBici = document.createElement("p");
        arreglosBici.textContent = arreglos;

        const biciDiv = document.createElement("div");
        biciDiv.classList.add("mantenimiento");


        biciDiv.appendChild(imgBici);
        biciDiv.appendChild(marcaBici);
        biciDiv.appendChild(arreglosBici);

        document.querySelector("#mantenimiento").appendChild(biciDiv);
        // Si es id #, si es clase .
    });
}