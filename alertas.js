function Error(titulo, texto) {
  Swal.fire({
    title: titulo,
    text: texto,
    icon: 'error',
    showConfirmButton: false,
    allowOutsideClick: false,
    timer: 2000
  });
}


function campoInvalido(alerta, campo) {
  Swal.fire({
    toast: true,
//    position: 'top-end',
    title: alerta,
    text: campo,
    icon: 'error',
    showConfirmButton: true,
    allowOutsideClick: true,
    timer: 2000,
    timerProgressBar: true
  });
}

function Exito(alerta, campo) {
  Swal.fire({
    toast: true,
//    position: 'top-end',
    title: alerta,
    text: campo,
    icon: 'success',
    showConfirmButton: true,
    allowOutsideClick: true,
    timer: 2000,
    timerProgressBar: true
  });
}



function Admin() {
Swal.fire({
title: 'BIENVENIDO ADMINISTRADOR',
icon: 'success',
timer: 2000, // Mostrar la alerta durante 2 segundos
showConfirmButton: false,
}).then(function() {
window.location.href = "view-admin/admin.php"; // Redireccionar después de cerrar la alerta
});

}



function Usuario() {
Swal.fire({
title: 'BIENVENIDO USUARIO REGULAR',
icon: 'success',
timer: 2000, // Mostrar la alerta durante 2 segundos
showConfirmButton: false,
}).then(function() {
window.location.href = "index2.php"; // Redireccionar después de cerrar la alerta
});

}



