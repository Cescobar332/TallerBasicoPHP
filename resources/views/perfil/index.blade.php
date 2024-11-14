@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="text-center mb-4">
                <img src="{{ asset('images/profile.jpg') }}" alt="Imagen de Perfil" class="img-fluid rounded-circle" style="width: 300px; height: 200px;">
            </div>
            <h1 class="card-title fs-2">Perfil del Usuario</h1>
            <p class="card-text fs-4"><strong>Nombre:</strong> Carlos Fernando Escobar Silva</p>
            <p class="card-text fs-4"><strong>Email:</strong> cescobar332@unab.edu.co</p>
            <p class="card-text fs-4"><strong>Universidad:</strong> UNAB</p>
            <p class="card-text fs-4"><strong>Carrera:</strong> Ingeniería de Sistemas</p>
            <p class="card-text fs-4"><strong>Semestre:</strong> Séptimo</p>
            <p class="card-text fs-4"><strong>Contacto:</strong> 3166071650</p>
            <p class="card-text fs-4"><strong>Github:</strong> https://github.com/Cescobar332</p>
        </div>
    </div>
@endsection

