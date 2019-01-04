<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function show(){
        $path = storage_path('app\SBOK_Guide_English_Sample.pdf');
        $name = "SBOK Guide";
        return response()->download($path, $name);
    }

    public function create(Request $request){
        $path = $request->file('photo')->store('testing');
        return response()->json(['path' => $path], 200);
    }
}
