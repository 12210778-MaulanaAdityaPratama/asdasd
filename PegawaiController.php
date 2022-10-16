<?php

namespace App\Controllers;

use Agoenxz21\Datatables\Datatable;
use App\Controllers\BaseController;
use App\Models\PegawaiModel;
use CodeIgniter\Email\Email;
use CodeIgniter\Exceptions\PageNotFoundException;
use Config\Email as ConfigEmail;

class PegawaiController extends BaseController
{
    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('sandi');

        $pegawai = (new PegawaiModel()) ->where('email',$email)->first();

        if($pegawai == null){
            return $this->response->setJSON(['message' => 'Email tidak terdaftar'])
                        ->setStatusCode(404);
        }
        $cekPassword = password_verify($password, $pegawai['sandi']);
        if($cekPassword == false){
            return $this->response->setJSON(['message'=>'Email dan sandi tidak cocok'])
                        ->setStatusCode(403);
        }
        $this->session->set('pegawai',$pegawai);
        return $this->response->setJSON(['message' =>"Selamat datang {$pegawai['nama']} "])
                    ->setStatusCode(200);
    }
    public function viewLogin(){
        return view('login');
    }
    public function lupaPassword(){
        $_email = $this->request->getPost('email');
        $pegawai = (new PegawaiModel())->where('email',$_email)->first();

        if($pegawai == null){
            return $this->response->setJSON(['message'=>'Email tidak terdaftar'])
                        ->setStatusCode(404);
        }
        $sandibaru = substr(md5(date('Y-m-dH:i:s')),5,5);
        $pegawai['sandi'] = password_hash($sandibaru, PASSWORD_BCRYPT);
        $r =(new PegawaiModel())->update($pegawai['id'], $pegawai);

        if($r == false){
            return $this->response->setJSON(['message' =>'Gagal merubah sandi'])
                        ->setStatusCode(502);
        }
        $email = new Email(new ConfigEmail());
        $email ->setFrom('12210778@ac.id', 'Sistem Informasi Sekolah');
        $email ->setTo($pegawai['email']);
        $email ->setSubject('Reset Sandi Pengguna');
        $email ->setMessage("hallo {$pegawai['nama']} telah meminta reset baru. reset baru kamu adalah <b>$sandibaru</b>");
        $r = $email->send();

        if($r == true){
            return $this->response->setJSON(['message'=>"sandi baru sudah di kirim ke alamat email $_email"])
                        ->setStatusCode(200);
        }else{
            return $this->response->setJSON(['message' =>"maaf ada kesalahan pengiriman email ke $_email"])
                        ->setStatusCode(500);
        }

    }
    public function viewLupaPassword(){
        return view('lupa_password');
    }
    public function logout(){
        $this->session->destroy();
        return redirect()->to('login');
    }
    public function index(){
        return view('Pegawai/table');
    }
    public function all(){
        $pm = new PegawaiModel();
        $pm->select('id,nip,nama_depan,nama_belakang,gelar_depan,gelar_belakang,gender,no_telpon,no_wa,email,bagian_id,alamat,kota,tgl_lahir,tempat_lahir,foto,token_reset');

        return(new Datatable($pm))
            ->setFieldFilter(['nip,nama_depan,nama_belakang,gelar_depan,gelar_belakang,gender,no_telpon,no_wa,email,alamat,kota,tgl_lahir,tempat_lahir,foto,token_reset'])
            ->draw();
    }
    public function show($id){
        $r = (new PegawaiModel())->where('id',$id)->first();
        if($r == null)throw PageNotFoundException::forPageNotFound();

        return $this->response->setJSON($r);
    }
    public function store(){
        $pm = new PegawaiModel();
        $sandi = $this->request->getVar('sandi');

        $id = $pm->insert([
            'nip' =>$this->request->getVar('nip'),
            'nama_depan' =>$this->request->getVar('nama_depan'),
            'nama_belakang' =>$this->request->getVar('nama_belakang'),
            'gelar_belakang' =>$this->request->getVar('gelar_belakang'),
            'gender' =>$this->request->getVar('gender'),
            'no_telpon' =>$this->request->getVar('no_telpon'),
            'no_wa' =>$this->request->getVar('no_wa'),
            'email' =>$this->request->getVar('email'),
            'bagian_id' =>$this->request->getVar('bagian_id'),
            'alamat' =>$this->request->getVar('alamat'),
            'kota' =>$this->request->getVar('kota'),
            'tgl_lahir' =>$this->request->getVar('tgl_lahir'),
            'tempat_lahir' =>$this->request->getVar('tempat_lahir'),
            'foto' =>$this->request->getVar('foto'),
            'sandi' =>password_hash($sandi, PASSWORD_BCRYPT),
        ]);
        return $this->response->setJSON(['id' => $id])
                    ->setStatusCode(intval($id) > 0 ? 200 : 406);
    }
}
