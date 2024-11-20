<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

   /* protected $fillable = [
        'type_maladie', 'id'  // Inclure 'user_id' pour la relation
    ];*/
    /**
     * Relation inverse : Un patient appartient à un utilisateur
     */
    public function user()
    {
        return $this->belongsTo(User::class);  // Un patient appartient à un utilisateur
    }

}
