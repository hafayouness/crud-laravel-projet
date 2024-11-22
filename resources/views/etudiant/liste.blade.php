<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Projet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class=" mt-5 d-flex flex-column justify-content-center border shadow-lg" style="max-width: 900px; margin: 0 auto; border-radius: 0 15px 0 15px;">
      <h1 class="text-center mt-5 ">Crud Projet</h1>
    
      <div class="d-flex justify-content-center mt-3">
          <a href="/ajouter" class="btn btn-outline-primary ">Ajouter un étudiant</a>
      </div>
      <div class=" d-flex flex-column justify-content-center align-items-center">
        <table class="table mt-5 text-center" >
          <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nom</th>
                  <th scope="col">prenom</th>
                  <th scope="col">Classe</th>
                  <th scope="col">Actions</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($etudiants as $etudiant )
            <tr>
              <th scope="row">{{$etudiant->id}}</th>
              <td>{{$etudiant->nom}}</td>
              <td>{{$etudiant->prenom}}</td>
              <td>{{$etudiant->classe}}</td>
              <td>
                <a href="/update/etudiant/{{$etudiant->id}}" class="btn btn-info">Update</a>
                <a href="#" class="btn btn-danger">Delete</a>
              </td>
          </tr>
              
            @endforeach
             
              
          </tbody>
      </table>

      </div>
      
  </div>
  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>