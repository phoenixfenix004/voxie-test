<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomAttribute extends Model
{
    public $timestamps = false;

    protected $fillable = ['contact_id', 'key', 'value'];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

}
