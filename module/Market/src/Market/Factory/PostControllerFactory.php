<?php
namespace Market\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Market\Controller\PostController;

class PostControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $controllerManager)
    {
        $serviceManager = $controllerManager->getServiceLocator();
        $categories = $serviceManager->get('categories');
        $postForm = $serviceManager->get('market-post-form');
        $listingsTable = $serviceManager->get('listings-table');
        $cities = $serviceManager->get('area-codes-table');

        $postController = new PostController();
        $postController->setCategories($categories);
        $postController->setPostForm($postForm);
        $postController->setListingsTable($listingsTable);
        $postController->setWorldCityAreaCodesTable($cities);

        return $postController;
    }

}
