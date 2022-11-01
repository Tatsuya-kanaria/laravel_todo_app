<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    /**
     * One goal belongs to one user only.
     *
      * @return void
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
