<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorPalettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('color_palettes', function (Blueprint $table) {
            $table->increments('color_palette_id');
            $table->string('color_type')->nullable();
            $table->text('color_description')->nullable();
            $table->string('color_cmyk_code')->nullable();
            $table->string('color_rgb_code')->nullable();
            $table->string('color_hex_code')->nullable();
            $table->string('color_pantone_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('color_palettes');
    }
}
