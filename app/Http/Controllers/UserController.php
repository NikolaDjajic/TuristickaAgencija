<?php

namespace App\Http\Controllers;


use App\Models\Comment;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function create() {
        return view('users/register');
    }

    // Create New User
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/dashboard/packages')->with('message', 'User created and logged in');
    }
    public function login(){
        return view('users/login');
    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/dashboard/packages')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput();
    }

    public function dashboard(){
        return view('users/packages', [
            'packages' => Package::all()
        ]);    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function showComment($id){
        return view('users/comment', [
            'comment' => Comment::find($id)
        ]);
    }
    
    public function showComments(){
        return view('users/comments', [
            'comments' => Comment::all()
        ]);
    }
    public function deletePackage($id){
        $item = Package::find($id);
        $item->comments()->delete();
        $item->delete();
        return redirect('/dashboard/packages');
    }

    public function deleteComment($id){
        $item = Comment::find($id);
        $item->delete();
        return redirect('/dashboard/comments');
    }

    public function showAddAdmin(){
        return view('users/addAdmin');
    }

    public function showPackages(){
        return view('users/packages', [
            'packages' => Package::all()
        ]);
    }

    public function packageDetails(Package $package) {
        return view('users/package-details', [
            'package' => $package,
            'packages' => Package::all(),
            'comments' => Comment::where('package_id', $package->id)->get()
        ]);
    }

    public function storeAdmin(Request $request){

        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //hash password
        $formFields['password'] = bcrypt($formFields['password']);

        //napravati korisnika
        $user = User::create($formFields);
        
        return redirect('/dashboard/packages');
    }

    public function storePackage(Request $request){

        $formFields = $request->validate([
            'naslov' => 'required',
            'godDoba' => 'required',
            'brNocenja' => 'required',
            'cijena' => 'required',
            'adresa' => 'required',
            'hotel' => 'required',
            'polazak' => 'required',
            'prevoz' => 'required',
            'vrsta' => 'required',
            'opis' => 'required',
            'slika' => 'nullable'
        ]);

        if($request->hasFile('slika')){
            $formFields['slika'] = $request->file('slika')->store('images','public');
        }
        Package::create($formFields);
        return redirect('/dashboard/packages');
    }

    public function storeComment(Request $request){

        $co = new Comment;
        $co->package_id= $request->input('package_id');
        $co->komentar = $request->input('komentar');
        $co->ime = $request->input('ime');
        $co->prezime = $request->input('prezime');
        $co->odgovorZa = $request->input('odgovorZa');
        $co->save();
        return redirect('/dashboard/comments');
    }
}
