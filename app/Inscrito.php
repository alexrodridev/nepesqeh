<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscrito extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'email', 'tel', 'cpf', 'eventos_id'
    ];

    /**
     * Get the event that owns the subscribes.
     */
    public function evento()
    {
        return $this->belongsTo('App\Evento');
    }
}
