<?php

// namespace UniSharp\LaravelFilemanager\Controllers;
namespace App\Http\Controllers\FileManager;

use App\Traits\FileManager\LfmHelpers;
// use UniSharp\LaravelFilemanager\Traits\LfmHelpers;
use App\Model\FolderIcon;

/**
 * Class LfmController.
 */
class LfmController extends Controller
{
    use LfmHelpers;

    protected static $success_response = 'OK';

    public function __construct()
    {
        $this->applyIniOverrides();
    }

    public function selectFolderIcon($item_name)
    {
        $folderIcons=FolderIcon::select('folder_name','file_path')->get()->toArray();
        
        foreach ($folderIcons as $folderIcon) {
            if($folderIcon['folder_name']==$item_name)
            {
               return asset($folderIcon['file_path']);
            }
        }

        return asset('vendor/laravel-filemanager/img/folder.png');
    }


        // return $thumb_url;
    // }


    // public function selectFolderIcon($item_name)
    // {

    //     switch ($item_name) {
    //         case 'HR':
    //             $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/MainFolders/HR.png');
    //         break;
    //         case 'Marketing':
    //             $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/MainFolders/Marketing.png');
    //         break;
    //         case 'Corporate':
    //             $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/MainSubFolders/Corporate.png');
    //         break;
    //         case 'Data & Analytics':
    //             $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/MainSubFolders/Data-&-Analytics.png');
    //         break;
    //         case 'Digital Learning':
    //             $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/MainSubFolders/Digital-Learning.png');
    //         break;
    //         case 'IT Staffing':
    //             $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/MainSubFolders/IT-Staffing.png');
    //         break;
    //         case 'SAP HANA':
    //             $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/MainSubFolders/SAP-HANA.png');
    //         break;
    //         case 'Salesforce':
    //             $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/MainSubFolders/Salesforce.png');
    //         break;
    //         case 'Brochures':
    //             $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/Brochure.png');
    //         break;
    //         case 'Case Studies':
    //             $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/Case-Studies.png');
    //         break;
    //         case 'Corporate Deck':
    //             $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/Corporate-Deck.png');
    //         break;
    //         case 'Flyers':
    //             $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/Flyers.png');
    //         break;
    //         case 'Handouts':
    //             $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/Handouts.png');
    //         break;
    //         case 'Industry Digilets':
    //             $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/Industry-Digilets.png');
    //         break;
    //         case 'Logo Formats':
    //             $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/Logo-Formats.png');
    //         break;
    //         case 'PPTs':
    //             $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/PPTs.png');
    //         break;
    //         case 'Templates':
    //             $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/Templates.png');
    //         break;
    //         case 'Videos':
    //             $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/Videos.png');
    //         break;
    //         default:
    //             $thumb_url = asset('vendor/laravel-filemanager/img/folder.png');
    //     }


    //     return $thumb_url;
    // }

    /**
     * Show the filemanager.
     *
     * @return mixed
     */
    public function show()
    {
        return view('laravel-filemanager::index');
    }

    public function getErrors()
    {
        $arr_errors = [];

        if (! extension_loaded('gd') && ! extension_loaded('imagick')) {
            array_push($arr_errors, trans('laravel-filemanager::lfm.message-extension_not_found'));
        }

        $type_key = $this->currentLfmType();
        $mine_config = 'lfm.valid_' . $type_key . '_mimetypes';
        $config_error = null;

        if (! is_array(config($mine_config))) {
            array_push($arr_errors, 'Config : ' . $mine_config . ' is not a valid array.');
        }

        return $arr_errors;
    }
}
