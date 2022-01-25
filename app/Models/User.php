<?php

// Namespacing.
namespace App\Models;

// Facades.
use Illuminate\Database\Eloquent\Model;

// Vote Model.
use Inani\Larapoll\Traits\Voter;

class User extends Model
{
    use Voter;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'password',
        'email'
    ];

    /**
     * A user can have many messages
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
