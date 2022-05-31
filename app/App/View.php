<?php

namespace TanzilalGummilang\AplikasiTransaksi\App;


class View
{
  public static function render(string $view, $model)
  {
    require __DIR__ . '/../View/header.php';
    require __DIR__ . '/../View/' . $view . '.php';
    require __DIR__ . '/../View/footer.php';

    // parameter $model dipake utk View (co: utk title pada header)
  }

  public static function redirect(string $url)
  {
    header("Location: $url");
    if(getenv("mode") != "test"){
      exit;
    }
  }
}