@extends('empleado.index')

@section('content')
<style> th,td { text-align: center; } .table { padding: 0rem 5rem; min-width: 1200px; padding: 1rem; border: none; border-radius:1rem; background: var(--backgroundglass); } #editar{ padding: .5rem; background-color: #f76daa; text-decoration: none; border-radius: 1rem; color: white; font-size: 1.2rem; }</style>

<div class="container">


    <h1 class="text-center">Tus Empleados</h1>
    <h3>Aqui se reflejaran los Empleados que hayas registrado anteriormente</h3><br><br>
    <table class="table">
        <thead class="thead">

            <tr>
                <th class="th">#</th>
                <th class="th">Tipo Identificacion</th>
                <th class="th">Nro de Identificacion</th>
                <th class="th">Nombres</th>
                <th class="th">Apellidos</th>
                <th class="th">Area</th>
                <th class="th">SubArea</th>
                <th class="th">Accion</th>
            </tr>
        </thead>

        <tbody>

            @foreach($empleados as $empleado)
            <tr>
                <td>{{$empleado->id}}</td>
                <td>{{$empleado->TipoId}}</td>
                <td>{{$empleado->NumeroId}}</td>
                <td>{{$empleado->Nombres}}</td>
                <td>{{$empleado->Apellidos}}</td>
                <td>{{$empleado->Area}}</td>
                <td>{{$empleado->SubArea}}</td>
                <td>
                    <div class="nav-button">
                        <div id="nav-link-icon"></div><a id="editar" href="{{ url('/empleado/'.$empleado->id.'/edit')
                                 }}"><img src="https://img.icons8.com/ios-glyphs/25/ffffff/edit-user-female.png" /> Editar</a>
                    </div>
                    <!-- <a href="{{  url('/empleado/'.$empleado->id.'/edit')  }}">
                                    Editar
                                </a> -->
                </td>
            </tr>
            @endforeach

        </tbody>

    </table>

</div>
@endsection
