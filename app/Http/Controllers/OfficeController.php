<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class OfficeController extends Controller
{
    public function get(Office $office)
    {
        $data = $office->all();

        return response()->json([
            'message' => 'Success get data office',
            'errors' => '',
            'data' => $data
        ], 200);
    }

    public function create(Request $request, Office $office)
    {
        // validate data
        try {
            $data = $request->validate([
               'name' => 'required|max:255'
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Error',
                'errors' => $e->errors(),
                'data' => ''
            ], 400);
        }

        //insert data
        $office->create($data);

        return response()->json([
           'message' => 'Success create new office',
            'errors' => '',
            'data' => $office
        ], 200);

    }

    public function update(Request $request, Office $office)
    {
        // validate data
        try {
            $data = $request->validate([
                'name' => 'required|max:255'
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Error',
                'errors' => $e->errors(),
                'data' => ''
            ], 400);
        }

       //update data
        $office->update($data);

        return response()->json([
            'message' => 'Success update office',
            'errors' => '',
            'data' => $office
        ], 200);
    }

    public function delete(Office $office)
    {
        $office->delete();

        return response()->json([
            'message' => 'Success delete office',
            'errors' => '',
            'data' => $office
        ], 200);

    }
}
