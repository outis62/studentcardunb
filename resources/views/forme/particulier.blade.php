@extends('template')


 @section('contenu')

 <div class="content-wrapper image-arriere">
<br>
 <h4 class="text-center text-black">ENREGISTRER </h4>

 <form class="form-horizontal "action=" {{url('ajouter-cycle')}}" method="post">

<div class="page-sectio d-flex">
@csrf
<div class="form-group" >
  <label class="col-md-4 control-label text-black"  for="">Cycle</label>  
  <div class="col-md-4">
  <input id="" name="cycle" type="text" class="form-control input-md">
    
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

<form class="form-horizontal "action=" {{url('ajouter-filiere')}}" method="post">

<div class="page-sectio d-flex">
@csrf
<div class="form-group" >
  <label class="col-md-4 control-label text-black"  >Filiere</label>  
  <div class="col-md-4">
  <input id="" name="filiere" type="text" class="form-control input-md">
    
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

<form class="form-horizontal "action=" {{url('ajouter-nationalite')}}" method="post">

<div class="page-sectio d-flex">
@csrf
<div class="form-group" >
  <label class="col-md-4 control-label text-black"  for="">Nationalite</label>  
  <div class="col-md-4">
  <input id="" name="nationalite" type="text"  class="form-control input-md">
    
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

<form class="form-horizontal "action=" {{url('ajouter-anneeUniversitaire')}}" method="post">

<div class="page-sectio d-flex">
@csrf
<div class="form-group" >
  <label class="col-md-4 control-label text-black"  for="">AnneeUniversitaire</label>  
  <div class="col-md-4">
  <input id="" name="anneeUniversitaire" type="text"  class="form-control input-md">
    
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
@endsection