<?php

namespace App\Models;

use App\Events\CondominioCreatedEvent;
use App\Events\CondominioDeletedEvent;
use App\Events\CondominioUpdatedEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'document_number',
        'phone_number',
        'mobile_phone_number',
        'email',
        'postal_code',
        'street_number',
        'street_name',
        'neighborhood',
        'city',
        'state',
        'complement',
        'contact',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    /**
     * The events that the model fires.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => CondominioCreatedEvent::class,
        'updated' => CondominioUpdatedEvent::class,
        'deleted' => CondominioDeletedEvent::class,
    ];
}
