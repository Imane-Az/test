<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villes extends Model
{
    use HasFactory;
    protected  $table='villes';
    protected $primaryKey='idV';
    protected $fillable=['idV','nomVille'];
}
