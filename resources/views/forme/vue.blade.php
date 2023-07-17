@extends('template')


 @section('contenu')
 <div class="  generale">
               <div class="  row ">
                        <div class="col-md-12">
                            <h4 class="pays">BURKINA FASO            <span class="titre-universite">Universite Nazi Boni</span></h4> 
                              <div class="row">
                                         <div class="col-md-4">
                                         <img src="{{asset('$etudiant->photo')}}" class="img-rounded" width="130px" height="150px" />
                                         Matricule:  <span class="mise-en-forme">{{$etudiant->matricule}}</span>
                                         </div>
                                         <div class="col-md-8 traitement-reference">
                                             <ul>
                        
                                                 <li class=" reference">Nom: <span class="mise-en-forme">{{$etudiant->nom}}</span></li>
                                                 <li  class=" reference">Prenom: <span class="mise-en-forme"> {{$etudiant->prenom}}</span></li>
                                                 <li  class=" reference">Date de naissance:<span class="mise-en-forme"> {{$etudiant->dateNaissance}}</span></li>
                                                 <li  class=" reference">Filiere: <span class="mise-en-forme">{{$etudiant->filiere->filiere}}</span></li>
                                                 <li  class=" reference">Cyle de: <span class="mise-en-forme">{{$etudiant->cycle->cycle}}</span></li>
                                                 <li  class=" reference">Annee universitaire:<span class="mise-en-forme">{{$etudiant->anneeUniversitaire_id}}</span></li>
                                             </ul>
                                                          
                                        </div>    
                                </div>
                        </div>     

                </div> 
                <a href="">IMPRIMER</a>   
</div>
@endsection