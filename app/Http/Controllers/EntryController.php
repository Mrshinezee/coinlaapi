<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;
use Validator;

class EntryController extends Controller
{
    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'coin' => 'required',
            'type' => 'required',
            'exchange' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'date' => 'required|date_format:Y-m-d',
            'time' => 'required|date_format:H:i',
        ]);
        if ($validator->fails()) {
                    return response()->json(['error'=>$validator->errors()], 401);
        }
        $input = $request->all();
        $entry = Entry::create($input);
        return response()->json(['success'=>$entry], 200);

    }
}
