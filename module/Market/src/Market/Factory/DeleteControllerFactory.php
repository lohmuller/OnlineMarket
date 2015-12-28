<?php
namespace Market\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Market\Controller\DeleteController;

class DeleteControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $controllerManager)
    {
        $serviceManager = $controllerManager->getServiceLocator();
        $deleteForm = $serviceManager->get('market-delete-form');
        $listingsTable = $serviceManager->get('listings-table');

        $deleteController = new DeleteController();
        $deleteController ->setDeleteForm($deleteForm);
        $deleteController ->setListingsTable($listingsTable);

        return $deleteController ;
    }

}
