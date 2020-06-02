<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;
use Validator;

class SiteController extends Controller
{
    //
    public function add()
    {
        return view('form');
    }

    function send(Request $req)
    {

    
    //             'name' => 'required_if:yesno,yes',
    $req->validate([
                'site_name' => 'required',
                'street_add' => 'required',
                'telephone' => 'required|min:10|numeric',
                'city' => 'required',
                'state' => 'required',
                'pin' => 'required',
                'name' => 'required_if:yesno,yes',
                's_add' => 'required_if:Site name,yes',				
                'e_city' => 'required_if:yesno,yes',
                'o_email' => 'required_if:yesno,yes',
                'e_state' => 'required_if:yesno,yes',
                'e_website' => 'required_if:yesno,yes',
                'e_pin' => 'required_if:yes,yes'

            ], [
                'site_name.required' => 'Site Name is required',
                'street_add.required' => 'Street Address is required',
                'telephone.required' => 'Telephone Number is required',
                'city.required' => 'City Name is required',
                'state.required' => 'State Name is required',
                'pin.required' => 'Pin is required',		
                'name.required' => 'Ethics Committee Name is required',
                's_add.required' => 'Ethics Committee Street Address is required',
                'e_city.required' => 'Ethics Committee City Name is required',
                'o_email.required' => 'Ethics Committee Office Email is required',
                'e_state.required' => 'Ethics Committee State is required',
                'e_website.required' => 'Ethics Committee Website is required',
                'e_pin.required' => 'Ethics Committee Pin is required'
                ]);
   

        $reg = new Site;
        $reg->site_name=$req->input('site_name');
        $reg->street_add=$req->input('street_add');
        $reg->telephone=$req->input('telephone');
        $reg->city=$req->input('city');
        $reg->email=$req->input('email');
        $reg->state=$req->input('state');
        $reg->website=$req->input('website');
        $reg->pin=$req->input('pin');
        $reg->yesno=$req->input('yesno');
        $reg->name=$req->input('name');
        $reg->s_add=$req->input('s_add');
        $reg->tel=$req->input('tel');
        $reg->e_city=$req->input('e_city');
        $reg->o_email=$req->input('o_email');
        $reg->e_state=$req->input('e_state');
        $reg->e_website=$req->input('e_website');
        $reg->e_pin=$req->input('e_pin');
        $reg->qstn=$req->input('qstn');
        $reg->reg_no=$req->input('reg_no');

        $file = $req->file('upload_file');
        if($file == "")
        {
		$reg->upload = "";
	    }else{
	    $file_name = time().$file->getClientOriginalName();
		$file->move('uploads', $file_name);
		$reg->upload = $file_name;	
	    }

        $reg->nop=$req->input('nop');
        $reg->desig=$req->input('desig');

        $reg->save();
        $req->session()->flash('status','Registerd Successfully!!');
        return redirect('home');
    // }
    }
}
