@extends('layouts.dashboard')
@section('content')
    <h2 style="text-align: center;">Create Matiere</h2>
    <form class="form-group" action="{{ route('matieres.store') }}" method="POST">
        @csrf
        <label for="codemat">Code Matiere:</label>
        <input type="text" class="form-control" name="codemat" required><br>
        <label for="libelle">Libelle:</label>
        <input type="text"  class="form-control" name="libelle" required><br>
        <label for="coef">Coef:</label>
        <input type="number" class="form-control" name="coef" required><br>
        <button type="submit" class="btn btn-success">Create Matiere</button>
    </form>
@endsection