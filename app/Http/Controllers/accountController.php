<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\contact_infoModel;
class accountController extends Controller
{
    public function get_info_account()
    {
    	$info = $this::get_info_user();
        // dd($info);
    	if (!$this::check_login()) {
    		return view('VietNamTour.login');
    	}
    	else{
    		return view('VietNamTour.content.user.info', compact('info'));
    	}
    	
    }

    public function check_login()
    {
    	if (Session::has('login') && Session::get('login')) 
        {
            return true;
        }
        else{ return false; }
    }

    public function get_info_user()
    {
    	if (Session::has('login') && Session::get('login')) 
        {
            $result[] = Session::get('user_info');
            // dd($result);
            foreach ($result as $value) {
            	$user_id = $value->user_id;
            }
            
            $result = contact_infoModel::where('user_id',$user_id)->first();
            
            // dd($info);
        }
        else{ $result = []; }
        return $result;
    }
    public function edit_user(Request $request,$id)
    {
        

        try{
            if($request->avatar)
            {
                contact_infoModel::where('user_id',$id)
         
                ->update(['contact_name'=>$request->name,'contact_phone'=>$request->phone,
                'contact_website'=>$request->website,'contact_email_address'=>$request->email,'contact_language'=>$request->lang,
                'contact_country'=>$request->address,'contact_avatar'=>$request->avatar]);
                return "ok";
            }
            else
            {
                contact_infoModel::where('user_id',$id)
         
                ->update(['contact_name'=>$request->name,'contact_phone'=>$request->phone,
                'contact_website'=>$request->website,'contact_email_address'=>$request->email,'contact_language'=>$request->lang,
                'contact_country'=>$request->address]);
                return "ok";
            }
         

        }
        catch(\Illuminate\Database\QueryException $ex){ 
            return "error";
        }
        
    }
}
