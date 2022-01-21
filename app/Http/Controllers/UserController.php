<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class UserController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function login_check(Request $request)
    {
        $email=$request->email;
        $password=$request->password;
        $where=array("Email"=>$email,"Password"=>$password);
        $sql=DB::table('umm_user')->where($where)->first();
        if($sql)
        {
            // dd();
            Session::put('userID',$sql->UserID);
            return redirect()->route('index');
        }
        else
        {
            return "Enavalid login";
        }
    }

    public function index()
    {
        $userID=Session::get('userID');
        $owner=DB::table('owner')->where('User_ID',$userID)->first();
        $vendor=DB::table('vendor_emp_od_media')->where('User_ID',$userID)->first();
        $odmediaid=$vendor->OD_Media_ID;
        // dd($odmediaid);
        $sole=DB::table('sole_medias_address')->where('Sole_Media_ID',$odmediaid)->get();
        // dd($sole);
        $work=DB::table('od_media_work_done')->where('OD_Media_ID',$odmediaid)->get();
        // dd($work);

        $states=DB::table('state')->get();

        $where=array('OD_Media_ID'=>$odmediaid,"Owner_ID"=>$owner->Owner_ID);
        $detail=DB::table('od_media_owner_detail')->where($where)->first();
        if(!empty($detail))
        {
          return view('user',compact('states','owner','vendor','sole','work'));  
        }
        else
        {
            return view('user',compact('states'));
        }
        
    }

    public function getDistrict(Request $request)
    {
        $state_id=$request->id;
        $data=DB::table('city')->where('state_id',$state_id)->get();
        foreach($data as $dt)
        {
            echo "<option>".$dt->city_name."</option>";
        }
    }

    public function owner_insert(Request $request)
    {
        $owner_id=DB::table('owner')->select('Owner_ID')->orderBy('Owner_ID','desc')->first();
        if(empty($owner_id))
        {
            $owner_id='OWN100';
        }
        else
        {
            $owner_id=$owner_id->Owner_ID;
            $owner_id++;
        }
        $check_owner=DB::table('owner')->where('Email_ID',$request->email_owner)->first();
        if(empty($check_owner))
        {
            $data=array(
            "Owner_ID"=>$owner_id,
            "Owner_Name"=>$request->owner_name ?? '',
            "Email_ID"=>$request->email_owner ?? '',
            "Mobile_No_"=>$request->mobile_owner ?? '',
            "Address_1"=>$request->address_owner ?? '',
            "State"=>$request->state_owner ?? '',
            "District"=>$request->district_owner ?? '',
            "City"=>$request->city ?? '',
            "Phone_No_"=>$request->phone ?? '',
            "Fax_No_"=>$request->fax_no ?? '',
            );
            $sql=DB::table('owner')->insert($data);
            $msg="Owner Data Saved !";
        }
        else
        {
            $data=array(
            "Owner_Name"=>$request->owner_name ?? '',
            "Mobile_No_"=>$request->mobile_owner ?? '',
            "Address_1"=>$request->address_owner ?? '',
            "State"=>$request->state_owner ?? '',
            "District"=>$request->district_owner ?? '',
            "City"=>$request->city ?? '',
            "Phone_No_"=>$request->phone ?? '',
            "Fax_No_"=>$request->fax_no ?? '',
            );
            $sql=DB::table('owner')->where('Email_ID',$request->email_owner)->update($data);
            $msg="Owner Update Success";
        }

            return ["message"=>$msg,"Owner ID"=>$owner_id];
    }


    //for tab2 tab3 tab4
    public function vendorInsert(Request $request)
    {
        // $userID="US01";
        $userID=Session::get('userID');
        $checkdata=DB::table('vendor_emp_od_media')->where('User_ID',$userID)->first();
        if(empty($checkdata))
        {
            return DB::transaction(function() use($request){

                $ODMdiaID=DB::table('vendor_emp_od_media')->select('OD_Media_ID')->orderBy('v_id','desc')->first();
                if(empty($ODMdiaID))
                {
                    $od_mediaID='ODM100';
                }
                else
                {
                    $od_mediaID=$ODMdiaID->OD_Media_ID;
                    $od_mediaID++;
                }

                // $userID="US01";
                $userID=Session::get('userID');


                $vendor_data=array(
                    "OD_Media_ID"=>$od_mediaID,
                    "HO_Address"=>$request->HO_Address ?? '',
                    "HO_Landline_No_"=>$request->HO_Landline_No ?? '',
                    "GST_No_"=>$request->GST_No ?? '',
                    "TIN_TAN_VAT_No_"=>$request->TIN_TAN_VAT_No ?? '',
                    "Other_Relevant_Information"=>$request->Other_Relevant_Information ?? '',
                    "User_ID"=>$userID
                );
                $vendorInsert=DB::table('vendor_emp_od_media')->insert($vendor_data);


                //media address
                foreach($request->MA_State as $key =>$ma_state)
                {
                    $mediadata=array(
                        "Sole_Media_ID"=>$od_mediaID,
                        "State"=>$ma_state,
                        "District"=>$request->MA_District[$key],
                        "City"=>$request->MA_City[$key]
                    );
                    DB::table('sole_medias_address')->insert($mediadata);
                }

                //work done
                foreach($request->ODMFO_Year as $key =>$year)
                {
                    if(!empty($request->file('ODMFO_Upload_Document')[$key]))
                    {
                        if($request->hasfile('ODMFO_Upload_Document'))
                        {
                            $file=$request->file('ODMFO_Upload_Document')[$key];
                            $filename=time().$file->getClientOriginalName();
                            $file->move('img',$filename);
                        } 
                    }
                    else
                    {
                        $filename=$request->ODMFO_Upload_Document_[$key];
                    }
                    

                    DB::table('od_media_work_done')->insert([
                        "OD_Media_ID"=>$od_mediaID,
                        "Year"=>$year,
                        "File_Name"=>$filename
                    ]);
                }

                //detail table
                $ownerID=DB::table('owner')->select('Owner_ID')->where('Email_ID',$request->email_owner)->first();

                DB::table('od_media_owner_detail')->insert([
                    "OD_Media_Type"=>0,
                    "OD_Media_ID"=>$od_mediaID,
                    "Owner_ID"=>$ownerID->Owner_ID
                ]);
            });//transaction close
        }
        else
        {
            // dd("update");
            return DB::transaction(function() use($request){

                $userID=Session::get('userID');
                $vendor=DB::table('vendor_emp_od_media')->where('User_ID',$userID)->first();
                $od_mediaID=$vendor->OD_Media_ID;

                //last tab image
                $Legal_Doc_File_Name=$vendor->Legal_Doc_File_Name ?? '';
                if($request->hasfile('Legal_Doc_File_Name') || $request->hasfile('Legal_Doc_File_Name_modify'))
                {
                    $file=$request->file('Legal_Doc_File_Name') && $request->file('Legal_Doc_File_Name_modify');
                    $filename=time().$file->getClientOriginalName();
                    $file->move('img',$filename);
                    $Legal_Doc_File_Name=$filename;
                }
                

                $Photo_File_Name=$vendor->Photo_File_Name ?? '';
                if($request->hasfile('Photo_File_Name') || $request->hasfile('Photo_File_Name_modify'))
                {
                    $file=$request->file('Photo_File_Name') && $request->file('Photo_File_Name_modify');
                    $filename=time().$file->getClientOriginalName();
                    $file->move('img',$filename);
                    $Photo_File_Name=$filename;
                }
                


                $vendor_data=array(
                    "HO_Address"=>$request->HO_Address ?? '',
                    "HO_Landline_No_"=>$request->HO_Landline_No ?? '',
                    "GST_No_"=>$request->GST_No ?? '',
                    "TIN_TAN_VAT_No_"=>$request->TIN_TAN_VAT_No ?? '',
                    "Other_Relevant_Information"=>$request->Other_Relevant_Information ?? '',
                    "DD_No_"=>$request->DD_No ?? '',
                    "DD_Bank_Name"=>$request->DD_Bank_Name ?? '',
                    "DD_Bank_Branch_Name"=>$request->DD_Bank_Branch_Name ?? '',
                    "Legal_Doc_File_Name"=>$Legal_Doc_File_Name,
                    "Photo_File_Name"=>$Photo_File_Name,
                    "self_declaration"=>1
                );
                $vendorInsert=DB::table('vendor_emp_od_media')->where('OD_Media_ID',$od_mediaID)->update($vendor_data);


                
                //media address
                DB::table('sole_medias_address')->where('Sole_Media_ID',$od_mediaID)->delete();

                foreach($request->MA_State as $key =>$ma_state)
                {
                    $mediadata=array(
                        "Sole_Media_ID"=>$od_mediaID,
                        "State"=>$ma_state,
                        "District"=>$request->MA_District[$key],
                        "City"=>$request->MA_City[$key]
                    );
                    DB::table('sole_medias_address')->insert($mediadata);
                }

                //work done
                DB::table('od_media_work_done')->where('OD_Media_ID',$od_mediaID)->delete();
                foreach($request->ODMFO_Year as $key =>$year)
                {
                    if(!empty($request->file('ODMFO_Upload_Document')[$key]))
                    {
                        if($request->hasfile('ODMFO_Upload_Document'))
                        {
                            $file=$request->file('ODMFO_Upload_Document')[$key];
                            $filename=time().$file->getClientOriginalName();
                            $file->move('img',$filename);
                        } 
                    }
                    else
                    {
                        $filename=$request->ODMFO_Upload_Document_[$key];
                    }
                    

                    DB::table('od_media_work_done')->insert([
                        "OD_Media_ID"=>$od_mediaID,
                        "Year"=>$year,
                        "File_Name"=>$filename
                    ]);
                }

            });//transaction close
            return ["message"=>"Data Update Success"];
        }
    }
}
