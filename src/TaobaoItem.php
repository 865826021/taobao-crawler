<?php

namespace TaobaoCrawler;

class TaobaoItem extends AbstractItem
{
    public $raw;

    protected function crawl()
    {
        $this->raw = file_get_contents("https://item.taobao.com/item.htm?spm=a230r.1.14.76.3ee64882me8zsK&id={$this->id}");
    }

    use DescTrait;
}