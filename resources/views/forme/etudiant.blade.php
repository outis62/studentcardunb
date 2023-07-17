@extends('template')


 @section('contenu')


</head> 

<body >
<div class="content-wrapper image-arriere">
<br>
 <h4 class="text-center text-color">ENREGISTRER UN ETUDIANT</h4>

 <form class="form-horizontal  text-couleur active "action=" {{url('ajouter-etudiant')}}"enctype="multipart/form-data"  method="post">

<div class="page-sectio d-flex">
@csrf
<div class="form-group d-flex">
               <div>
                    <label  class="col-md-4 control-label text-black">Cycle</label>
                    <div class="col-md-4">
                    <select name="cycle_id" class="form-control input-md">
                    @foreach($cycles as $cycle)
                            <option value="{{$cycle->id}}">{{$cycle->cycle}}</option>
                        @endforeach
                    </select>
                    </div >
                </div>
                <br><br>
                <div>
                    <label  class="col-md-4 control-label text-black">Filiere</label>
                    <div class="col-md-4">
                    <select name="filiere_id" class="form-control input-md">
                    @foreach($filieres as $filiere)
                            <option value="{{$filiere->id}}">{{$filiere->filiere}}</option>
                        @endforeach
                    </select>
                    </div >
                </div>
                 </div>
                 <div class="form-group d-flex">
               <div>
                    <label  class="col-md-4 control-label text-black">Nationalite</label>
                    <div class="col-md-4">
                    <select name="nationalite_id" class="form-control input-md">
              
                            <option value="BURKINABE">BURKINABE</option>
                            <option value="MALIEN">MALIEN</option>
                            <option value="TCHADIEN">TCHADIEN</option>
                    </select>
                    </div >
                </div>
                <br><br>
                <div>
                    <label  class="col-md-4 control-label text-black">AnneeUni</label>
                    <div class="col-md-4">
                    <select name="anneeUniversitaire_id" class="form-control input-md">
                  
                            <option value="2019-2020">2019-2020</option>
                            <option value="2020-2021">2020-2021</option>
                            <option value="2021-2022">2021-2022</option>
                            <option value="2022-2023">2022-2023</option>
                    </select>
                    </div >
                </div>
                 </div>
<!-- Text input-->
<div class="form-group" >
  <label class="col-md-4 control-label text-success"  for="">Nom</label>  
  <div class="col-md-4">
  <input id="" name="nom" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label text-black" for="prenom">Prenom</label>  
  <div class="col-md-4">
  <input name="prenom" type="texte"  class="form-control input-md">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label text-black" >Matricule</label>  
  <div class="col-md-4">
  <input  name="matricule" type="text"  class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label text-black" for="prenom">DateNaissance</label>  
  <div class="col-md-4">
  <input name="dateNaissance" type="date"  class="form-control input-md">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label text-black" >LieuNaissance</label>  
  <div class="col-md-4">
  <input  name="lieuNaissance" type="text"  class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label text-black" for="prenom">Email</label>  
  <div class="col-md-4">
  <input name="email" type="text"  class="form-control input-md">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label text-black" >Numero</label>  
  <div class="col-md-4">
  <input  name="numero" type="text"  class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label text-black" >Photo</label>  
  <div class="col-md-4">
  <input  name="photo" type="file"  class="form-control input-md">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-4">
    <button id="button1id" name="button1id" class="btn btn-primary"  type="submit">Ajouter</button>
    <button id="button2id" name="button2id" class="btn btn-danger"  type="reset">Annuler</button>
  </div>
</div>
</div>

</form>
  </div>
</body>
              @endsection