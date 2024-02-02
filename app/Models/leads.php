<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leads extends Model{
    use HasFactory;
    protected $fillable = [
        "IDLead",
        "NMLead",
        "NMEmailLead",
        "NUTelefoneLead",
        "UF",
        "NMCidadeLead",
        "DSMensagem"
    ];
}
