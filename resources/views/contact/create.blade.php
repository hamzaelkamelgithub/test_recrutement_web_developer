@extends('layout')

{{-- dialog ajouter un nouveau contact --}}
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form class="container"  action="{{route('contacts.store')}}" method="post">
       @csrf
       <div class="modal-header">
       <h5 class="modal-title" id="updateModalLabel">Ajouter un contact</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
       </button>
    </div>
      {{-- champ ajouter --}}
    <div class="modal-body">
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
           <label class="form-label"  for="prenom">Prénom</label>
           <input type="text"  id="prenom" name="prenom"  class="form-control" />                
          </div>
        </div>
        <div class="col">
          <div class="form-outline">
            <label class="form-label"  for="nom">Nom</label>
            <input type="text"  id="nom" name="nom" class="form-control" />
          </div>
        </div>
      </div>
      <div class="form-outline mb-4">
        <label class="form-label"  for="email">Email</label>
        <input type="email"  id="email"  name="email" class="form-control" />
      </div>
      <div class="form-outline mb-4">
        <label class="form-label"  for="entreprise">Entreprise</label>
        <input type="text"  id="entreprise" name="entreprise" class="form-control" />
      </div>
      <div class="form-outline mb-4">
        <label class="form-label"  for="adresse">Adresse</label>
        <input type="text"   id="adresse" name="adresse" class="form-control" />
      </div>
      <div class="row mb-4">
        <div class="col">
         <div class="form-outline">
          <label class="form-label"  for="code_postal">Code Postal</label>
          <input type="text"  id="code_postal" name="code_postal"  class="form-control" />                
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <label class="form-label"  for="ville">Ville</label>
          <input type="text" id="ville" name="ville" class="form-control" />
        </div>
     </div>
     </div>
      <div class="form-group w-75 form-outline mb-4">
          <label for="exampleSelect">Statut</label>
          <select class="form-control" id="statut" name="statut">
              <option value="lead">Lead</option>
              <option value="client">Client</option>
              <option value="prospect">Prospect</option>
          </select>
      </div>
     </div>
     <div class="modal-footer bg-light">
       <button type="button" class="btn btn-light border" data-dismiss="modal">Annuler</button>
       <button type="submit" class="border btn btn-info">Valider</button>
     </div>
    </form>
   </div>
  </div>
</div>


