<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawEntry extends Model
{
    use HasFactory;

    protected $table = 'raw_entries';

    protected $fillable = [
        'employee_id',
        'entry_type',
        'input_time'
    ];
}
