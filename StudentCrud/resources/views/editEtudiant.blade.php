@extends('layouts.master')

@section('contenu')

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-18">Modifier un etudiant</h6>

        <div class="mt-5">

            @if (session()->has('success'))
                <div class="alert alert-success">
                    <p>{{ session()->get('success') }}</p>
                </div>
            @endif

            <form method="POST" action="{{ route('etudiant.update', ['etudiant' => $etudiant->id]) }}">

                @csrf

                <input type="hidden" name="_method" value="put">

                <div class="form-group">
                    <label for="exampleInputEmail1">Nom de l'etudiant</label>
                    <input type="text" class="form-control" name="nom" placeholder="{{ $etudiant->nom }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Prenom</label>
                    <input type="text" name="prenom" class="form-control" placeholder="{{ $etudiant->prenom }}">
                </div>
                <div class="form-group">
                    <label for="classe">Classe</label>
                    <select name="classe_id" class="form-control">
                        <option value=""></option>
                        @foreach ($classes as $classe)
                            <option value="{{ $classe->id }}">{{ $classe->libelle }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Enregistrer</button>
                <button type="reset" class="btn btn-secondary mt-4">Effacer</button>
                <a href="{{ route('etudiant') }}" class="btn btn-danger mt-4">Annuler</a>
            </form>

            @if ($errors->any())
                <div class="alert alert-danger  mt-2 p-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

    </div>

@endsection
