document.getElementById("bEnviar").addEventListener("click", function () {
//console.log("click");    

nuevoTodo();
});


function nuevoTodo() {
    var todo = document.getElementById("todo");
    var header = "todo=" + todo.value; 
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 &&  this.status == 200) {
            //la solucitud se completo
            cargarTodos();
        }
    };


    xmlhttp.open("POST", "nuevo-todo.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(header);

}

function cargarTodos() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 &&  this.status == 200) {
            //la solucitud se completo
            document.getElementById("mostrar-todo-container").innerHTML= this.responseText;
        
        }
    };
    
    xmlhttp.open("GET", "mostrar-todos.php", true);
    //xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();

}