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
            $table->string('color_type');
            $table->text('color_description');
            $table->string('color_cmyk_code');
            $table->string('color_rgb_code');
            $table->string('color_hex_code');
            $table->string('color_pantone_code');
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
