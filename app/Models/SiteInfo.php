<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'acronym',
        'logo',
        'background',
        'story',
        'description',
        'mission',
        'vision',
        'values',
    ];

    public function decoded_description()
    {
        return strip_tags($this->description);
    }
}
