<?php

namespace App\Http\Controllers;

use App\Models\partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index(){
        $partners = partner::all();
        return view('CMS.index', ['partners' => $partners]);
    }

    public function store(Request $request){
        Partner::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'company' => $request->company,
            'business' => $request->business,
            'type' => $request->type,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'code' => $request->code,
        ]);

        $request->session()->flash('alert-success', 'Post Created Successfully');
        return to_route('home');
    }

    public function drop(Request $request, $id)
    {
        $partner = Partner::find($id);
        $partner->delete();
        $request->session()->flash('alert-success', 'Post Removed Successfully');
        return to_route('Partner.index');
    }
}
