<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
        public function viewData() 
        //    dd($data);  
        {
           $data = DB::table('students')->get();

            return view('pages.data_store',compact('data'));
        }





        public function addStudents(Request $request)
        {
            // dd($request->all());
            DB::table('students')->insert(
                [
                       "name" => $request->name,
                        "email" => $request->email,
                         "phone" => $request->phone,
                         "address" => $request->address,
                        "message" => $request->message,
                ]
            ); 
            return view('pages.data_store');
            }

            public function editStudent(Request $req, $id){
                     $data =   DB::table('students')->where('id',$id)->first();
                        
                   return view('pages.edit_student',compact('data') );
            }   

            public function updateStudent(Request $req, $id) {

                    $data = DB::table('students')->where('id',$id)
                    ->update(

                    [
                       "name" => $req->name,
                        "email" => $req->email,
                         "phone" => $req->phone,
                         "address" => $req->address,
                        "message" => $req->message,
                ]
                    );
                    // return view('pages.data_store', compact('data'));

                    return view(route('user.data')); 

            }
}
 