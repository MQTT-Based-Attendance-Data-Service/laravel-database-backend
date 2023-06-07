<?php

namespace App\Http\Controllers;

use App\Models\RawEntry;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function add_entry(){
        RawEntry::create([
            'employee_id' => '001',
            'entry_type' => 'entry',
            'input_time' => '2023-06-08 2:00:00'
        ]);

        return 'hi';
    }
}
