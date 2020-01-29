<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Laravel\Scout\Searchable;

class Evenementen extends Model
{

    protected $table = "evenementen";

    public function agendaItems()
    {
        return $this->hasMany(AgendaItem::class);
    }
}
