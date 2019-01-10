<?php
namespace App\Helpers;
use Illuminate\Http\Request;
/**
 * 
 */
class Helper
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }

	public static function csvToArray($filename = '', $delimiter = ',')
	{
	    if (!file_exists($filename) || !is_readable($filename))
	        return false;

	    $header = null;
	    $data = array();
	    if (($handle = fopen($filename, 'r')) !== false)
	    {
	        while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
	        {
	            if (!$header)
	                $header = $row;
	            else
	                $data[] = array_combine($header, $row);
	        }
	        fclose($handle);
	    }

	    return $data;
    }

    public static function fileUpload(Request $requestFile,$filePath)
    {
	   	$fileNameWithExt=time().'-'.$requestFile->file->getClientOriginalName();
    	$filePath=$requestFile->file->storeAs($filePath,$fileNameWithExt);
    	return $filePath;
    }
 
}