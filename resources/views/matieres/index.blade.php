@extends('layouts.dashboard')
@section('content')
    <h3 style="text-align: center;">Matiere</h3>
    <a class="btn btn-primary" href="{{ route('matieres.create') }}">creer matiere</a>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>ID</th>
                <th>CODE MATIERE </th>
                <th>LIBELLE </th>
                <th>COEF</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($matieres as $m)
                <tr>
                    <td>{{ $m->id }}</td>
                    <td>{{ $m->codemat }}</td>
                    <td>{{ $m->libelle }}</td>
                    <td>{{ $m->coef }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

