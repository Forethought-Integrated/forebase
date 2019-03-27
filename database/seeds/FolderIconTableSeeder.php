<?php

use Illuminate\Database\Seeder;
use App\Model\FolderIcon;

class FolderIconTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foldericon=new FolderIcon();
        $foldericon->folder_name='HR';
        $foldericon->image='HR.png';
        $foldericon->file_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $foldericon->save();

        $foldericon=new FolderIcon();
        $foldericon->folder_name='Marketing';
        $foldericon->image='Marketing.png';
        $foldericon->file_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $foldericon->save();

        $foldericon=new FolderIcon();
        $foldericon->folder_name='Corporate';
        $foldericon->image='Corporate.png';
        $foldericon->file_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $foldericon->save();

        $foldericon=new FolderIcon();
        $foldericon->folder_name='Data & Analytics';
        $foldericon->image='Data-&-Analytics.png';
        $foldericon->file_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $foldericon->save();

        $foldericon=new FolderIcon();
        $foldericon->folder_name='Digital Learning';
        $foldericon->image='Digital-Learning.png';
        $foldericon->file_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $foldericon->save();

        $foldericon=new FolderIcon();
        $foldericon->folder_name='IT Staffing';
        $foldericon->image='IT-Staffing.png';
        $foldericon->file_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $foldericon->save();

        $foldericon=new FolderIcon();
        $foldericon->folder_name='SAP HANA';
        $foldericon->image='SAP-HANA.png';
        $foldericon->file_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $foldericon->save();

        $foldericon=new FolderIcon();
        $foldericon->folder_name='Salesforce';
        $foldericon->image='Salesforce.png';
        $foldericon->file_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $foldericon->save();

        $foldericon=new FolderIcon();
        $foldericon->folder_name='Brochures';
        $foldericon->image='Brochure.png';
        $foldericon->file_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $foldericon->save();

        $foldericon=new FolderIcon();
        $foldericon->folder_name='Case Studies';
        $foldericon->image='Case-Studies.png';
        $foldericon->file_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $foldericon->save();

        $foldericon=new FolderIcon();
        $foldericon->folder_name='Corporate Deck';
        $foldericon->image='Corporate-Deck.png';
        $foldericon->file_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $foldericon->save();

        $foldericon=new FolderIcon();
        $foldericon->folder_name='Flyers';
        $foldericon->image='Flyers.png';
        $foldericon->file_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $foldericon->save();

        $foldericon=new FolderIcon();
        $foldericon->folder_name='Handouts';
        $foldericon->image='Handouts.png';
        $foldericon->file_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $foldericon->save();

        $foldericon=new FolderIcon();
        $foldericon->folder_name='Industry Digilets';
        $foldericon->image='Industry-Digilets.png';
        $foldericon->file_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $foldericon->save();

        $foldericon=new FolderIcon();
        $foldericon->folder_name='Logo Formats';
        $foldericon->image='Logo-Formats.png';
        $foldericon->file_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $foldericon->save();

        $foldericon=new FolderIcon();
        $foldericon->folder_name='PPTs';
        $foldericon->image='PPTs.png';
        $foldericon->file_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $foldericon->save();

        $foldericon=new FolderIcon();
        $foldericon->folder_name='Templates';
        $foldericon->image='Templates.png';
        $foldericon->file_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $foldericon->save();

        $foldericon=new FolderIcon();
        $foldericon->folder_name='Videos';
        $foldericon->image='Videos.png';
        $foldericon->file_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $foldericon->save();
    }
}
