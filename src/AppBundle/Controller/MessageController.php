<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 18-06-17
 * Time: 21:15
 */

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Message;

/**
 * Class MessageController
 * @package AppBundle\Controller
 *
 * @Route("/message")
 */
class MessageController
{

    /**
     * @Route("/list", name="messages_list")
     */
    public function listAction()
    {

    }


    /**
     * @param Message $message
     *
     * @Route("/{id}", name="message_read")
     */
    public function readAction(Message $message)
    {

    }

    /**
     * @param Request $request
     *
     * @Route("/send/{id}", name="message_send")
     */
    public function sendAction(Request $request)
    {

    }
}