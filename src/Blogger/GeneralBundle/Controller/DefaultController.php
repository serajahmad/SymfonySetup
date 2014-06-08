<?php

namespace Blogger\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="_index")
     * @Method({"GET"})
     * @Template()
     */
    public function indexAction()

    {
        return $this->render('BloggerGeneralBundle:Default:index.html.twig');
    }

     /**
     * @Route("contact", name="_contact")
     * @Method({"GET"})
     * @Template()
     */
    public function contactAction()

    {
        return $this->render('BloggerGeneralBundle:Default:contact.html.twig');
    }
}
