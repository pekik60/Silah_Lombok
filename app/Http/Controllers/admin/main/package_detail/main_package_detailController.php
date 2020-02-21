<?php

namespace App\Http\Controllers\admin\main\package_detail;

use App\Http\Controllers\Controller;
use App\models;

class main_package_detailController extends Controller
{
    protected $models;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }

    public function main_package_detail(Request $data)
    {
        return view('admin.main.package_detail.package_detail', compact('data'));
    }
    public function main_package_detail_save()
    {
        return ('b');
    }
    public function main_package_detail_update()
    {
        return ('c');
    }
    public function main_package_detail_delete()
    {
        return ('D');
    }
    public function main_package_detail_datatable()
    {
        return ('e');
    }
}
