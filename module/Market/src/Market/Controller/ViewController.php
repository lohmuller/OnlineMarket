<?php

namespace Market\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Class ViewController
 */
class ViewController extends AbstractActionController
{

    public function indexAction()
    {
        $categories = $this->params()->fromQuery('category');

        return new ViewModel([
            'category' => $categories
        ]);
    }

    public function itemAction()
    {
        $itemId = $this->params()->fromQuery('itemId');

        if(null === $itemId) {
            $this->flashMessenger()->addMessage('Item Not Found');
            return $this->redirect()->toRoute('market');
        }

        return new ViewModel([
            'itemId' => $itemId,
        ]);
    }
} 