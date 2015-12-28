<?php

namespace Market\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Class PostController
 */
class PostController extends AbstractActionController
{
    public $categories;

    /**
     * @param $categories
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    /**
     * @return array|ViewModel
     */
    public function indexAction()
    {
        return new ViewModel([
            'categories' => $this->categories,
        ]);
    }
} 