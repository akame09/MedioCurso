Crear Productos

Scripts
<script src="{{ asset('js/app.js') }}" defer></script>


<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<form action="{{ url("/producto") }}" method="post" center>
    @csrf
    <div class="form-group">
        <label for="Nombre" >Nombre: </label><br>
        <input type="text" name="Nombre"  id="Nombre"><br>
    </div>
    <div class="form-group">
        <label for="FechaE">Fecha de Envio: </label><br>
        <input type="date" name="FechaE" id="FechaE"><br>
    </div>
    <div class="form-group">
        <label for="FechaL">Fecha de Llegada: </label><br>
        <input type="date" name="FechaL" id="FechaL"><br>
    </div>
    <div class="form-group" >
        <input type="submit" name="Guardar"  id="Guardar" value="Guardar">
    </div>

</form>
