<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Comment;
use Illuminate\Http\Request;

class packageController extends Controller
{
    
    public function index() {
        return view('index', [
            'packages' => Package::first()->simplePaginate(3)
        ]);
    }
    public function packageDetails(Package $package) {
        return view('package-details', [
            'package' => $package,
            'packages' => Package::all(),
            'comments' => Comment::where('package_id', $package->id)->get()
        ]);
    }
    public function packages() {
        return view('packages', [
            'packages' => Package::all()
        ]);
    }
    public function ljetovanja() {
        return view('ljetovanja', [
            'packages' => Package::where('vrsta', 'LJ')->get()
        ]);
    }
    public function zimovanja() {
        return view('zimovanja', [
            'packages' => Package::where('vrsta', 'Z')->get()
        ]);
    }
    public function izleti() {
        return view('izleti', [
            'packages' => Package::where('vrsta', 'I')->get()
        ]);
    }
}

