// EXAMEN

export function solution(article) {
    switch (true) {
      case (article == "computadora"):
        return "Con mi computadora puedo programar usando JavaScript";
      case (article == "celular"):
        return "En mi celular puedo aprender usando la app de Platzi";
      case (article == "cable"):
        return "¡Hay un cable en mi bota!";
      default:
        return "Artículo no encontrado";
    }
  }
 
   solution('computadora')
   solution('celular')
   solution('cable')
   solution('ornitorrinco')
 

var numero =1;

switch (numero){
    case 1:
        console.log("soy uno!");
        break;
    case 10:
        console.log("soy un 10!");
        break;
    case 100:
        console.log("soy un 100!");
        break;
    default:
        console.log("no soy nada");
}


2.
¿Para qué nos sirve el operador ternario "?" ?
Para definir una condición, el resultado cuando se cumple y cuando no se cumple, en una sola línea.
REPASAR CLASE
3.
¿Qué pasa si no coloco la sentencia `break` en un `switch`?
Se validan todos los casos como verdaderos y se realizan las acciones asignadas a cada uno.