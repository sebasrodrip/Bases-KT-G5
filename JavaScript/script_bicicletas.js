ajaxBicicletas();

function ajaxBicicletas() {
    let http = new XMLHttpRequest();
    http.open("POST", "php/bicicletas.php")
    http.send(null);

    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let data = JSON.parse(this.responseText);
            cargarBicicletas(data);
        }
    }
}

function cargarBicicletas(bicicleta){
    bicicleta.forEach(bicicleta => { 
        const img = bicicleta.img;
        const nombre = bicicleta.nombre;
        const precio = bicicleta.precio;
    
        const imgBicicleta = document.createElement("img");
        imgBicicleta.src = "img/bicicletas/" + img;
        imgBicicleta.alt = "Bicicleta";
    
        const nombreBicicleta= document.createElement("h3");
        nombreBicicleta.textContent = nombre;
    
        const precioBicicleta = document.createElement("p");
        precioBicicleta.innerHTML = `${precio} ₡`;
        
    
        const BicicletaDiv = document.createElement("div");
        BicicletaDiv.classList.add("bicicletas");
        BicicletaDiv.appendChild(imgBicicleta);
        BicicletaDiv.appendChild(nombreBicicleta);
        BicicletaDiv.appendChild(precioBicicleta);
        
    
        document.querySelector("#bicicletas").appendChild(BicicletaDiv);
    });   
}