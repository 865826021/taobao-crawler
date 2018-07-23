<?php

namespace TaobaoCrawler;

trait DescTrait
{
    public function getDescUrl()
    {
        $count = preg_match('/[\'"](\/\/dsc\.taobaocdn\.com\/.*?)[\'"]/', $this->raw, $matches);
        if ($count > 0) {
            return 'http:' . $matches[1];
        }
        return null;
    }

    public function getDesc()
    {
        $result = file_get_contents($this->getDescUrl());
        if($result === false) {
            return null;
        }
        $count = preg_match('/^var desc=\'(.*)\';$/ms', $result, $matches);
        if ($count > 0) {
            return $matches[1];
        }
        return null;
    }
}