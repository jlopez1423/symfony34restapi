<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\Programmer;
use AppBundle\Controller\BaseController;
use AppBundle\Form\ProgrammerType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\VarDumper\VarDumper;

class ProgrammerController extends BaseController
{
    /**
     * @Route("/api/programmers")
     * @Method("POST")
     */
    public function newAction(Request $request)
    {
//        $body = $request->getContent();
        $data = json_decode($request->getContent(), true);

        $programmer = new Programmer();
        $form = $this->createForm(new ProgrammerType(), $programmer);
        @$form->submit($data);


        $programmer->setUser($this->findUserByUserName('weaverryan'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($programmer);
        $em->flush();

        $response = new Response('It worked. Believe me I\'m an API!', 201);
        $response->headers->set('Location', '/some/programmer/url');

        return $response;
    }
}