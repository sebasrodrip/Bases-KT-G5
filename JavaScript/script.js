
ajaxTaller();
ajaxBicicletas();

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

function ajaxBicicletas() {
    let http = new XMLHttpRequest();
    http.open("POST", "php/bicicletas.php");
    http.send(null);


    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let data = JSON.parse(this.responseText);
            cargarBicicletas(data);
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
    });
}

function cargarBicicletas(bicicletas) {
    bicicletas.forEach(bicicleta => {
        const img = bicicleta.img;
        const marca = bicicleta.marca;
        const descripcion = bicicleta.descripcion;

        const imgBici = document.createElement("img");
        imgBici.src = "img/bicicletas/" + img;
        imgBici.alt = "Bicicleta";

        const marcaBici = document.createElement("h3");
        marcaBici.textContent = marca;

        const descripcionBici = document.createElement("p");
        descripcionBici.textContent = descripcion;

        const biciDiv = document.createElement("div");
        biciDiv.classList.add("bicicletas");


        biciDiv.appendChild(imgBici);
        biciDiv.appendChild(marcaBici);
        biciDiv.appendChild(descripcionBici);

        document.querySelector("#bicicletas").appendChild(biciDiv);
    });
}