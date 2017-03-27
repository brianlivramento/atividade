<?php

namespace Atividade\CoreBundle\Controller;

use Atividade\CoreBundle\Entity\Atividade;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 * Atividade controller.
 *
 * @Route("/atividade")
 */
class AtividadeController extends Controller
{
    /**
     * @Route("/", name="index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        
        $atividade = new Atividade();
        
        $em = $this->getDoctrine()->getManager();
        $list = $em->getRepository('AtividadeCoreBundle:Atividade')->findAll();

        return $this->render('AtividadeCoreBundle:atividade:index.html.twig', array(
            'atividade' => $atividade,
            'atividades' => $list
        ));
    }

    /**
     * @Route("/new", name="add")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        
        if ($request->request->get('input-descricao')) {
            $em = $this->getDoctrine()->getManager();            
            $atividade = new Atividade();
            $atividade->setDescricao($request->request->get('input-descricao'));
            $em->persist($atividade);
            $em->flush($atividade);
        }

        return $this->redirectToRoute('index');
    }



    /**
     * @Route("/del", name="del")
     * @Method({"GET", "POST"})
     */
    public function deleteAction(Request $request)
    {
        if ($request->query->get('id')) {
            
            $em = $this->getDoctrine()->getManager();  
            $arrayAtividade = $em->getRepository(Atividade::class)
                ->findById(['id' => $request->query->get('id')]);
            $atividade = array_shift($arrayAtividade);
            $em->remove($atividade);
            $em->flush();
        }

        return $this->redirectToRoute('index');
    }


}
