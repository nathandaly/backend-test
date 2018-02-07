<?php

namespace SamKnows\Http\Controllers;

use Doctrine\ORM\EntityManager;
use SamKnows\Library\BaseController;

class IndexController extends BaseController
{
    private $entityManager;

    public function __construct(EntityManager $entityManger)
    {
        $this->entityManager = $entityManger;
    }

    public function indexAction()
    {
        return 'Hey';
    }
}