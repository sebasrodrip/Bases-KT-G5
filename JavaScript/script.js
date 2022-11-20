
ajaxTaller();

function ajaxTaller() {
    let http = new XMLHttpRequest();
    http.open("POST", "php/mantenimiento.php");
    http.send(null);


    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let data = JSON.parse(this.responseText);
            cargarMantenimientos(data);
        }
    }
}

function cargarMantenimientos(mantenimiento) {
    mantenimiento.forEach(mantenimiento => {
        const img = mantenimiento.foto_bici;
        const marca = mantenimiento.marca;
        const arreglos = mantenimiento.arreglos;

        const imgBici = document.createElement("img");
        imgBici.src = "img/bicicletas/" + img;
        imgBici.alt = "Bicicleta";

        const marcaBici = document.createElement("h3");
        marcaBici.textContent = marca;

        const arreglosBici = document.createElement("p");
        arreglosBici.textContent = arreglos;

        const BicicletaDiv = document.createElement("div");
        BicicletaDiv.classList.add("bicicletas");


        BicicletaDiv.appendChild(imgBici);
        BicicletaDiv.appendChild(marcaBici);
        BicicletaDiv.appendChild(arreglosBici);

        document.querySelector("#mantenimiento").appendChild(BicicletaDiv);
    });
}