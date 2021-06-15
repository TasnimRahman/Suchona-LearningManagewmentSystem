<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user\UserForm;
use App\Enrollment;

class AdminController extends Controller
{

    function formData(){
        $data=UserForm::get();
        //dd($data);
        return view('layouts.admin.datalist',compact('data'));

        
        //return view('layouts.admin.datalist');
    }

    // public function formDataGet(){
    //     //$data=UserForm::get();
    //     //dd($data);


    //     //return view('layouts.admin.datalist',compact('$data'));
    // }
    //public function formSubmit(Request $req){

        //dd($req->all());
        // $user_info=new UserForm;
        // $user_info->first_name= $req->fname;
        // $user_info->last_name= $req->lname;
        // $user_info->save();

        // $results= $user_info->save();
        // if($results == true){
        //   echo 'Successfully Send';
        // }else{
        //     echo 'Fail to Send Data' ;
        // }

        //return redirect()->back();
        //return view('user.home');
    //}
    // public function formDataEdit($id){
    //     $application = UserForm::findOrFail($id);
    //     //dd($application);
    //     return view('layouts.admin.user_edit_form',compact('application')); 
    // }
    // public function formDataUpdate(Request $req, $id){
    //     $user_info = UserForm::findOrFail($id);

    //     //$user_info=new UserForm;
    //     $user_info->first_name= $req->fname;
    //     $user_info->last_name= $req->lname;
    //     $user_info->save();
    //     return redirect()->route('admin.data.list');
    //     //dd($req);
    //     //return view('layouts.admin.user_edit_form',compact('application')); 
    // }


    function index(){
        return view('layouts/admin/index');
    }
    function users(){
        return view('layouts/admin/users');
    }
    function blog(){
        return view('layouts/admin/blog');
    }
    function mail(){
        return view('layouts/admin/mail');
    }
    function slider(){
        return view('layouts/admin/slider');
    }
    function charts(){
        return view('layouts/admin/charts');
    }
    function table_basic(){
        return view('layouts/admin/table_basic');
    }
    function table_datatable(){
        $allEnroll = Enrollment::latest()->get();//->paginate(5);
        return view('layouts/admin/table_datatable',compact('allEnroll'));
    }
    function formsGeneral(){
        return view('layouts/admin/forms_general');
    }
    function formsSelect(){
        return view('layouts/admin/forms_select');
    }
    function formsValidation(){
        return view('layouts/admin/forms_validation');
    }
    function formsTextEditors(){
        return view('layouts/admin/forms_text_editors');
    }
    function formsMultipleFileUpload(){
        return view('layouts/admin/forms_multiple_file_upload');
    }
    function formsDateTime(){
        return view('layouts/admin/forms_date_time');
    }
    function formsColorPicker(){
        return view('layouts/admin/forms_color_picker');
    }
    function mediaFancybox(){
        return view('layouts/admin/media_fancybox');
    }
    function mediaMasonry(){
        return view('layouts/admin/media_masonry');
    }
    function pagePricingTable(){
        return view('layouts/admin/page_pricing_table');
    }
    function pageTimeline(){
        return view('layouts/admin/page_timeline');
    }
    
}
