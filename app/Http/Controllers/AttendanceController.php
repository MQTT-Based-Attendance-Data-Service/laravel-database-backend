<?php

namespace App\Http\Controllers;

use App\Models\RawEntry;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function demo_entry(){
        RawEntry::create([
            'employee_id' => '001',
            'entry_type' => 'entry',
            'input_time' => '2023-06-08 2:00:00'
        ]);

        return 'hi';
    }

    public function add_entry(){
        /*
         * Algorithm
         *
         * Check whether type == entry or exit
         *
         *  if entry :
         *      simply add the data
         *
         *  if exit :
         *      get the last record as entry from the employee id
         *      calculate time distance from that record
         *      add to the raw data
         *      see if the record exist for that id in that date
         *
         *      if does not :
         *          simply add the record of time distance in 2nd database
         *
         *      if exist :
         *          add the value to the existing time
         *
         */
    }
}
