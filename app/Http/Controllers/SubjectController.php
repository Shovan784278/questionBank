<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function CreateSubject(Request $request){

        $request->validate([
            'name' => 'required'
        ]);



        Subject::create([
            "user_id" => $request->input('id'),
            "name"=>$request->input('name')
        ]);

       return response()->json([
           "status"=>"Success",
           "message"=>"Subject created successfully"
       ]);
    }


    public function Update(Request $request){


        $subject_id = $request->input('id');

        Subject::where('id',$request->id)
            ->update($request->input());

        return response()->json([
            "status" => "Success",
            "message" => "Subject Updated Successfully"
        ]);
    }


    public function DeleteSubject(Request $request){

        $subject_id = $request->input('id');

        Subject::where('id', $subject_id)
            ->delete($request->input());

        return response()->json([
            "status" => "Deleted",
            "message" => "Subject Deleted Successfully"
        ]);

    }

    public function SubjectList(){

        return Subject::get();
    }
}
