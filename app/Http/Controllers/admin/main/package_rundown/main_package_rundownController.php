<?php

namespace App\Http\Controllers\admin\main\package_rundown;

use App\Http\Controllers\Controller;
use App\models;

class main_package_rundownController extends Controller
{
    protected $models;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }

    public function main_package_rundown(Request $data)
    {
        return view('admin.main.package_rundown.package_rundown', compact('data'));
    }
    public function main_package_rundown_save()
    {
        return ('b');
    }
    public function main_package_rundown_update()
    {
        return ('c');
    }
    public function main_package_rundown_delete()
    {
        return ('D');
    }
    public function main_package_rundown_datatable()
    {
        return ('e');
    }
}