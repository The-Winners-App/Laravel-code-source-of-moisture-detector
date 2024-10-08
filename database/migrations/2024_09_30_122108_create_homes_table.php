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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->text('about');
            $table->float('prix');
            $table->string('nom');
            $table->text('presentation');
            $table->text('package');
            $table->text('application');
            $table->text('specificite');
            $table->text('documentation');
            $table->created_at();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
