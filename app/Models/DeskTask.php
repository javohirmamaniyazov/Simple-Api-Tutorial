<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeskTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'card_id'
    ];

    public function card() {
        return $this->belongsTo(Card::class);
    }
}
