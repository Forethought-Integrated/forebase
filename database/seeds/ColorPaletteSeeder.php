<?php
use App\Model\ColorPalette;

use Illuminate\Database\Seeder;

class ColorPaletteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        ColorPalette::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $colorpalette = new ColorPalette();
        $colorpalette->color_type ='Blue';
        $colorpalette->color_description = 'The Blue color is for the Mastech color which is in the MAS';
        $colorpalette->color_cmyk_code = '82|47|1|0';
        $colorpalette->color_rgb_code = '46|135|252';
        $colorpalette->color_hex_code = '#2E87FC';
        $colorpalette->color_pantone_code ='2727 C';
        $colorpalette->save(); 

        $colorpalette = new ColorPalette();
        $colorpalette->color_type ='Orange';
        $colorpalette->color_description = 'orange color used in the tech';
        $colorpalette->color_cmyk_code = '0|50|90|0';
        $colorpalette->color_rgb_code = '255|128|25';
        $colorpalette->color_hex_code = '#FF8019';
        $colorpalette->color_pantone_code ='1575 C';
        $colorpalette->save();

        $colorpalette = new ColorPalette();
        $colorpalette->color_type ='Black';
        $colorpalette->color_description = 'black use in the Infotrellis';
        $colorpalette->color_cmyk_code = '80|75|70';
        $colorpalette->color_rgb_code = '37';
        $colorpalette->color_hex_code = '32|40|48';
        $colorpalette->color_pantone_code ='#202830';
        $colorpalette->save();

        $colorpalette = new ColorPalette();
        $colorpalette->color_type ='Yellow';
        $colorpalette->color_description = 'yellow color used with the orange';
        $colorpalette->color_cmyk_code = '3|5|100|0';
        $colorpalette->color_rgb_code = '252|197';
        $colorpalette->color_hex_code = '238';
        $colorpalette->color_pantone_code ='#71C5E8';
        $colorpalette->save();

        // $colorpalette = new ColorPalette();
        // $colorpalette->color_type ='';
        // $colorpalette->color_description = '';
        // $colorpalette->color_cmyk_code = '';
        // $colorpalette->color_rgb_code = '';
        // $colorpalette->color_hex_code = '';
        // $colorpalette->color_pantone_code ='';
        // $colorpalette->save();

        // $colorpalette = new ColorPalette();
        // $colorpalette->color_type ='';
        // $colorpalette->color_description = '';
        // $colorpalette->color_cmyk_code = '';
        // $colorpalette->color_rgb_code = '';
        // $colorpalette->color_hex_code = '';
        // $colorpalette->color_pantone_code ='';
        // $colorpalette->save();

        // $colorpalette = new ColorPalette();
        // $colorpalette->color_type ='';
        // $colorpalette->color_description = '';
        // $colorpalette->color_cmyk_code = '';
        // $colorpalette->color_rgb_code = '';
        // $colorpalette->color_hex_code = '';
        // $colorpalette->color_pantone_code ='';
        // $colorpalette->save();

        // $colorpalette = new ColorPalette();
        // $colorpalette->color_type ='';
        // $colorpalette->color_description = '';
        // $colorpalette->color_cmyk_code = '';
        // $colorpalette->color_rgb_code = '';
        // $colorpalette->color_hex_code = '';
        // $colorpalette->color_pantone_code ='';
        // $colorpalette->save();

        // $colorpalette = new ColorPalette();
        // $colorpalette->color_type ='';
        // $colorpalette->color_description = '';
        // $colorpalette->color_cmyk_code = '';
        // $colorpalette->color_rgb_code = '';
        // $colorpalette->color_hex_code = '';
        // $colorpalette->color_pantone_code ='';
        // $colorpalette->save();

        // $colorpalette = new ColorPalette();
        // $colorpalette->color_type ='';
        // $colorpalette->color_description = '';
        // $colorpalette->color_cmyk_code = '';
        // $colorpalette->color_rgb_code = '';
        // $colorpalette->color_hex_code = '';
        // $colorpalette->color_pantone_code ='';
        // $colorpalette->save();

        // $colorpalette = new ColorPalette();
        // $colorpalette->color_type ='';
        // $colorpalette->color_description = '';
        // $colorpalette->color_cmyk_code = '';
        // $colorpalette->color_rgb_code = '';
        // $colorpalette->color_hex_code = '';
        // $colorpalette->color_pantone_code ='';
        // $colorpalette->save();

        // $colorpalette = new ColorPalette();
        // $colorpalette->color_type ='';
        // $colorpalette->color_description = '';
        // $colorpalette->color_cmyk_code = '';
        // $colorpalette->color_rgb_code = '';
        // $colorpalette->color_hex_code = '';
        // $colorpalette->color_pantone_code ='';
        // $colorpalette->save();
    }
}
