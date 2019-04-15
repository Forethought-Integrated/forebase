<?php

use App\Brand;

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Brand::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $brands=new Brand;
        $brands->brand_persona ='<center><h1><img alt="" src="http://localhost:8000/img/mas.png"><br></center></h1><p>The Mastech Digital brand is personified as an experienced yet youthful, well-toned athelete,with the capabilities to take challeneges head-on, and deliver result with speed, skill,and style.</p><h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<b>young by mind. Millennial by heart</b></h3><p><b><br></b></p><h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Aggressive&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Chiseled body</h3><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; COMPETITIVE | CONFIDENT | CONNECTED&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; POISED</p><h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; All geared up&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Early riser</h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DRESSED FOR A&nbsp;<small></small>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ALERT &amp; FOCUSED | ORGANIZED<div><br></div><h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Athletic&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Experienced, hence Strong</h3><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ENERGETIC | FLEXIBLE | MULTITASKING&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;TECH SEVVY&nbsp;</p><p><br></p><h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Challenges the status quo&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Youthful</h3><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PUSHES LIMITS | RISK-TAKING&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; SOCIAL |&nbsp; SMILING | HUMOR-LOVING<br></p><p><br></p><p><br></p><br><p><br></p><h4></h4><p></p>';
        $brands->brand_guidelines='<h1>Brand LOGO</h1>The Mastech Digital Logo is primary symbol which represents the Mastech Digital Brand and its subdiaries. The logotype is stylized to represent our modern take on the rapidly-evolving digital landscape.<div>The "A" in the logotype conveys the fact that Mastech Digital is a progressive organization above the rest. It has an upward-looking approch , and is focused on growth and performing at the highest levels possible. The split "E" represent Mastech Digital s deliver through cutting-edge practices and technologies, helping solve customer challenges.<br></div><div>The 16 blue and black dots which make up the mnemonic hold these ideals in the same regard. The connection shown within the Mastech infoTrellis logo is a conscient combination of two distinguished brands - Mastech Digital and InfoTrellis - each with expertise in Digital and Mainstream Technologies staffing and data management &amp; Analytics respectively.</div><div><br></div><div>After Mastech Digital acquire infotrellis in july&nbsp; 13, 2017, a combination of the two logos was created to keep the individual brand identities intact, ensuring brand recall with customers, while still showing that combined entity falls under one brand philosophy, now with added value.</div><div><br></div><div>The InfoTrellis name is Portmanteau, consisting of "info" (the grounds of all bussiness activity )&nbsp; and "trellis"&nbsp; (an architectural support structure), implying that InfoTrellis gives your company the foundation for all its information management needs.</div><div><br></div><h3>PLACEMENT AND SIZING&nbsp;</h3>To ensure that our logo is visible and legible in all forms of media, surround the logo with enough clear space, free of any textual or visual elements, so that the brand name and logo stands alone and stands out, for maximum impact<h3>COLOR LOGO USAGE</h3><p>Only two variations of the logo may be used - colored and white. In some&nbsp; cases, we will always use the full, colored logo.</p><h3>DONTs</h3><p>The logos should be used correctly. The illustrate examples show what not to do when it comes to using oyur logo</p><p>a. Do not create logo with the text</p><p>b. Do not stretch the logo</p><p>c. Do not rearrange the logo elements</p><p>d. Do not add any graphics or effects directly within the logo.</p><p>e. Do not rotate the logo</p><p>f. Do not change the proportion of the logo&nbsp;</p><p>g. Do not outline the logo&nbsp;</p><p>h. Do not create pattern with the logo</p><p>i. Do not place the logo on a color without sufficient contrast</p><p>j. Do not gradient the logo&nbsp;</p><p>k. Do not place the logo on a busy background&nbsp;<br> 
                  </p>';

$brands->brand_color_palette='<b><h3>PRIMARY &amp; SECONDRY</h3></b><p><b>use of color for the printed and digital logo.</b></p><p>the brand color scheme includes three&nbsp; main colors: Blue, Orange, and Black. While the exact codes of these colors are to be followed strictly , in some cases, for the purposes of sound design, we may use slight alterations of these colors tints and shades of the same color.<b></b></p>';
        $brands->brand_typography='<h2><b>FONTS &amp; USAGE</b></h2><b>in s</b>ome communication, such as e-mail or Microsoft office documents, we utilize the Calibri font family, using only the Calibri&nbsp; and Calibri Light font weights . when the calibri font family is unavailable, The Arial (Regular) font can be&nbsp; utilized.&nbsp;<div><ul><li>Microsoft Office (Outlook, Word, Excel)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</li><li>Calibri&nbsp;(Regular) – Size 11</li><li>Arial (Regular) – Size 10<br></li><li>Microsoft Office (PowerPoint)<br><br></li></ul><h3>DON’Ts</h3><p>The content associated with brand should be formatted correctly. The illustrated examples show what not to do when it comes to content creation for any branded document<br><br></p><p><b>a.</b>&nbsp;Do not justify text in any collaterals including presentation and email<br><b>b. </b>Don’t hyphenate body copy at the end of line<br><b>c.</b>&nbsp;Don’t split the name of the brand between two lines of text<br><b>d.</b>&nbsp;Don’t use multiple colors within one continuous body of text<br><b>e.</b>&nbsp;Don’t distort the typeface by alternate sizing or effects<br><b>f.</b>&nbsp;Don’t include the http:// prefix to the website URL on any marketing collateral</p><br><div><br></div></div>';
        $brands->save();
    }
}
