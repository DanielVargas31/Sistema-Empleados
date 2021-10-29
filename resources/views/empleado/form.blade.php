<style> th,td { text-align: center; } .input{ display: block; width: 100%; margin: 0.5rem 0 0.8rem 0; padding: 0.5rem; font-size: 0.8rem; border: 1px solid #fff; border-radius:20px; color: #068ebb;} .table { padding: 0rem 5rem; min-width: 1200px; padding: 1rem; border: none; border-radius:1rem; background: var(--backgroundglass); } .editar{ padding: 1rem; background-color: #f76daa; text-decoration: none; border-radius: 1rem; color: white; font-size: 1.3rem; right: 0vh; font-weight: bold; } #editar{ padding: 1rem; background-color: #98e4df; text-decoration: none; border-radius: 1rem; color: white; font-size: 1.3rem; border: none; font-weight: bold; } h1{ margin-bottom: 2rem; } </style>

<h1 class="text-center">{{ $modo }} Empleado</h1>
<h3>Asegurate de llenar correctamente los campos para poder {{ $modo }} correctamente el Empleado</h3><br><br>


<table class="table">
    <thead class="thead">

        <tr>

            <th class="th">Tipo Identificacion</th>
            <th class="th">Nro de Identificacion</th>
            <th class="th">Nombres</th>
            <th class="th">Apellidos</th>
            <th class="th">Area</th>
            <th class="th">SubArea</th>
        </tr>
    </thead>

    <tbody>



        <td>
            <input class="input" list="tipoid" type="text" name="TipoId" value="{{ isset($empleado->TipoId)?$empleado->TipoId:'' }}" id="TipoId">
            <datalist id="tipoid">
                <option value="C.C">Cedula de Ciudadania</option>
                <option value="T.I" selected>Tarjeta de identidad</option>
                <option value="C.E">Cedula de extranjeria</option>
            </datalist>
        </td>
        <td><input class="input" type="text" name="NumeroId" value="{{ isset($empleado->NumeroId)?$empleado->NumeroId:''  }}" id="NumeroId"></td>
        <td><input class="input" type="text" name="Nombres" value="{{ isset($empleado->Nombres)?$empleado->Nombres:''  }}" id="Nombres"></td>
        <td><input class="input" type="text" name="Apellidos" value="{{ isset($empleado->Apellidos)?$empleado->Apellidos:''  }}" id="Apellidos"></td>

        <td>
            <input class="input" list="area" type="text" name="Area" value="{{ isset($empleado->Area)?$empleado->Area:''  }}" id="Area">
            <datalist id="area">
                <option value="Administracion">Administracion</option>
                <option value="Gestion Humana" selected>Gestion Humana</option>
                <option value="Finanzas">Finanzas</option>
            </datalist>
        </td>

        <td>
            <input class="input" list="subarea" type="text" name="SubArea" value="{{ isset($empleado->SubArea)?$empleado->SubArea:''  }}" id="SubArea">
            <datalist id="subarea">
                <option value="Admin. Publica">Administracion</option>
                <option value="Admin. Privada">Administracion</option>
                <option value="Talento Humano" selected>Gestion Humana</option>
                <option value="Recusos Humanos" selected>Gestion Humana</option>
                <option value="Contabilidad">Finanzas</option>
                <option value="Analisis">Finanzas</option>
            </datalist>

        </td>

        </tr>

    </tbody>


</table><br><br>

<div class="botones">
    <input id="editar" type="submit" value="{{ $modo }}">
    <a class="editar" href="{{ url('home') }}">Regresar</a>
</div>
