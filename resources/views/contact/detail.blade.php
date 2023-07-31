{{-- dialog detail un contact --}}
<div class="modal fade" id="detailModal{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Détail du contact</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col">
                          <div class="form-outline">
                            <label class="form-label"  for="prenom">Prénom</label>
                            <input type="text" value={{$contact->prenom}} id="prenom" name="prenom"  class="form-control" />                
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-outline">
                            <label class="form-label"  for="nom">Nom</label>
                            <input type="text"  value={{$contact->nom}} id="nom" name="nom" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label"  for="email">Email</label>
                        <input type="email" value={{$contact->email}} id="email"  name="email" class="form-control" />
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label"  for="entreprise">Entreprise</label>
                        <input type="text" value={{$contact->entreprise}} id="entreprise" name="entreprise" class="form-control" />
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label"  for="adresse">Adresse</label>
                        <input type="text" value={{$contact->adresse}}  id="adresse" name="adresse" class="form-control" />
                      </div>
                      <div class="row mb-4">
                        <div class="col">
                          <div class="form-outline">
                            <label class="form-label"  for="code_postal">Code Postal</label>
                            <input type="text" value={{$contact->code_postal}} id="code_postal" name="code_postal"  class="form-control" />                
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-outline">
                            <label class="form-label"  for="ville">Ville</label>
                            <input type="text"  value={{$contact->ville}} id="ville" name="ville" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="w-75 form-outline mb-4">
                        <label class="form-label"  for="statut">Statut</label>
                        <input type="text" value={{$contact->statut}}  id="statut" name="statut" class="form-control" />
                      </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-light border" data-dismiss="modal">Annuler</button>
             </div>
        </div>
    </div>
</div>
