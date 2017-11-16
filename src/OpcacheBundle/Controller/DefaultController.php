<?php

namespace OpcacheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OpcacheBundle\Entity\OpCacheDataModel;

class DefaultController extends Controller
{
    /**
     * @Route("/opcache")
     */
    public function indexAction()
    {
        $templateVars = [
    		'dataModel' => new OpCacheDataModel(),
            'reset' => opcache_reset()
    	];

        return $this->render('OpcacheBundle:Default:index.html.twig', $templateVars);
    }
}
