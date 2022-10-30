<?php

defined('BASEPATH') OR exit ("no direct access allowed");

class Web extends CI_Controller{
 function __construct(){
 parent::__construct();
 }
 public function index(){
    $data['judul'] = "Halaman About";
 $this->load->view('v_header',$data);
 $this->load->view('v_index',$data);
 $this->load->view('v_footer',$data);
 }
}