@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    ¿En qué estás pensando?
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="" class="form">
                        <div class="form-group">
                            <label for="thought">Ahora estoy pensando en:</label>
                            <input type="text" name="thought" class="form-control" id="">
                        </div>
                        <button class="btn btn-primary">
                                Enviar pensamiento <span class="badge badge-primary"></span>
                        </button>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Publicado en 12/Junio/2018
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non voluptate nemo enim numquam consequatur rerum totam illo, quasi ipsam dolores temporibus iure rem saepe cupiditate explicabo possimus repellendus tempora tenetur.
                    </p>
                </div>
                <div class="card-footer text-muted">
                    <button type="button" class="btn btn-primary">Editar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
