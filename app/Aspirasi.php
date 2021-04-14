<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    protected $table = "aspirasi";

    protected $guarded = [];
    
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
