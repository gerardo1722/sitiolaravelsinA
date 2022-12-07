@extends('pagPlantilla') 

@section('titulo')
    <h1 class="display-4">Página de lista </h1>
@endsection

@section('Cuerpo')
    @if(session('msj'))
        <div class="alert alert-success">
            {{ session('msj') }}
        </div>
    @endif

    <div class="btn btn-success d-grid fs-5 mb-2">Registrar nuevo seguimiento...</div>

    <form action=" {{ route ('Estudiante.xRegistrar') }}" method="post" class="d-grid gap-2">
        @csrf

        @error('codEst')
            <div class="alert alert-danger">
                El código es requerido
            </div>
        @enderror

        @error('nomEst')
            <div class="alert alert-danger">
                El nombre es requerido 
            </div>
        @enderror

        @if(true)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                El <strong>apellido</strong> es requerido 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(true)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                El <strong>apellido</strong> es requerido 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(true)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                El <strong>Fecha de nacimiento</strong> es requerido 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(true)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                El <strong>Turno</strong> es requerido 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(true)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                El <strong>Turno</strong> es requerido 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(true)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                El <strong>Semestre</strong> es requerido 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(true)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                El <strong>Estado</strong> es requerido 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <input type="text" name="codEst" placeholder="Código" value="{{ old('codEst')}}" class="form-control mb-1">
        <input type="text" name="nomEst" placeholder="Nombres" value="{{ old('nomEst')}}" class="form-control mb-1">
        <input type="text" name="apeEst" placeholder="Apellidos" value="{{ old('apeEst')}}" class="form-control mb-1">
        <input type="text" name="fnaEst" placeholder="Fecha de nacimiento" value="{{ old('fnaEst')}}" class="form-control mb-1">
        <select name="turMat" class="form-control mb-1">
            <option value="">Seleccione...</option>
            <option value="1">Turno Día</option>
            <option value="2">Turno Noche</option>
            <option value="3">Turno Tarde</option>
        </select>
        <select name="semMat" class="form-control mb-1">
            <option value="">Seleccione...</option>
            @for($i=1; $i < 7; $i++)
                <option value="{{$i}}">Semestre {{$i}}</option>
            @endfor
        </select>
        <select name="estMat" class="form-control mb-1">
            <option value="">Seleccione...</option>
            <option value="0">Inactivo</option>
            <option value="1">Activo</option>
        </select>
        <button class="btn btn-success" type="submit">Agregar</button>
    </form>


   
    <div class="btn btn-dark d-grid fs-5 mb-2 bt-2">Lista de seguimiento...</div>
    
    <table class="table">
        <thead class="table-secondary">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Código</th>
                <th scope="col">Apellidos, Nombres</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>

        <tbody>
            @foreach($xAlumnos as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->codEst }}</td>
                <td>
                    <a href="{{ route('Estudiante.xDetalle', $item->id) }}">
                        {{ $item->apeEst }}, {{ $item->nomEst }}
                    </a>
                </td>
                <td>
                    <form action="" method="post" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">
                            x
                        </button>
                    </form>
                    ...
                    <a class="btn btn-warning btn-sm" href="">
                    A
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>

        <thead class="table-secondary">
            <tr>
                <th colspan="4">.</th>
            </tr>
        </thead>

    </table>


   
@endsection