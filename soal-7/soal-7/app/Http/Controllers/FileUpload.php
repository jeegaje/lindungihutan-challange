<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUpload extends Controller
{
    public function upload()
    {
        return view("form-upload", [
            "files"=> File::all(),
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            "file"=> "required",
        ],
        [
            "file.required" => "Harap isi bagian file",
        ]);

        $fileModel = new File;
        $file = $request->file('file');
        $file_description = $request->description;
        if($file) {
            $fileName = $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName);
            $fileModel->name = $fileName;
            $fileModel->file_path = $filePath;
            $fileModel->description = $file_description;
            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.');
        }
    }
    public function download(File $file){
        return Storage::download($file->file_path);
    }
}
