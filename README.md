# zf3-service-manager-trait
A fast way to get the Zend Framework 3's service manager in controllers


## Install

`composer require -sdev andrebian/zf3-service-manager-trait`


## Usage

In a controller

```php
<?php 

namespace YourNamespace;

use ServiceManagerTrait\ServiceManagerTrait;

/**
* Class YourController
 * @package YourNamespace
 */
class YourController extends AbstractActionController
{
    use ServiceManagerTrait;
    
    public function someAction()
    {
        $serviceManager = $this->getServiceManager();
    }
}
```

## Contributions

You can open an [issue](https://github.com/andrebian/zf3-service-manager-trait/issues) or fork this repository, modify 
whatever you want and send a [Pull Request](https://github.com/andrebian/zf3-service-manager-trait/pulls).
