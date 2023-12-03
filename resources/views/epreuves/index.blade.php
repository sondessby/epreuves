@extends('layouts.dashboard')
@section('content')

    <h3 style="text-align: center;">EPREUVES</h3>
    <a class="btn btn-primary" href="{{ route('epreuves.create') }}">Ajouter epreuve</a>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NUMERO EPREUVE </th>
                <th>DATE EPREUVE </th>
                <th>LIEU</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($epreuves as $m)
                <tr>
                    <td>{{ $m->id }}</td>
                    <td>{{ $m->numepreuve }}</td>
                    <td>{{ $m->datepreuve }}</td>
                    <td>{{ $m->lieu }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection