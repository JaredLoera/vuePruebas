<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estado extends Model
{
    use HasFactory;
    protected $table = 'estados';

    public function municipios(){
        return $this->belongsToMany(municipio::class);
    }
}
