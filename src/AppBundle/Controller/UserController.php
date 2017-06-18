<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class UserController
 * @package AppBundle\Controller
 *
 * @Route("/user")
 */
class UserController extends Controller
{
    /**
     * @param User $user
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/view/{id}", name="user_view")
     */
    public function viewAction(User $user)
    {
        return $this->render('AppBundle:Resources:userView.html.twig', array('user' => $user));
    }

    public function profileAction()
    {

    }

    /**
     * @param User $user
     *
     * @Route("/like/{id}", name="user_like")
     */
    public function likeAction(User $user)
    {

    }

    public function sendMessage(User $user, $message)
    {

    }
}