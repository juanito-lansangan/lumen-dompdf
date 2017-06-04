<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
* 
*/
class FileController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('cors');
	}

	public function saveFile(Request $request)
	{
		if(!$request->hasFile('file') || !$request->file('file')->isValid()) {
			return 'Error uploading file';
		}
		
		$file = $request->file('file');

		// $destinationPath = 'uploads/'.$request->service_order_no;
		$destinationPath = 'uploads/';
      	$file->move($destinationPath, $file->getClientOriginalName());

		return 'Upload successful';
	}
}