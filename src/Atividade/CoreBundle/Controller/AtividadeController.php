<?php

namespace Atividade\CoreBundle\Controller;

use Atividade\CoreBundle\Entity\Atividade;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Atividade controller.
 *
 * @Route("/")
 */
class AtividadeController extends Controller
{

    /**
     * @Route("/", name="index")
     * @Method("GET")
     */
    public function indexAction(Request $request, $list = null)
    {
        if($em = $this->getInstance()) {
            $list = $em->getRepository('AtividadeCoreBundle:Atividade')->findAll();
        }
        return $this->render('AtividadeCoreBundle:atividade:index.html.twig', array(
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
            $em = $this->getInstance();           
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
            
            $em = $this->getInstance(); 
            $arrayAtividade = $em->getRepository(Atividade::class)
                ->findById(['id' => $request->query->get('id')]);
            $atividade = array_shift($arrayAtividade);
            $em->remove($atividade);
            $em->flush();
        }

        return $this->redirectToRoute('index');
    }

    /**
     * @Route("/atividade/", name="atividade")
     * @Method({"GET", "POST"})
     */
    public function atividadeAction()
    {
        return $this->redirectToRoute('index');
    }

    public function getInstance()
    {
        try {          
          
            if (!$em = $this->getDoctrine()->getManager()){
                throw new \Exception();  
            }

            return $em;
            
        } catch(\Exception $e) {
            throw new NotFoundHttpException("Erro ao obter instancia da conexão.");
        }
    }
}
