
function confirmacion(e){
    if (confirm("Estas seguro de eliminar al empleado?")) {
        return true;
    } else {
        e.preventDefault();
    }
}

let linkDelete = document.querySelectorAll(".delete_link");

for (let i = 0; i < linkDelete.length; i++) {
    linkDelete[i].addEventListener('click',confirmacion);
}