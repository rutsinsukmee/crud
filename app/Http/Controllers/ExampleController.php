<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ExampleController extends Controller
{
    public function create()
        {
            return view('example/create');
        }

    public function store(Request $request)
        {
            //Save upload image to 'avatar' folder which in 'storage/app/public' folder
            $path = $request->file('image')->store('avatar','public');
            //echo $path;
            //Save $path to database or anything else
            //...
            return redirect('/example/create');
        }

    public function pdf_index() 
        {
            $data = [ ];
            $pdf = PDF::loadView('example/test_pdf',$data);
            return $pdf->stream('test.pdf'); //แบบนี้จะ stream มา preview
            //return $pdf->download('test.pdf'); //แบบนี้จะดาวโหลดเลย
        }
}
