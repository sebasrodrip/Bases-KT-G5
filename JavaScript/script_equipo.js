ajaxCascos();
ajaxZapatillas();
ajaxGafas();

function ajaxCascos() {
    let http = new XMLHttpRequest();
    http.open("POST", "php/cascos.php")
    http.send(null);

    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let data = JSON.parse(this.responseText);
            cargarCascos(data);
        }
    }
}

function ajaxZapatillas() {
    let http = new XMLHttpRequest();
    http.open("POST", "php/zapatillas.php")
    http.send(null);

    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let data = JSON.parse(this.responseText);
            cargarZapatillas(data);
        }
    }
}

function ajaxGafas() {
    let http = new XMLHttpRequest();
    http.open("POST", "php/gafas.php")
    http.send(null);

    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let data = JSON.parse(this.responseText);
            cargarGafas(data);
        }
    }
}

function cargarCascos(cascos){
    cascos.forEach(casco => {
        const img = casco.img;
        const nombre = casco.nombre;
        const precio = casco.precio;
    
        const imgCasco = document.createElement("img");
        imgCasco.src = "img/cascos/" + img;
        imgCasco.alt = "Casco";
    
        const nombreCasco = document.createElement("h3");
        nombreCasco.textContent = nombre;
    
        const precioCasco = document.createElement("p");
        precioCasco.innerHTML = `${precio} ₡`;
    
        const CascoDiv = document.createElement("div");
        CascoDiv.classList.add("equipo");
        CascoDiv.appendChild(imgCasco);
        CascoDiv.appendChild(nombreCasco);
        CascoDiv.appendChild(precioCasco);
    
        document.querySelector("#cascos").appendChild(CascoDiv);
    });
    
}

function cargarZapatillas(zapatillas){
    zapatillas.forEach(zapatilla => {
        const img = zapatilla.img;
        const nombre = zapatilla.nombre;
        const precio = zapatilla.precio;
    
        const imgZapatilla = document.createElement("img");
        imgZapatilla.src = "img/zapatillas/" + img;
        imgZapatilla.alt = "Zapatilla";
    
        const nombreZapatilla = document.createElement("h3");
        nombreZapatilla.textContent = nombre;
    
        const precioZapatilla = document.createElement("p");
        precioZapatilla.innerHTML = `${precio} ₡`;
    
        const ZapatillaDiv = document.createElement("div");
        ZapatillaDiv.classList.add("equipo");
        ZapatillaDiv.appendChild(imgZapatilla);
        ZapatillaDiv.appendChild(nombreZapatilla);
        ZapatillaDiv.appendChild(precioZapatilla);
    
        document.querySelector("#zapatillas").appendChild(ZapatillaDiv);
    });
    
}

function cargarGafas(gafas){
    gafas.forEach(gafa => {
        const img = gafa.img;
        const nombre = gafa.nombre;
        const precio = gafa.precio;
    
        const imggafa = document.createElement("img");
        imggafa.src = "img/gafas/" + img;
        imggafa.alt = "gafa";
    
        const nombregafa = document.createElement("h3");
        nombregafa.textContent = nombre;
    
        const preciogafa = document.createElement("p");
        preciogafa.innerHTML = `${precio} ₡`;
    
        const gafaDiv = document.createElement("div");
        gafaDiv.classList.add("equipo");
        gafaDiv.appendChild(imggafa);
        gafaDiv.appendChild(nombregafa);
        gafaDiv.appendChild(preciogafa);
    
        document.querySelector("#gafas").appendChild(gafaDiv);
    });
    
}