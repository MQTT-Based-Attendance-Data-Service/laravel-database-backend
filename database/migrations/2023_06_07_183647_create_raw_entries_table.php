<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    /*
     * employee_id: to identify users
     * entry_type: entry can be for ingoing and outgoing
     * input_time: (entry_type == entry)? entry time : exit time
     */
    public function up(): void
    {
        Schema::create('raw_entries', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id');
            $table->enum('entry_type',['entry','exit']);
            $table->timestamp('input_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('raw_entries');
    }
};
