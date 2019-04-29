<?php

namespace ServiceManagerTrait;

use RuntimeException;
use Zend\Mvc\Controller\AbstractController;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Trait ServiceManagerTrait
 * @package ServiceManagerTrait
 */
trait ServiceManagerTrait
{
    /**
     * @return ServiceLocatorInterface
     */
    protected function getServiceManager()
    {
        if (! $this instanceof AbstractController) {
            throw new RuntimeException('This trait is only useful in controllers');
        }

        return $this->getEvent()->getApplication()->getServiceManager();
    }
}
