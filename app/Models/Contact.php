<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['prenom', 'nom', 'email', 'entreprise', 'adresse', 'code_postal', 'ville', 'statut' ];
    public $sortable = ['prenom','nom','entreprise'];
}
