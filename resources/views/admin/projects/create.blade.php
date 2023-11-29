@extends('layouts.admin')

@section('content')
    <h1 class="mb-5">Crea Nuovo Progetto</h1>

    <form action="{{ route("admin.projects.store") }}" method="POST">
        @csrf

        <div class="row d-flex">
            <div class="col-4 mb-3">
                <label class="form-label" for="name">Nome Progetto</label>
                <input class="form-control" type="text" id="name" name="name">
            </div>

            <div class="col-4 mb-3">
                <label class="form-label" for="name">Descrizione Progetto</label>
                <input class="form-control" type="text" id="description" name="description">
            </div>

            <div class="col-4 mb-3">
                <label class="form-label" for="name">Data Progetto</label>
                <input class="form-control" type="text" id="date" name="date">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-auto">
                <button class="btn btn-primary" type="submit">Invia</button>
            </div>

            <div class="col-auto">
                <button class="btn btn-danger" type="reset">Reset</button>
            </div>
        </div>
    </form>
@endsection
