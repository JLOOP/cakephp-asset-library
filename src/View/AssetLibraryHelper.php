<?php
namespace AssetLibrary\View\Helper;

use Cake\View\Helper;

class AssetLibraryHelper extends Helper
{
    public $helpers = ['Form'];

    public function asset(string $associated)
    {
        return $this->Form->control($associated, ['type' => 'file']);
    }
}
