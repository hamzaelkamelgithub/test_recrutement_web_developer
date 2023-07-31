{{-- dialog pour confirmation supprimer --}}
<div class="modal fade" id="deleteModal{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title" id="deleteModalLabel">Supprimer le contact</h5>
                <p class="m-4">
                    Etes-vous sur de vouloir supprimer le contact ? <br>
                    Cette operation est irreversible.
                </p>
            </div>
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-light border" data-dismiss="modal">Annuler</button>
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger border">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>