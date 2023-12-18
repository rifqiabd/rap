<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Generate_tanggal extends PHPExcel{

	public function __construct()
	{
		parent::__construct();
	}
	function generate_dmy($tgl) {
		$hsl = explode("-",$tgl);
		$hsl = $hsl[2].$hsl[1].$hsl[0];
		return $hsl;
	}
	function generate_ymd($tgl){
		$hsl = explode("-",$tgl);
		$hsl = $hsl[0].$hsl[1].$hsl[1];
		return $hsl;
	}
	function generate_bulan($no){
		$bulan = array(
			'1'=> 'Januari',
			'2'=> 'Februari',
			'3'=>'Maret',
			'4'=>'April',
			'5'=>'Mei',
			'6'=>'Juni',
			'7'=>'Juli',
			'8'=>'Agustus',
			'9'=>'September',
			'10'=>'Oktober',
			'11'=>'November',
			'12'=>'Desember',
		);
		return $bulan[$no];
	}
}
?>