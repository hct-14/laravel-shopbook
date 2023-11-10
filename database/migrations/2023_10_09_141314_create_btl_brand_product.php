<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('btl_brand', function (Blueprint $table) 
        {
            $table->Increments('brand_id');

            $table->string('brand_name');
            $table->text('brand_desc');
            $table->integer('brand_status');
            $table->text('brand_tacgia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('btl_brand');
    }
};
