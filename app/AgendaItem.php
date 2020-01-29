<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgendaItem extends Model
{

    protected $table = "agendaItems";

    public function evenementen()
    {
        return $this->belongsTo(Evenementen::class);
    }
}
