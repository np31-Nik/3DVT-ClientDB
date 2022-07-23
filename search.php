<?php 
$message = "";
if(isset($_POST['SubmitButton'])){ //check if form was submitted
  $name = $_POST['name']; //get input text
  $tipo = $_POST['operationType'];
  $captado =$_POST['captado'];
  $message = "...Searching for: | Nombre: ".$name." | Tipo: ".$tipo." | Captado: ".$captado." |";
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

    <input type="submit" name="SubmitButton" />

    <br>
    <?php echo $message; ?>
    </form>


</div>
</header>
