<?php
namespace AssetLibrary\Model\Entity;

use Cake\ORM\Entity;
use Cake\Routing\Asset as CakeAsset;

class Asset extends Entity
{
    protected $_accessible = [
        '*' => true
    ];

    protected $_virtual = [
        'path',
        'url'
    ];

    protected function _getPath() {
        return "/assets/{$this->id}.{$this->extension}";
    }

    protected function _getUrl() {
        return CakeAsset::url($this->path, ['fullBase' => true]);
    }
}
