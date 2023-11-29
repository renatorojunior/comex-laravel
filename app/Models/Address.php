<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['street', 'number', 'complement', 'neighborhood', 'city', 'state'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
