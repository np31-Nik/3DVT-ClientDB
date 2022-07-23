<?php 

?>

<header>
<div id="searchBar">
    <h1>Search:</h1>
    <form role="search" method="get" class="search-form" action="">

    <label>Nombre de cliente:</label>
    <input type="text" name="name" value=""/>

    <select name="operationType" id="opType">
        <option value="">--- Tipo de operacion ---</option>
        <option value="venta">Venta</option>
        <option value="alquiler">Alquiler</option>
        <option value="vacacional">Vacacional</option>
        <option value="otros">Otros</option>
    </select>

    <label>Captado por:</label>
    <input type="tex" name="captado" value="">

        <input type="submit" class="searchsubmit" value="Search" />
    </form>


</div>
</header>
