<?php 

?>

<header>
<div id="searchBar">
    <h1>Búsqueda:</h1>
    <form role="search" method="get" class="search-form" action="http://3dvirtualinmo.es/wp-admin/admin.php?page=client_menu">

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
    <input type="submit" class="searchsubmit" value="Search" />
    </form>


</div>
</header>
