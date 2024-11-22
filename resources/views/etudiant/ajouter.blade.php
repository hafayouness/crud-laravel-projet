<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Projet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="vh-100 d-flex flex-column justify-content-center" style="max-width: 500px; margin: 0 auto;">
      <h1 class="text-center mb-3">Ajouter un Etudiant </h1>

      {{-- @if(session("status"))
      <div class="alert alert-success">
       {{ session("status") }}
      </div>
      @endif

      <ul class="list-unstyled">
        @foreach ($errors->all() as $error)
         <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
      </ul> --}}

      <form action="/ajouter/traitement" method="POST" class="mb-3">
        @csrf
        <div class="form-group">
          <label for="Nom" class="form-label">Nom :</label>
          <input type="text" class="form-control" id="Nom" name="nom">
        </div>
        <div class="form-group mt-4">
          <label for="Prenom" class="form-label">Prénom :</label>
          <input type="text" class="form-control" id="Prenom" name="prenom">
        </div>
        <div class="form-group mt-4">
          <label for="classe" class="form-label">Classe :</label>
          <input type="text" class="form-control" id="classe" name="classe">
        </div>
        <div class="d-flex align-items-center justify-content-center py-4 gap-3">
          <a href="/etudiant" class="btn btn-outline-primary">Revenir à la liste des étudiants</a>
          <button type="submit" class="btn btn-primary px-5">Ajouter un Etudiant</button>
        </div>
      </form>
      <div class="alert-container">
       {{-- --error-- --}}
        @if ($errors->any())
        <div class="alert alert-danger">
          <strong>Erreur :</strong>
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
  
       {{-- --succes-- --}}
        @if(session("status"))
        <div class="alert alert-success">
          {{ session("status") }}
        </div>
        @endif
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1
