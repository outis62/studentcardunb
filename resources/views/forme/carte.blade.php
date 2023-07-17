@extends('template')
@section('contenu')
  
  <section class="page-section about-heading">

    <div class="container content-wrapper image-arriere">
        <a href="{{ URL('carte') }}" type="button" class="btn btn-primary ajoutproduit">Ajouter un etudiant</a>
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
                        <th>Numero</th>
                        <th></th>
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
                          
                            <td>{{ $etudiant->numero}}</td>
                            <td>
                            <a href="{{url('vue',$etudiant->id)}}" class="btn btn-am btn-primary">voir</a>
                            
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </section>
@endsection
