<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    function createChapter(Request $request){

        $request->validate([

            'title' => 'required',
//            'user_id' => 'required|exists|users,id',
//            'subject_id' => 'required|exists|subjects,id'
        ]);

         Chapter::create([

            'title' => $request->input('title'),
            'user_id' => $request->input('user_id'),
            'subject_id' => $request->input('subject_id')

        ]);

        return response()->json([

            "status" => "success",
            "message" => "Chapter added successfully!"
        ]);

    }

    public function updateChapter(Request $request){

        $chapter_id = $request->input('id');



        Chapter::where('id', $chapter_id )->update($request->input());

        return response()->json([

            "status" => "success",
            "message" => "Chapter title updated successfully!"

        ]);

    }
}
