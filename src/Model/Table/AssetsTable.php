<?php
namespace AssetLibrary\Model\Table;

use Cake\ORM\Table;

class AssetsTable extends Table
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
    }
}
