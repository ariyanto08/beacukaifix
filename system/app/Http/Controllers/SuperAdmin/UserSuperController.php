<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Admin;

class UserSuperController extends Controller{
    function index(){
        $data['list_admin'] = Admin::all();
        return view('content.super-admin.usersuper.index',$data);
    }
    function create(){
        return view('content.super-admin.usersuper.create');
    }
    function store(){
        $admin = new admin;
        $admin ->nip = request('nip');
        $admin ->nama = request('nama');
        $admin ->email = request('email');
        $admin ->password = bcrypt (request('password'));
        $admin->save();

        return redirect('master-data/usersuper')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(Admin $admin){
        $data['admin'] = $admin;
        return view('content.super-admin.usersuper.show',$data);
    }
    function edit(Admin $admin){
        $data['admin'] = $admin;
        return view('content.super-admin.usersuper.edit',$data);
    }
    function update(Admin $admin){
        $admin ->nip = request('nip');
        $admin ->nama = request('nama');
        $admin ->email = request('email');
        if(request('password')) $admin ->password = bcrypt (request('password'));
        $admin->save();

        return redirect('master-data/usersuper')->with('success', 'Data Behasil Diedit');
    }
    function destroy(Admin $admin){
        $admin->delete();

        return redirect('master-data/usersuper')->with('danger', 'Data Telah Dihapus');
    }

}
