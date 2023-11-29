@extends('layouts.admin')

@section('content')
    <h1 class="mb-5">{{ $project->name }}</h1>

    @php
        $date = date_create($project->date)
    @endphp

    <div class="card mb-3" style="width: 80vw;">
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <h5 class="card-title mb-3">{{ $project->name }}</h5>

                    <p class="card-text">{{ $project->description }}</p>

                    <p class="card-text">{{ date_format($date, 'd/m/Y') }}</p>
                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.btn_prev_next')
@endsection
