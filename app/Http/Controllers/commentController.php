<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Package;
use Illuminate\Http\Request;

class commentController extends Controller
{
    //
    public function store(Request $request)
{   
    $co = new Comment;
    $co->package_id = $request->input('package_id');
    $co->komentar = $request->input('komentar');
    $co->ime = $request->input('ime');
    $co->prezime = $request->input('prezime');
    $co->save();
    $package = Package::find($request->input('package_id'));
    
    return view('package-details', [
        'package' => $package,
        'packages' => Package::all(),
        'comments' => Comment::izdvojiPoIndeksu($package->id)
    ]);
}   
}
