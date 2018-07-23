<?php

namespace TaobaoCrawler;

abstract class AbstractItem
{
    protected $id;

    protected function __construct($id)
    {
        $this->id = $id;
    }

    protected abstract function crawl();

    public function getId()
    {
        return $this->id;
    }

    public static function create($id)
    {
        $item = new static($id);
        $item->crawl();
        return $item;
    }

    public abstract function getDesc();
}