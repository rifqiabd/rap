<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Generate_majors extends PHPExcel{

	public function __construct()
	{
		parent::__construct();
	}
	function generate($no) {
		$jrs = array(
			'0'=>'NON JURUSAN',
			'1'=>'IPA',
			'2'=>'IPS',
			'3'=>'BAHASA',
			'4'=>'KEAGAMAAN'
		);
		return $jrs[$no];
	}
}

?>