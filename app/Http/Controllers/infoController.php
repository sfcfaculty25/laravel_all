<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pro;
use App\Models\product;
class infoController extends Controller
{
    
    public function index()
    {
        return view('firstpage');
    }
    public function select()
    {
        $data = pro::all();
        return view('select',compact('data'));
    }
    public function create()
    {
        return view('create');
    }
    public function insert(Request $req)
    { 
      $db = new pro();
      $db->pro_name = $req->pro_name;
        $db->save();
        return view('create');
      
    //    $fname= $req->fname;
    //    $lname = $req->lname;

    //    if($fname=="abc" && $lname=="123")
    //    {
    //     return redirect()->action([infoController::class, 'login']);
    //    }
    //    else
    //    {
    //     $msg="invalid";
    //    return view('create');
    //    }
    }

    
    public function login()
    {
        return view('login');
    }

    public function delete($id)
    {
    //    $del = pro::find($id);
    //    $del->delete();
    $del= pro::where('pro_id',$id)->delete(); 
        if($del)
       {
          // return redirect()->route('select');
           return redirect()->action([infoController::class, 'select']);
       }
    }

    public function update($id)
    {
   // $row = pro::find($id);
    $row= pro::where('pro_id',$id)->first();
    //return view("update",["row"=>$row]);
    return view("update",compact('row'));
    }

    public function savedata(Request $req,$id)
    {
     unset($req['_token']);
    pro::where('pro_id',$req->pro_id)->update($req->all());    
    return redirect()->action([infoController::class, 'select']);
    
    //$p->update($req->all());
   
// //    $id = $req->proid; 
//        $db->pro_id = $req->proid;

            // $db = new pro();    
            // $db->pro_name = $req->pro_name;
            // $db->update();

//          echo $db->pro_id;
//          echo $db->pro_name;
   
    //$p->update($req->all());
     

    //    $res= $db->update();
     
    //    if($res)
    //    {
    //     return redirect()->action([infoController::class, 'select']);
    //    }
    //    else
    //    {
    //        echo 'something went wrong';
    //    }

    }


}
