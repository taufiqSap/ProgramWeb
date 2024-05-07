<?php 
if(session_status() === PHP_SESSION_NONE)
session_start();

if(!empty($_SESSION['level'])){
    require 'config/koneksi.php';
    require 'fungsi/pesan_kilat.php'

    include 'admin/template/header.php';
    if(!empty($_GET['page'])){
        include 'admin/module/'.$_GET['page']
    } else{
        include 'admin/template/home.php';
    }
} 