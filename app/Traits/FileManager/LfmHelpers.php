<?php

// namespace UniSharp\LaravelFilemanager\Traits;
namespace App\Traits\FileManager;

use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;


use UniSharp\LaravelFilemanager\Traits\LfmHelpers as Lfm;

trait LfmHelpers
{
    use Lfm;

    //Overiding LfmHelper Method

    public function selectFolderIcon($item_name)
    {

       switch ($item_name) {
    case 'HR':
        $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/MainFolders/HR.png');
        break;
    case 'Marketing':
        $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/MainFolders/Marketing.png');
        break;
    case 'Corporate':
        $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/MainSubFolders/Corporate.png');
        break;
        case 'Data & Analytics':
        $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/MainSubFolders/Data-&-Analytics.png');
        break;
        case 'Digital Learning':
        $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/MainSubFolders/Digital-Learning.png');
        break;
        case 'IT Staffing':
        $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/MainSubFolders/IT-Staffing.png');
        break;
        case 'SAP HANA':
        $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/MainSubFolders/SAP-HANA.png');
        break;
        case 'Salesforce':
        $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/MainSubFolders/Salesforce.png');
        break;
        case 'Brochures':
        $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/Brochure.png');
        break;
        case 'Case Studies':
        $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/Case-Studies.png');
        break;
        case 'Corporate Deck':
        $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/Corporate-Deck.png');
        break;
        case 'Flyers':
        $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/Flyers.png');
        break;
        case 'Handouts':
        $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/Handouts.png');
        break;
        case 'Industry Digilets':
        $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/Industry-Digilets.png');
        break;
        case 'Logo Formats':
        $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/Logo-Formats.png');
        break;
        case 'PPTs':
        $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/PPTs.png');
        break;
        case 'Templates':
        $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/Templates.png');
        break;
        case 'Videos':
        $thumb_url = asset('vendor/laravel-filemanager/img/FolderIcons/Subfolders/Videos.png');
        break;
    default:
            $thumb_url = asset('vendor/laravel-filemanager/img/folder.png');
        }


        return $thumb_url;
    }


    /**
     * Format a file or folder to object.
     *
     * @param  string  $item  Real path of a file or directory.
     * @return object
     */
    public function objectPresenter($item)
    {
        $item_name = $this->getName($item);
        $is_file = is_file($item);

        if (! $is_file) {
            $file_type = trans('laravel-filemanager::lfm.type-folder');
            $icon = 'fa-folder-o';
            // $thumb_url = asset('vendor/laravel-filemanager/img/folder.png');
            $thumb_url = $this->selectFolderIcon($item_name);
        } elseif ($this->fileIsImage($item)) {
            $file_type = $this->getFileType($item);
            $icon = 'fa-image';

            $thumb_path = $this->getThumbPath($item_name);
            $file_path = $this->getCurrentPath($item_name);
            if (! $this->imageShouldHaveThumb($file_path)) {
                $thumb_url = $this->getFileUrl($item_name) . '?timestamp=' . filemtime($file_path);
            } elseif (File::exists($thumb_path)) {
                $thumb_url = $this->getThumbUrl($item_name) . '?timestamp=' . filemtime($thumb_path);
            } else {
                $thumb_url = $this->getFileUrl($item_name) . '?timestamp=' . filemtime($file_path);
            }
        } else {
            $extension = strtolower(File::extension($item_name));
            $file_type = config('lfm.file_type_array.' . $extension) ?: 'File';
            $icon = config('lfm.file_icon_array.' . $extension) ?: 'fa-file';
            $thumb_url = null;
        }

        return (object) [
            'name'    => $item_name,
            'url'     => $is_file ? $this->getFileUrl($item_name) : '',
            'size'    => $is_file ? $this->humanFilesize(File::size($item)) : '',
            'updated' => filemtime($item),
            'path'    => $is_file ? '' : $this->getInternalPath($item),
            'time'    => date('Y-m-d h:i', filemtime($item)),
            'type'    => $file_type,
            'icon'    => $icon,
            'thumb'   => $thumb_url,
            'is_file' => $is_file,
        ];
    }

    
}
