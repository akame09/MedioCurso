Mostrar lista de Producto

<script src="{{ asset('js/app.js') }}" defer></script>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-dark" border="1">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Fecha de Envio</th>
                        <th>Fecha de Llegada</th>
                        <th>Botones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($doc as $prod)
                        <tr>
                            <td>{{ $prod->Id }}</td>
                            <td>{{ $prod->Nombre }}</td>
                            <td>{{ $prod->Fecha_de_Entrada }}</td>
                            <td>{{ $prod->Fecha_de_Salida }}</td>
                            <td>
                                <a href="{{ url('/producto/'.$prod->Id.'/edit') }}">
                                    Editar
                                </a>
                                <form action="{{ url('/producto/'.$prod->Id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Borrar">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
