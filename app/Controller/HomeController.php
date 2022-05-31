<?php

namespace TanzilalGummilang\AplikasiTransaksi\Controller;

use TanzilalGummilang\AplikasiTransaksi\App\View;


class HomeController
{
  public function index()
  {
    View::render('Home/index', [
      "title" => "Aplikasi Transaksi"
    ]);
  }
}