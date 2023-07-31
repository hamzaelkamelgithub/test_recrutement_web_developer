<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sortColumn = $request->query('sort_column', 'nom' , 'prenom');
        $sortOrder = $request->query('sort_order', 'asc');
        $sortColumn_prenom = $request->query('sort_column', 'prenom');
        $sortOrder_prenom = $request->query('sort_order', 'asc');
        $contacts = Contact::orderBy($sortColumn, $sortOrder )->paginate(10);
      
        return view('contact.index' , compact('contacts','sortColumn','sortOrder'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'prenom'=>'required|regex:/^[A-Z]+$/u|unique:contacts',
            'nom'=>'required|regex:/^[A-Z]+$/u|unique:contacts',
            'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
            'entreprise'=> 'required|regex:/^[a-zA-Z0-9]+$/u|unique:contacts',    
            'adresse'=>'required',
            'code_postal'=>'required|regex:/[0-9]/',
            'ville'=>'required',
            'statut'=>'required',
        ]);
        
    

        $contact = new Contact();
        $contact->prenom = strip_tags($request->input('prenom'));
        $contact->nom = strip_tags($request->input('nom'));
        $contact->email = strip_tags($request->input('email'));
        $contact->entreprise = strip_tags($request->input('entreprise'));
        $contact->adresse = strip_tags($request->input('adresse'));
        $contact->code_postal = strip_tags($request->input('code_postal'));
        $contact->ville = strip_tags($request->input('ville'));
        $contact->statut = strip_tags($request->input('statut'));
        $contact->save();

        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contacts = Contact::findOrFail($id);
        return view('contact.edit', compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contacts= Contact::findOrFail($id);
        // Validate the incoming request data here if necessary
        $contacts->update($request->all());
        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contacts= Contact::findOrFail($id);
        $contacts->delete();
        return redirect()->route('contacts.index');
    }

    public function search(Request $request)
    {
        $sortColumn = $request->query('sort_column', 'nom' , 'prenom');
        $sortOrder = $request->query('sort_order', 'asc');
        $sortColumn_prenom = $request->query('sort_column', 'prenom');
        $sortOrder_prenom = $request->query('sort_order', 'asc');
        $cont = Contact::orderBy($sortColumn, $sortOrder )->paginate(10);


        $search_text = $_GET['q'];
        $contacts = Contact::where( 'prenom' ,'LIKE','%'.$search_text.'%')->paginate(10);
     
        return view('contact.search', compact('contacts','cont','sortColumn','sortOrder'));
    }

}
