<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
   public function contacte($id){
   	$arr=Array('id' =>$id ,'Nom'=> 'Mansour','Prénom'=>'Abdessalem' );
   	return view('admin.contacte',$arr);
   }
}
