<?php

namespace TanzilalGummilang\AplikasiTransaksi\Controller;
use TanzilalGummilang\AplikasiTransaksi\App\View;
use TanzilalGummilang\AplikasiTransaksi\Config\Database;
use TanzilalGummilang\AplikasiTransaksi\Repository\ItemRepository;
use TanzilalGummilang\AplikasiTransaksi\Service\ItemService;


class ItemController
{
  private ItemService $itemService;

  public function __construct()
  {
    $itemRepository = new ItemRepository(Database::getConnection());
    $this->itemService = new ItemService($itemRepository);
  }

  public function index()
  {
    $result = $this->itemService->showAllItem();

    View::render(
      'Item/index', [
        'title' => "Index",
        'item' => $result
      ]
    );
  }

  public function create()
  {

  }

  public function edit()
  {

  }

  public function delete()
  {

  }
}