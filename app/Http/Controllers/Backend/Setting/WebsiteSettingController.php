<?php

namespace App\Http\Controllers\Backend\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\WebsiteSetting;
use App\Model\ManagementTeam;
use Validator;
use Auth;


class WebsiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['setting'] = WebsiteSetting::find(1);
         return view('backend.setting.website.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
         $data['setting'] = WebsiteSetting::find(1);
         return view('backend.setting.website.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'site_name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{


            $setting                    = WebsiteSetting::find(1);
            $setting->site_name         = $request->site_name;
            $setting->homepage_title    = $request->homepage_title;
            $setting->meta_tags         = $request->meta_tags;
            $setting->meta_description  = $request->meta_description;

                 
            $sitebanner        = $request->sitebanner;
            if($sitebanner){
                $uniqname      = uniqid();
                $ext           = strtolower($sitebanner->getClientOriginalExtension());
                $filepath      = 'public/images/website/';
                $imagename     = $filepath.$uniqname.'.'.$ext;
                $sitebanner->move($filepath,$imagename);
                $setting->sitebanner = $imagename;
                
            }


            $logo = $request->logo;
            if($logo){
                $uniqname   = uniqid();
                $ext        = strtolower($logo->getClientOriginalExtension());
                $filepath   = 'public/images/website/';
                $imagename  = $filepath.$uniqname.'.'.$ext;
                $logo->move($filepath,$imagename);
                $setting->logo= $imagename;
            }


            $footer_logo   = $request->footer_logo;
            if($footer_logo){
                $uniqname   = uniqid();
                $ext        = strtolower($footer_logo->getClientOriginalExtension());
                $filepath   = 'public/images/website/';
                $imagename  = $filepath.$uniqname.'.'.$ext;
                $footer_logo->move($filepath,$imagename);
                $setting->footer_logo  = $imagename;
            }

            $favicon = $request->favicon;
            if($favicon){
                $uniqname   = uniqid();
                $ext        = strtolower($favicon->getClientOriginalExtension());
                $filepath   = 'public/images/website/';
                $imagename  = $filepath.$uniqname.'.'.$ext;
                $favicon->move($filepath,$imagename);
                $setting->favicon= $imagename;
            }



            $setting->email             = $request->email;
            $setting->phone             = $request->phone;
            $setting->state_address     = $request->state_address;
            $setting->local_address     = $request->local_address;
            $setting->address           = $request->address;
            $setting->map_code          = $request->map_code;

            $setting ->save();


            $notification = array(
                'message' => 'Website Setting Update Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->route('website.setting.index')->with($notification);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    
    
    
    
        
    public function management()
    {
          $data['team'] = ManagementTeam::find(1);
         return view('backend.managements.view',$data);
    }
       
       
    public function managementedit()
    {
        $data['team'] = ManagementTeam::find(1);
         return view('backend.managements.edit',$data);
    }
    
   
    public function managementupdate(Request $request)
    {
         
        
        $data = ManagementTeam::find(1);
        
        
        $data->ch_name = $request->ch_name;
        $data->ch_designation = $request->ch_designation;
        
        $ch_image = $request->ch_image;
            
        if($ch_image){
                $uniqname   = uniqid();
                $ext        = strtolower($ch_image->getClientOriginalExtension());
                $filepath   = 'public/frontend/images/menagement/';
                $imagename  = $filepath.$uniqname.'.'.$ext;
                $ch_image->move($filepath,$imagename);
                $data->ch_image= $imagename;
        }
        
        $data->ch_description = $request->ch_description;
        
          
        $data->mg_name = $request->mg_name;
        $data->mg_designation = $request->mg_designation;
        
        $mg_image = $request->mg_image;
            
        if($mg_image){
                $uniqname   = uniqid();
                $ext        = strtolower($mg_image->getClientOriginalExtension());
                $filepath   = 'public/frontend/images/menagement/';
                $imagename  = $filepath.$uniqname.'.'.$ext;
                $mg_image->move($filepath,$imagename);
                $data->mg_image= $imagename;
        }
        
        $data->mg_description = $request->mg_description;
        
        
         
        $data->di1_name = $request->di1_name;
        $data->di1_designation = $request->di1_designation;
        
        $di1_image = $request->di1_image;
            
        if($di1_image){
                $uniqname   = uniqid();
                $ext        = strtolower($di1_image->getClientOriginalExtension());
                $filepath   = 'public/frontend/images/menagement/';
                $imagename  = $filepath.$uniqname.'.'.$ext;
                $di1_image->move($filepath,$imagename);
                $data->di1_image= $imagename;
        }
        
        $data->di1_description = $request->di1_description;
        
          
            
        $data->di2_name = $request->di2_name;
        $data->di2_designation = $request->di2_designation;
        
        $di2_image = $request->di2_image;
            
        if($di2_image){
                $uniqname   = uniqid();
                $ext        = strtolower($di2_image->getClientOriginalExtension());
                $filepath   = 'public/frontend/images/menagement/';
                $imagename  = $filepath.$uniqname.'.'.$ext;
                $di2_image->move($filepath,$imagename);
                $data->di2_image= $imagename;
        }
        
        $data->di2_description = $request->di2_description;
        
        
        
        $data->save();
        
        
         $notification = array(
                'message' => 'Management Update Successfully!',
                'alert-type' => 'success'
            );
        return redirect()->route('website.management.index')->with($notification);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
