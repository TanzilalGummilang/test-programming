<?php

namespace TanzilalGummilang\AplikasiTransaksi\Service;

use TanzilalGummilang\AplikasiTransaksi\Repository\ItemRepository;


class ItemService
{
  public function __construct(private ItemRepository $itemRepository){}

  public function showAllItem()
  {
    return $this->playerRepository->showAll();
  }
}