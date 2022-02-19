<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Loan extends Model
{
    use HasFactory;

    protected $table = 'loans';

    protected $guarded = ['id'];

    // public function fromDateTime($value)
    // {
    //     return Carbon::parse(parent::fromDateTime($value))->format('Y-d-m H:i:s');
    // }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
