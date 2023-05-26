// forma for

var estudiantes =  ["Maria", "Sergio","Rosa","Daniel"];
function saludarestudiante(estudiantes){
    console.log(`Hola, ${estudiantes}`);
}
for(var i= 0; i < estudiantes.length; i++){
    saludarestudiante(estudiantes[i]);
}

// otra forma 

var estudiantes =  ["Maria", "Sergio","Rosa","Daniel"];
function saludarestudiante(estudiantes){
    console.log(`Hola, ${estudiantes}`);
}
for(var estudiante of estudiantes){
     saludarestudiante(estudiante);
}

// la forma while

var estudiantes =  ["Maria", "Sergio","Rosa","Daniel"];
function saludarestudiantes(estudiantes){
    console.log(`Hola, ${estudiantes}`);
}
while(estudiantes.length > 0){
    console.log(estudiantes);
     var estudiante = estudiantes.shift();
     saludarestudiante(estudiante);
}