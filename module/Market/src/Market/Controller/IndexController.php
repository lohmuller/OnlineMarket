<?php

namespace Market\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Class IndexController
 */
class IndexController extends AbstractActionController
{
    /**
     * index
     *
     * @return array|ViewModel
     */
    public function indexAction()
    {
        $messages = array();

        if($this->flashMessenger()->hasMessages()) {
            $messages = $this->flashMessenger()->getMessages();
        }
        return new ViewModel([
            'messages' => $messages,
        ]);
    }

    /**
     * foo
     *
     * @return array
     */
    public function fooAction()
    {
        return array();
    }
} 