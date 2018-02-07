<?php

namespace SamKnows\Library;

use DI\ContainerBuilder;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Klein\Klein as KleinRouter;
use SamKnows\Http\Controllers\IndexController;

/**
 * Class Bootstrap
 * @package SamKnows
 */
class Bootstrap
{
    /**
     * @var ContainerBuilder
     */
    protected $diContainer;

    /**
     * @return bool
     */
    public function run() : bool
    {
        // Initialize the Di Container.
        $this->diContainer = new ContainerBuilder();

        $this->initDoctrine();
        $this->initRoutes();

        $this->diContainer->build();

        return true;
    }

    /**
     *
     */
    protected function initDoctrine()
    {
        $this->diContainer->addDefinitions([
           'EntityManager' => function () {
               $paths = array(__DIR__ . '/../app/Models');
               $isDevMode = getenv('APP_MODE') == 'dev';

               // The connection configuration.
               $dbParams = array(
                   'driver'   => getenv('DB_CONNECTION'),
                   'user'     => getenv('DB_USERNAME'),
                   'password' => getenv('DB_PASSWORD'),
                   'dbname'   => getenv('DB_DATABASE'),
               );

               $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
               $entityManager = EntityManager::create($dbParams, $config);

               return new $entityManager;
           }
        ]);
    }

    /**
     * @return Bootstrap
     */
    protected function initRoutes(): Bootstrap
    {
        $routes = require_once(__DIR__ . '/../Config/routes.php');
        $kleinRouter = new KleinRouter();

        foreach ($routes as $route) {
            foreach ($route['methods'] as $verb => $methods) {
                foreach ($methods as $endpoint => $action) {
                    if (substr($action, -6) !== 'Action') {
                        $action = $action . 'Action';
                    }

                    $controller = new $route['class'];
                    $kleinRouter->$verb($endpoint, function ($request, $response, $service, $app) use ($controller, $action) {
                        return $controller->$action($request, $response, $service, $app);
                    });
                }
            };
        }

        $kleinRouter->dispatch();

        return $this;
    }
}