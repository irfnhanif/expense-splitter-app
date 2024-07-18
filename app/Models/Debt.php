<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Debt extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'expense_id',
        'lender_id',
        'borrower_id'
    ];

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
