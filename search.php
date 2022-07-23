<?php 
include_once("wp-config.php");
include_once("wp-includes/wp-db.php");

$message = "";
$sql ="";
$results="";

if(isset($_POST['SubmitButton'])){ //check if form was submitted
  $name = $_POST['name']; //get input text
  $tipo = $_POST['operationType'];
  $captado =$_POST['captado'];
  $message = "...Searching for: | Nombre: ".$name." | Tipo: ".$tipo." | Captado: ".$captado." |";

  searchClients($name,$tipo,$captado);
}

function searchClients($name,$tipo,$captado){
    $conditions="";
    $table="";

    if($name!="" or $tipo!="" or $captado!=""){
        $conditions=$conditions." WHERE ";
    }

    if ($name !=""){
        $conditions=$conditions."name='".$name."'";
    }
    if($tipo !=""){
        if($name!=""){
            $conditions=$conditions." AND";
        }
        $conditions=$conditions." tipoOperacion='".$tipo."'";
    }
    if($captado !=""){
        if($tipo!=""){
            $conditions=$conditions." AND";
        }
        $conditions=$conditions." captadoPor='".$captado."'";
    }


    $sql = "SELECT * FROM ".$table.$conditions;

    //$results = $wpdb->get_results($sql);
}
?>

<header>
<div id="searchBar">
    <h1>Búsqueda:</h1>
    <form role="search" method="post" class="search-form" action="">

    <label>Nombre de cliente:</label>
    <input type="text" name="name" value=""/>

    <select name="operationType" id="opType">
        <option value="">--- Tipo de operación ---</option>
        <option value="venta">Venta</option>
        <option value="alquiler">Alquiler</option>
        <option value="vacacional">Vacacional</option>
        <option value="otros">Otros</option>
    </select>

    <label>Captado por:</label>
    <input type="text" name="captado" value="">

    <input type="submit" name="SubmitButton" value="Buscar clientes"/>

    <br>
    <?php echo $message; ?>
    <br>
    <?php echo "SQL query: ".$sql?>
    <br>
    <?php echo "Results: ".$results?>
    </form>
</div>
</header>
