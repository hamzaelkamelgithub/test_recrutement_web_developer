@extends('layout')

    <div class="container mt-4">
        <h2 class="mb-4">Liste des contacts</h2>
            {{-- button ajouter et bar search --}}
        <div class="row mb-4">
            <form class=" col-md-6 " type="get" action="{{url('contacts/search')}}">
              <input type="search" class="form-control rounded" name="q" type="search" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            </form>
            <div class="col  d-flex justify-content-end">
                <a class="btn btn-info" data-toggle="modal" data-target="#createModal">+Ajouter</a>
            </div>
        </div>
           {{--  --}}
        <table  class=" table align-middle bg-white " >
          <thead class="bg-light">
              <tr>
                <th><a class="text-info" href="{{ route('contacts.index', ['sort_column' => 'nom', 'sort_order' => $sortColumn == 'nom' && $sortOrder == 'asc' ? 'desc' : 'asc']) }}">NOM DU CONTACT</a></th>
                <th><a class="text-info" href="{{ route('contacts.index', ['sort_column' => 'prenom', 'sort_order' => $sortColumn == 'prenom' && $sortOrder == 'asc' ? 'desc' : 'asc']) }}">SOCIETE</a></th>
                <th><a class="text-info" href="{{ route('contacts.index', ['sort_column' => 'nom', 'sort_order' => $sortColumn == 'nom' && $sortOrder == 'asc' ? 'desc' : 'asc']) }}">STATUT</th>
                <th > </th>
              </tr>
          </thead>
          <tbody>
                @foreach($contacts as $contact)
              <tr>
                <td>
                    {{$contact->prenom}} {{$contact->nom}} 
                </td>
                <td>
                    {{$contact->entreprise}} 
                </td>
                <td>
                    {{$contact->statut}} 
                </td>
                <td >
                    <a class=" bi bi-eye" data-toggle="modal" data-target="#detailModal{{ $contact->id }}"></a>
                    <a class="bi bi-pencil" data-toggle="modal" data-target="#updateModal{{ $contact->id }}"></a>
                    <a class="bi bi-trash" data-toggle="modal" data-target="#deleteModal{{ $contact->id }}"></a>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
    
         {{$contacts->links('vendor.pagination.bootstrap-5')}} 

        
      
    @foreach($contacts as $contact)
    @include('contact.edit')
    @include('contact.delete')
    @include('contact.detail')
    @include('contact.create')
    @endforeach
<!-- resources/views/items/index.blade.php -->
<script>
    $(document).ready(function() {
        // Submit the update form when the modal's "Save Changes" button is clicked
        $('form[id^=updateModal]').submit(function(e) {
            e.preventDefault();
            if (confirm("Are you sure you want to save the changes?")) {
                $(this).submit(); // Proceed with form submission
            }
        });

        // Submit the delete form when the modal's "Delete" button is clicked
        $('form[id^=deleteModal]').submit(function(e) {
            e.preventDefault();
            if (confirm("Are you sure you want to delete this item?")) {
                $(this).submit(); // Proceed with form submission
            }
        });
    });
</script>
