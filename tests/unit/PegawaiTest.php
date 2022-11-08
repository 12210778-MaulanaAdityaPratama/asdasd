<?php  

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

/**
* @internal
*/
class PegawaiTest extends CIUnitTestCase{

	use FeatureTestTrait;

	public function testLogin(){
		$this->call('post', 'login',[
			'email' => 'fatimahsoim@gmail.com',
			'sandi' => '12345'
		])->assertStatus(200);
	}
	public function testCreateShowUpdateDelete(){
		$json = $this->call('post','Pegawai',[
			'nip' => '1321321',
			'nama_depan' => 'asdasd',
			'nama_belakang' => 'asd',
			'gelar_depan' => 'ad',
			'gelar_belakang' => 'asd',
			'gender' => 'P',
			'no_telpon' =>'656756756',
			'no_wa' => '56756765',
			'email' => 'asd@gmail.com',
			'bagian_id' => 2,
			'alamat' => 'asdsa',
			'kota' => 'sadas',
			'tgl_lahir' => '1996-12-13',
			'tempat_lahir' => 'sadad',
			'foto' => 'sadsad',
			'sandi' => '12345',
			'token_reset' => '21313'		
		])->getJSON();
		$js = json_decode($json, true);

		$this->assertTrue($js['id']>0);
		$this->call('get', "Pegawai/".$js['id'])
			 ->assertStatus(200);
	}
}