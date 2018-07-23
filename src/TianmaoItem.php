<?php

namespace TaobaoCrawler;

class TianmaoItem extends AbstractItem
{
    public $raw;

    protected function crawl()
    {
        $this->raw = file_get_contents("https://detail.tmall.com/item.htm?spm=a220o.1000855.1998025129.1.770524acrtyxEg&id={$this->id}");
    }

    use DescTrait;
}