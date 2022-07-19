<?php

namespace App\Http\Controllers\Admin\ManagmentUser;

use App\Http\Controllers\Controller;
use App\Models\Admin\ManagmentUser\Module;
use App\Models\Admin\ManagmentUser\Pegawai;
use App\Models\Admin\ManagmentUser\Role;

class ModuleController extends Controller
{
    public function index()
    {
        $data['list_module'] = Module::withCount('role')->get();
        return view('admin.managment-user.module.index', $data);
    }
    public function create()
    {
        return  view('admin.managment-user.module.create');
    }
    public function store()
    {
        $module = new Module;
        $module->name = request('name');
        $module->app = request('app');
        $module->title = request('title');
        $module->subtitle = request('subtitle');
        $module->url = request('url');
        $module->color = request('color');
        $module->tag = request('tag');
        $module->menu = request('menu');
        $module->save();

        return redirect('admin/managment-user/module');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        $data['module'] = $module;
        $data['list_pegawai'] = Pegawai::all();
        return view('admin.managment-user.module.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        $data['module'] = $module;
        return view('admin.managment-user.module.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Module $module)
    {
        $module->name = request('name');
        $module->app = request('app');
        $module->title = request('title');
        $module->subtitle = request('subtitle');
        $module->url = request('url');
        $module->color = request('color');
        $module->tag = request('tag');
        $module->menu = request('menu');
        $module->save();

        return redirect('admin/managment-user/module');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteModule(Module $module)
    {
        $module->delete();
        
        return back();
    }

    public function addRole()
    {
        $role = new Role;
        $role->id_pegawai = request('id_pegawai');
        $role->id_module = request('id_module');
        $role->save();

        return back();
    }

    public function deleteRole(Role $role)
    {
        $role->delete();
        
        return back();
    }
}
