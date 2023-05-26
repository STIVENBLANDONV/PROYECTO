var miAuto = {
    marca: "Toyota",
    modelo: "Corolla",
    año: 2020
    }

    // si queremos traer el objeto lo sacariamos con un punto 
    // ejemplo

miAuto.

// una de las propiedades sean unas funcion
// ejemplo

var MiAuto = {
    marca: "Toyota",
    modelo: "corolla",
    annio: 2020, 
    detalledelauto: function () {
        console.log(`auto ${this.modelo} ${this.annio}`)
    }
};

// objetos constructores


function auto(marca,modelo,annio){
    this.marca= marca;
    this.modelo= modelo;
    this.annio= annio;
}

// operador nuevo 


var autonuevo = new auto("tesla", "modelo 3","2023");


