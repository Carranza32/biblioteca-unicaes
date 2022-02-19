<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Editorial extends Model
{
    use HasFactory;

    protected $table = 'editorials';

    protected $guarded = ['id'];

    // public function fromDateTime($value)
    // {
    //     return Carbon::parse(parent::fromDateTime($value))->format('Y-d-m H:i:s');
    // }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
