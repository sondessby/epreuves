@extends('layouts.dashboard')
@section('content')
    <h2 style="text-align: center;">Create EPREUVE</h2>
    <form class="form-group" action="{{ route('epreuves.store') }}" method="POST">
        @csrf
        <label for="numepreuve">Numero Epreuve:</label>
        <input class="form-control" type="text" name="numepreuve" required><br>
        <label for="datepreuve">Date Epreuve:</label>
        <input class="form-control" type="text" name="datepreuve" required><br>
        <label for="lieu">Lieu:</label>
        <input class="form-control" type="text" name="lieu" required><br>
        <button  type="submit" class="btn btn-success">Create Epreuve</button>
    </form>
@endsection
