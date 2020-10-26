<?php

namespace App\Http\Controllers;

use App\Model\Role;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Validator;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // if ($request->ajax()) {
        //     $data = Role::latest()->get();
        //     return Datatables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('action', function ($row) {
        //             $btn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
        //             return $btn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }

        return view('admin.role.index');
    }
    // return view('admin.role.index', ['data_role' => $data_role]);



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // untuk validasi form
        $this->validate($request, [
            'nama' => 'required',
            'keterangan' => 'required',

        ]);
        $role = new Role();
        $role->nama = $request->input('nama');
        $role->keterangan = $request->input('keterangan');

        $role->save();

        return view('admin.role.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        return $role;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {

        $role = Role::find($id);
        $role->nama = $request->input('name');
        $role->keterangan = $request->input('keterangan');

        $role->save();

        return redirect()->route('role.index')
            ->with('success', 'Data Berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::destroy($id);
    }

    public function apirole()
    {
        $role = Role::all();

        return DataTables::of($role)
            ->addIndexColumn()
            ->addColumn('action', function ($role) {
                return '<a href="#" type="button" class="btn mr-1 mb-1 btn-primary btn-sm waves-effect waves-light">Small</a>' .
                    '<a onclick="editForm(' . $role->id . ')" type="button"  class="btn mr-1 mb-1 btn-warning btn-sm waves-effect waves-light">edit</a>' .
                    '<a onclick="deleteData(' . $role->id . ')" type="button" class="btn mr-1 mb-1 btn-danger btn-sm waves-effect waves-light">Delete</a>';
            })->make(true);
    }
}
