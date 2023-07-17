@extends('template')
@section('contenu')
  
  <section class="page-section about-heading">
 
    <div class="container image-arriere content-wrapper">
        <a href="{{ URL('nouveau-enregistrement') }}" type="button" class="btn btn-primary ajoutproduit">Ajouter un etudiant</a>
        <div class="table-responsive table">
            <table id="etudiant" class="table table-hover">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Matricule</th>
                        <th>Lieu de naissance</th>
                        <th>date de naissance</th>
                        <th>Filiere</th>
                        <th>Cycle</th>
                        <th>Email</th>
                        <th>Numero</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($etudiant as $etudiant)
                        <tr >
                            <td><strong>{{ $etudiant->nom }}</strong></td>
                            <td class="text-dark"><strong>{{ $etudiant->prenom}}</strong></td>
                            <td>{{ $etudiant->matricule}}</td>
                            <td>{{ $etudiant->lieuNaissance}}</td>
                            <td>{{ $etudiant->dateNaissance}}</td>
                            <td><strong>{{ $etudiant->filiere->filiere }}</strong></td>
                            <td><strong>{{ $etudiant->cycle->cycle }}</strong></td>
                            <td>{{ $etudiant->email}}</td>
                            <td>{{ $etudiant->numero}}</td>
                            <td d-flex>
                            <a type="button" href="" class="btn btn-primary">Edite</a>
                            <a type="button" href="" class="btn btn-danger">Delete</a>

                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </section>
@endsection
