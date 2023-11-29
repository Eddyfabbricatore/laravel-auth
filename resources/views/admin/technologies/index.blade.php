@extends('layouts.admin')

@section('content')
    <h1 class="mb-5">Elenco Tecnologie</h1>

    <div class="row">
        <div class="col">
            @if(@session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            @if(@session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.technologies.store') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nuova tecnologia" name="name">
                    <button class="btn btn-outline-secondary" type="submit" id="new_technology">Crea</button>
                </div>
            </form>

            <table class="table mb-5">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($technologies as $technology)
                        <tr>
                            <td>{{ $technology->name }}</td>
                            <td>
                                <form
                                    action="{{ route('admin.technologies.destroy', $technology) }}"
                                    method="POST"
                                    onsubmit="return confirm('Sei sicuro di voler eliminare questa tecnologia')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{ $technologies->links() }}
@endsection
