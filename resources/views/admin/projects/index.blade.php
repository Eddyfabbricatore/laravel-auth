@extends('layouts.admin')

@section('content')
    <h1 class="mb-5">Elenco Progetti</h1>

    <table class="table table-bordered table-striped table-hover mb-5">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Data Progetto</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($projects as $project)
                @php
                    $date = date_create($project->date)
                @endphp

                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ date_format($date, 'd/m/Y') }}</td>
                    <td class="d-flex">
                        <a class="btn btn-success me-3"
                        href="{{ route('admin.projects.show', $project) }}">
                        <i class="fa-solid fa-eye"></i></a>
                        <form
                            action="{{ route('admin.projects.destroy', $project) }}"
                            method="POST"
                            onsubmit="return confirm('Sei sicuro di voler eliminare questo progetto')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>

      {{ $projects->links() }}
@endsection
