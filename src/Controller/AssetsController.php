<?php
namespace AssetLibrary\Controller;

use AssetLibrary\Controller\AppController;
use Cake\Http\Exception\BadRequestException;

class AssetsController extends AppController
{
    public function index()
    {
        echo 'test';
        die;
    }

    public function upload()
    {
        $this->request->allowMethod(['post']);
        $file = $this->request->getData('file');
        if (!$file) {
            throw new BadRequestException('File Error');
        }
        $asset = $this->Assets->newEmptyEntity();
        $asset->filename = $file->getClientFilename();
        $asset->type = $file->getClientMediaType();
        $asset->size = $file->getSize();
        $asset->extension = pathinfo($asset->filename, PATHINFO_EXTENSION);
        if (!$this->Assets->save($asset)) {
            throw new BadRequestException('Save Error');
        }
        $file->moveTo(WWW_ROOT . $asset->path);
        $this->set('asset', $asset);
    }
}
