<?php
use CodeIgniter\Email\Email;
use CodeIgniter\Test\CIUnitTestCase;
use Config\Email as ConfigEmail;

/**
 * @internal
 */
class EmailTest extends CIUnitTestCase{
    public function testKirimEmail(){
        $email = new Email(new ConfigEmail());
        $email->setFrom('12210778@bsi.ac.id');
        $email->setTo('aditya.neo5@gmail.com');
        $email->setSubject('Testing Kirim Email');
        $email->setMessage('hallo selamat <b>bergabung</b>');

        $this->assertTrue($email->send() );
    }
}