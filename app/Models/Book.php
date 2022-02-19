<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $guarded = ['id'];

    protected $appends = ['has_loan'];

    // public function fromDateTime($value)
    // {
    //     return Carbon::parse(parent::fromDateTime($value))->format('Y-d-m H:i:s');
    // }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function editorial()
    {
        return $this->belongsTo(Editorial::class);
    }

    public function getHasLoanAttribute(){
        return Loan::where('book_id', $this->id)->where('is_active', 1)->first();
    }
}
