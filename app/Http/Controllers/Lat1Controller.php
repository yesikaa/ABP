<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
class Lat1Controller extends Controller
{
public function index()
{
$data["nama"] = "Farrel";
$data["asal"] = "Jakarta";
return view('v_latihan1', $data);
}


public function method2()
{
$data['title'] = "Daftar Mahasiswa";
$data['daf_mhs'] = array(
array("nama" => "Farrel", "asal" => "Jakarta"), array("nama" => "Akmal", "asal" => "Jakarta"), array("nama" => "DOni", "asal" => "Surabaya")
);
return view('v_latihan2', $data);
}
}
