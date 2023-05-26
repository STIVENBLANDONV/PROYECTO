var articulos = [
    {nombre: "bici", costo: 300},
    {nombre: "tv", costo:32870},
    {nombre : "libro", costo:2136},
    {nombre : "celular", costo:132},
    {nombre : "lapto", costo : 12376},
    {nombre : "teclado", costo :2137},
    {nombre : "audifonos", costo :89612},
]

// el filtre }

var articulosfiltrados = articulos.filter(function(articulos){
    return articulos.costo <= 300
});

// metodo de map

var nombrearticulos = articulos.map(function(articulo){
    return articulo.nombre
});

// nombre de otro map find (buscar algo en especial)

var encuentraarticulo = articulos.find(function(articulo){
    return articulos.nombre ==="laptop"
});

// regresa ek articulo

articulos.forEach(function(articulo){
    console.log(articulo.nombre);
});

// para ver si hay articulos caratos (varatos fechas)
var articulosbaratos = articulos.some(function(articulo){
    return articulo.costo <= 700;
});