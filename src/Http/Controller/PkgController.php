<?php

namespace My\Pkg\Http\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use My\Pkg\Mail\PkgMail;
use My\Pkg\Models\Pkg;

class PkgController extends Controller
{
    public function index()
    {
        return view('pkg::pkg1');
        // pkg is pkg name and second is blade file
        // pkg is pass form service provider.
    }

    public function store(Request $request)
    {
        Mail::to(config('pkg.send_mail'))->send(new PkgMail($request->name));
        Pkg::create(['name'=> $request->name]);
        session()->flash('message','Created SuccessFully');
        
        return redirect()->back(); 
    }
}
