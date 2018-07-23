<?php

use TaobaoCrawler\TaobaoItem;
use TaobaoCrawler\TianmaoItem;

require '../vendor/autoload.php';

$item = TaobaoItem::create('541108233471');

echo $item->getDesc();