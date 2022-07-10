<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdminResource;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::all();
        return response([
            'total' => $admin->count(),
            'message' => 'Retrieved successfully',
            'data' => AdminResource::collection($admin)
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_admin' => 'required|max:100',
            'password' => 'required|min:6|confirmed',
        ]);
        if ($validator->fails()) {
            return response([
                'message' => $validator->errors(),
                'status' => 'Validation error'
            ]);
        }
        $admin = Admin::create($request->all());
        return response(['data' => new AdminResource($admin), 'message' => 'Admin has been created!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Admin::find($id);
        if ($admin != null) {
            return response(['project' => new AdminResource($admin), 'message' => 'Retrieved successfully'], 200);
        } else {
            return response(['message' => 'Data not found'], 403);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_admin' => 'required|max:100',
            'password' => 'required|min:6',
        ]);
        if ($validator->fails()) {
            return response([
                'error' => $validator->errors(),
                'status' => 'Validation error',
                'data'=>$request->nama_admin
            ]);
        }
        $admin = Admin::find($id);
        if ($admin != null) {
            $admin->update($request->all());
            return response(['data' => new AdminResource($admin), 'message' => 'Admin has been updated!'], 202);
        } else {
            return response(['message' => 'Admin not found'], 403);
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
        $admin = Admin::find($id);
        if ($admin != null) {
            $admin->delete();
            return response(['message' => 'Admin has been deleted!']);
        } else {
            return response(['message' => 'No Data Found!',], 403);
        }
    }
}
