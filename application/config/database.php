<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$active_group = "default";
$active_record = TRUE;

// modify by Didiek Suriadi
//t.me/didieksuriadi
//silahkan sesuaikan 3 baris konfig sesuai data anda

$db['default']['username'] = 'nama-user-database';
$db['default']['password'] = 'pass-database';
$db['default']['database'] = 'nama-database';

// konfigurasi jangan di ubah
$db['default']['hostname'] = "localhost";
$db['default']['dbdriver'] = 'mysqli';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = true;
$db['default']['db_debug'] = false;
$db['default']['cache_on'] = false;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = true;
$db['default']['stricton'] = false;


?>
