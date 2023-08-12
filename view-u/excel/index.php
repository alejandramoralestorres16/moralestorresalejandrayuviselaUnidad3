<?php
//*session_start();
require_once 'cdn.html';

include 'cnn.php';


          $sql=$cnnPDO->prepare('SELECT * FROM administradores WHERE usuario = :usuario');

            $sql->bindParam(':usuario', $_SESSION['usuario']);
            $sql->execute();
            
              $results = $sql -> fetchAll(PDO::FETCH_OBJ);

              foreach ($results as $dato) {
                
                $nombre2 = $dato -> nombre;
           
              }
?>
<!doctype html>
<html lang="en">
<head>
      <title> Subir </title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<header>
   <!-- Navbar -->
 <nav style="background: #b3ae11" class="navbar navbar-expand-lg  text-uppercase fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold  text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>

     <div class="collapse navbar-collapse" id="navbarResponsive">
        <a class="nav-item">
            <img src="img/logo.PNG"height="40"alt=""loading="lazy"/>
          </a>
              <ul class="navbar-nav ml-auto">
              

          
  <li class="nav-item">   <a class="nav-link" style="color: white;"><i class="fas fa-user"></i>  <strong>
<?php echo $nombre2; ?></a>  </strong>
  </li>  
          
    <li class="nav-item">   
 <a class="nav-link" href="index2.php"  style="color: white"> <i class="fas fa-home"></i> . </a> </strong>
  </li> 
   <li class="nav-item">   
 <a class="nav-link" href="#" onclick="cerrarSesion()" style="color: white"><i class="fas fa-sign-out-alt"></i> . </a> </strong>
  </li>
                </ul>
               
            </div>
        </div>
    </nav>
     
  </header>
    <body style="background: #eceff1;" >

<script src="xlsx.js"></script>
<script src="jquery-1.9.1.js"></script>
<script language="JavaScript">
    var oFileIn;
    //Código JQuery
    $(function() {
        oFileIn = document.getElementById('my_file_input');
        if (oFileIn.addEventListener) {
            oFileIn.addEventListener('change', filePicked, false);
        }
    });

    //Método que hace el proceso de importar excel a html
    function filePicked(oEvent) {
        // Obtener el archivo del input
        var oFile = oEvent.target.files[0];
        var sFilename = oFile.name;
        // Crear un Archivo de Lectura HTML5
        var reader = new FileReader();

        // Leyendo los eventos cuando el archivo ha sido seleccionado
        reader.onload = function(e) {
            var data = e.target.result;
            var cfb = XLS.CFB.read(data, {
                type: 'binary'
            });
            var wb = XLS.parse_xlscfb(cfb);
            // Iterando sobre cada sheet
            wb.SheetNames.forEach(function(sheetName) {
                // Obtener la fila actual como CSV
                var sCSV = XLS.utils.make_csv(wb.Sheets[sheetName]);
                var data = XLS.utils.sheet_to_json(wb.Sheets[sheetName], {
                    header: 1
                });
                $.each(data, function(indexR, valueR) {
                    var sRow = "<tr>";
                    $.each(data[indexR], function(indexC, valueC) {
                        sRow = sRow + "<td>" + valueC + "</td>";
                    });
                    sRow = sRow + "</tr>";
                    $("#my_file_output").append(sRow);
                });
            });
            $("#imgImport"). css("display", "none");
        };


// Llamar al JS Para empezar a leer el archivo .. Se podría retrasar esto si se desea
        reader.readAsBinaryString(oFile);
    }
</script>

<body style="background-color: #c0c0c0">
<div class="container-fluid">
    <br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="panel bg-lime">
                <div class="panel-heading">Impor de datos a la BD</div>
                <div class="panel-body">
                    <div class="form-group">
                        <input type="file" id="my_file_input" class="form-control" />
                        <div id="imgImport">
                            <br>
                            <center>
                                <img src="datos.jpg" alt="" width="70%" >
                            </center>
                        </div>
                        <br>
                        <div class="table table-responsive">
                            <table id='my_file_output' border=""
                                   class="table table-bordered table-condensed table-striped"></table>
                        </div>
                        <button id="btn_lectura" class="btn btn-info">Registrar Datos</button>
                        <a href="../subir.php" class="btn btn-default ">Cancelar</a>
                        <p id="respuesta">

                        </p>
                        <p id="contador">

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>


<script>
    $('#btn_lectura').click(function () {
        valores=new Array();
        var contador = 0;
        $('#my_file_output tr').each(function () {

            var d1= $(this).find('td').eq(0).html();
            var d2 = $(this).find('td').eq(1).html();
            var d3 = $(this).find('td').eq(2).html();
            var d4 = $(this).find('td').eq(3).html();
            var d5 = $(this).find('td').eq(4).html();
            var d6 = $(this).find('td').eq(5).html();
            var d7 = $(this).find('td').eq(6).html();
            var d8 = $(this).find('td').eq(7).html();
            var d9 = $(this).find('td').eq(8).html();
            var d10 = $(this).find('td').eq(9).html();
            var d11 = $(this).find('td').eq(10).html();
            var d12 = $(this).find('td').eq(11).html();
            var d13 = $(this).find('td').eq(12).html();

            valor=new Array(d1, d2, d3, d4,d5, d6, d7, d8,d9, d10, d11, d12, d13);
            valores.push(valor);
            console.log (valor);
           // alert(valor);
            $.post('../insertar.php', {d1:d1, d2:d2, d3:d3, d4:d4, d5:d5, d6:d6, d7:d7, d8:d8, d9:d9, d10:d10, d11:d11, d12:d12, d13:d13}, function (datos) {
                $('#respuesta').html(datos);
            });

            contador = contador + 1;
            $('#contador').html("Se registro "+contador+" registros correctamente.");

        });



    });
</script>
</body>
</html>

