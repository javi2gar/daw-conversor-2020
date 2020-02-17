<?php


namespace Src ;

require('../vendor/autoload.php');

include_once 'Conversor.php';


$conversor = new Conversor();
$euro = 0;

try {
    if (isset($_POST['btnCalcular']) || !empty($_POST['btnCalcular'])) {
        $num1 = $_POST["euros"];
        $operacion = $_POST["opcion"];

        switch ($operacion) {
            case "dolar":
                $resultado = $conversor->eurosADolares($euro);
                break;
            case "yen":
                $resultado = $conversor->eurosAYenes($euro);
                break;           
            default:
                $resultado = "ERR";
        }
    }
} catch (Exception $e) {
    $resultado = $e->getMessage();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>daw-conversor-2020</title>
  </head>
  <body>
    <h1 class="text-center">daw-conversor-2020</h1>    
    <p class="text-center">Versión 1.0.0</p>   
    - 
    <div class="container-sm d-flex justify-content-center">
        <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
            <div class="form-row">
                <div class="form-group">
                    <div class="col px-md-6">
                        <label class="text-center"for="euros">Cantidad: &nbsp</label>
                        <input class="input-text" type="text" id="euros" name ="euros" aria-describedby="euros" required>
                        <label id="eurosHelp" class="form-text text-muted text-center">(EUROS)</label>
                    </div>
                </div>                
            </div>
            <div class="container-sm d-flex justify-content-center">
                <fieldset class="form-group">               
                    <legend class="raw-form-label col-sm-2 pt-0">Moneda:</legend>
                    <div class="raw-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="opcion" id="dolar" value="dolar" checked>
                            <label class="form-check-label" for="dolar">
                            Dólares Americanos
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="opcion" id="yen" value="yen">
                            <label class="form-check-label" for="yen">
                            Yenes
                        </label>                        
                        </div>
                    </div>             
                </fieldset> 
            </div>         
            <br>
            <div class="container-sm d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" name="btnCalcular">Calcular</button>
            </div>           
            <br>
            <div class="container-sm d-flex justify-content-center">
                <label class="text-center"for="resultado">Resultado &nbsp&nbsp</label>
                <input class="input-text" type="text" id="resultado" aria-describedby="resultado" value="<?php echo $resultado ?>" >
            </div>                      
        </form>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  <footer> 
    <hr>
        <div class="container"> 
            <div class="row justify-content-around">
                <div class="font-italic row justify-content-md-center">
                    by javi2gar - DAW 2019-2020 CIP
                </div>            
            </div>
        </div>
</footer>
</html>