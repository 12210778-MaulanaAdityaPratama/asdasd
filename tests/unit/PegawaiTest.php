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
		$json = $this->call('post','pegawai',[
			'nip' => '12344',
			'nama_depan' => 'fatimah',
			'nama_belakang' => 'soim',
			'gelar_depan' => 'ad',
			'gelar_belakang' => 'asd',
			'gender' => 'P',
			'no_telpon' =>'085738706898',
			'no_wa' => '086738917343',
			'email' => 'fatimahsoim@gmail.com',
			'bagian_id' => 1,
			'alamat' => 'asdsa',
			'kota' => 'sadas',
			'tgl_lahir' => '1996-12-13',
			'tempat_lahir' => 'sadad',
			'foto' => 'sadsad',
			'sandi' => '12345',
			'token_reset' => '12321'		
		])->getJSON();
		$js = json_decode($json, true);

		$this->assertTrue($js['id']>0);
		$this->call('get', "pegawai/".$js['id'])
			 ->assertStatus(200);
	}
}