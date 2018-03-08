<?php 
namespace tests;

use PHPUnit\Framework\TestCase;

define('PHPASS_HASH_STRENGTH', 8);
define('PHPASS_HASH_PORTABLE', false);

/**
*  Corresponding Class to test YourClass class
*
*  For each class in your library, there should be a corresponding Unit-Test for it
*  Unit-Tests should be as much as possible independent from other test going on.
*
*  @author yourname
*/
class PasswordHashTest extends TestCase{
	
  /**
  * Just check if the YourClass has no syntax error 
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
  public function testIsThereAnySyntaxError(){
	$var = new \Lerislentia\PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE );
	$this->assertTrue(is_object($var));
	unset($var);
  }
  
  /**
  * Just check if the YourClass has no syntax error 
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
  public function testget_random_bytes(){
    $var = new \Lerislentia\PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE );
    $count = 10;
	$this->assertTrue($var->get_random_bytes($count)!='');
	unset($var);
  }
  
  public function testsencode64(){
    $var = new \Lerislentia\PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE );
    $input = 'input';
    $count = 1;
    $this->assertTrue($var->encode64($input, $count)!='');
    unset($var);
  }

  public function testsgensalt_private(){
    $var = new \Lerislentia\PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE );
    $password = 'password';
    $setting = 'setting';
    $this->assertTrue($var->gensalt_private($password, $setting)!='');
    unset($var);
  }

  public function testscrypt_private(){
    $var = new \Lerislentia\PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE );
    $password = 'password';
    $setting = 'setting';
    $this->assertTrue($var->crypt_private($password, $setting)!='');
    unset($var);
  }

  public function testsget_random_bytes(){
    $var = new \Lerislentia\PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE );
    $count = 16;
    $this->assertTrue($var->get_random_bytes($count)!='');
    unset($var);
  }

  public function testsgensalt_blowfish(){
    $var = new \Lerislentia\PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE );
    $input = $var->get_random_bytes(16);
    $this->assertTrue($var->gensalt_blowfish($input)!='');
    unset($var);
  }
  
  public function testsHashPassword(){
    $var = new \Lerislentia\PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE );
    $passwrod = 'password';
    $this->assertTrue($var->HashPassword($passwrod)!='');
    unset($var);
  }

  
  public function testsCheckPassword(){
    $var = new \Lerislentia\PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE );
    $password = 'password';
    $stored_hash = $var->HashPassword($password);
    $this->assertTrue($var->CheckPassword($password, $stored_hash));
    unset($var);
  }

  


  

}