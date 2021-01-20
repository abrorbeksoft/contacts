<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['contacts','addContact']);
    }

    public function index()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function doRegister()
    {

    }

    public function doLogin()
    {

    }

    public function contacts()
    {
        return view('contacts',[
            'user'=>Auth::user(),
            'contacts'=>Auth::user()->contacts()->orderBy('created_at','desc')->get()
        ]);
    }

    public function addContact()
    {
        return view('addcontact');
    }

    public function storeContact(Request $request)
    {
        $contact=Contact::where('name',$request->name)->first();
        if (isset($contact))
            return view('addcontact')->with('error','Bunday kontakt mavjud');

        $request->validate([
            'name'=>'bail|required',
            'image'=>'bail|required',
            'email'=>'bail|required',
            'number'=>'bail|required'
        ]);


        $path=$request->file('image')->store('images');
        $user=Auth::user();

        $contact=$user->contacts()->create([
            'name'=>$request->name,
            'image'=>$path,

        ]);

        $contact->emails()->create([
            'name'=>$request->email,
            'text'=>"Lorem ipsum dolor sit amet, consectetur adipisicing.",
        ]);
        $contact->numbers()->create([
            'name'=>$request->number,
            'text'=>"Lorem ipsum dolor sit amet, consectetur adipisicing."
        ]);

        return redirect()->route('contacts');

    }

}
