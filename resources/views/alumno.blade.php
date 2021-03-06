@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Alumnos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/proyectos">Proyectos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Menu opcion 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Menu opcion 4</a>
        </li>
      </ul>
    </nav>

    <div class="col-md-9">
      <div class="card">
        <div class="card-header">PANEL PRINCIPAL</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif

          <h1>{{ Auth::user()->name }}, Bienvenido al panel de Alumnos!</h1>
          <br></br>

          <div class="container">
            <!-- Example row of columns -->
            <div class="row">
              <div class="col-md-6">
                <h2>Servicio Social finalizado</h2>
                <p>Estadísticas de cantidad de alumnos que terminaron su servicio social
                en un ciclo </p>
                <p><a class="btn btn-secondary" href="#" role="button">Obtener &raquo;</a></p>
              </div>
              <div class="col-md-6">
                <h2>Empresas solicitantes</h2>
                <p>Empresas con las que se ha llegado a un acuerdo para mandar alumnos
                periódicamente.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Obtener &raquo;</a></p>
              </div>
              
            </div>

          </div>
        </div>
      </div>
      @endsection
