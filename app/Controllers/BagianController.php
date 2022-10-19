<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Agoenxz21\Datatables\Datatable;
use App\Models\BagianModel;
use CodeIgniter\Exceptions\PageNotFoundException;
class BagianController extends BaseController
{
    public function index()
    {
        return view('Bagian/table');
    }
    public function all(){
        $pm = new BagianModel();
        $pm ->select('id,nama,fungsi,tugas_pokok');

        return (new Datatable($pm))
            ->setFieldFilter(['id','nama','fungsi','tugas_pokok'])
            ->draw();
    }
    public function show($id){
        $r = (new BagianModel())->where('id',$id)->first();
        if($r == null)throw PageNotFoundException::forPageNotFound();
}
}