<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController1 extends Controller
{
    public function add()
{
    return view('admin.profile.create');
}

public function create()
{
   

    return redirect('admin/profile/create')->with('message', 'プロフィール情報を作成しました');
}

public function edit()
{
    return view('admin.profile.edit');
}

public function update()
{
    

    return redirect('admin/profile/edit')->with('message', 'プロフィール情報を更新しました');
}

}
