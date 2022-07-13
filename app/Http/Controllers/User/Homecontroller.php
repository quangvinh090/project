<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Contact\ContactRequest;

class Homecontroller extends Controller
{
    public function index() {
        $result = DB::table('category')->where('parent', '=', 0)->get();
        return view('user.product.index', ['categories'=> $result]);
    }
    public function Contact(){       
        $result = DB::table('contacts')->get();
        $category = DB::table('category')->where('parent', '=', 0)->get();
        return view('user.product.Contact', ['categories'=> $category, 'contacts'=> $result]);
    }
    public function store (ContactRequest $request){
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();
        DB::table('contacts')->insert($data);      
        return redirect()->route('user.product.Contact'); 
    }

}
