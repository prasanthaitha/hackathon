<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;

class UploadController extends Controller
{
  public function uploadForm()
    {
        return view('upload_form');
    }
 

    public function uploadSubmit(UploadRequest $request)
    {
        $report = Report::create($request->all());
        foreach ($request->photos as $photo) {
            $doc = $photo->store('photos');
            Attach::create([
                'rid' => $report->rid,
                'doc' => doc
            ]);
        }
        return 'Upload successful!';
  
   
    }
}   
