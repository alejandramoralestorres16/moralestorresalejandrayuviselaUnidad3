

<?php
session_start();
require("connect_db.php"); // Asegúrate de que este archivo contenga la conexión a la base de datos

//if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verificar si se enviaron los datos mediante POST
    $username = $_POST['mail'];
    $pass = $_POST['pass'];
    //$username = "admin@gmail.com";
    //$pass = "1";

    // Escapar los datos ingresados por el usuario para prevenir inyección de SQL
    $username = mysqli_real_escape_string($mysqli, $username);
    $pass = mysqli_real_escape_string($mysqli, $pass);

    $sql = "SELECT * FROM login WHERE email='$username'";
    $result = mysqli_query($mysqli, $sql);
    $cuenta = mysqli_num_rows($result);

    if ($cuenta > 0) {
        $row = mysqli_fetch_assoc($result);
        
        if ($pass == $row['password'] || $pass == $row['pasadmin']) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['user'] = $row['user'];
            $_SESSION['rol'] = $row['rol'];
           // $response=1;



            switch ($_SESSION['rol']) {
                case 1:
                //En caso de que sea administrador osea rol 1
                    $response=4;
                   // $mensaje=1;
                    $_SESSION['user'] = $row['user'];
                   // header("Location:admin.php");
                    break;
                case 2:
                //En caso de que sea usuario osea rol 2
                    $response=3;
                   // $mensaje=1;
                    $_SESSION['user'] = $row['user'];
                    //header("Location:index2.php");
                    break;
            }

        
        } else {
            // Mostrar SweetAlert para contraseña incorrecta
            $response=2;
          
        }
    } else {
        // Mostrar SweetAlert para usuario no encontrado
        $response=0;
        
    }
   // echo $cuenta;
    echo $response;

//}
?>
