<?php
namespace AssetLibrary\Model\Entity;

use Cake\ORM\Entity;

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
        return "/files/assets/{$this->id}.{$this->extension}";
    }

    protected function _getUrl() {
        return Cake\Routing\Asset::url($this->path, ['fullBase' => true]);
    }
}
