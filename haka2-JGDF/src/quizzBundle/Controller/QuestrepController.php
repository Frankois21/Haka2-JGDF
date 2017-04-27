<?php

namespace quizzBundle\Controller;

use quizzBundle\Entity\Questrep;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Questrep controller.
 *
 * @Route("questrep")
 */
class QuestrepController extends Controller
{
    /**
     * Lists all questrep entities.
     *
     * @Route("/", name="questrep_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $questreps = $em->getRepository('quizzBundle:Questrep')->findAll();

        return $this->render('questrep/index.html.twig', array(
            'questreps' => $questreps,
        ));
    }

    /**
     * Creates a new questrep entity.
     *
     * @Route("/new", name="questrep_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $questrep = new Questrep();
        $form = $this->createForm('quizzBundle\Form\QuestrepType', $questrep);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($questrep);
            $em->flush();

            return $this->redirectToRoute('questrep_show', array('id' => $questrep->getId()));
        }

        return $this->render('questrep/new.html.twig', array(
            'questrep' => $questrep,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a questrep entity.
     *
     * @Route("/{id}", name="questrep_show")
     * @Method("GET")
     */
    public function showAction(Questrep $questrep)
    {
        $deleteForm = $this->createDeleteForm($questrep);

        return $this->render('questrep/show.html.twig', array(
            'questrep' => $questrep,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing questrep entity.
     *
     * @Route("/{id}/edit", name="questrep_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Questrep $questrep)
    {
        $deleteForm = $this->createDeleteForm($questrep);
        $editForm = $this->createForm('quizzBundle\Form\QuestrepType', $questrep);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('questrep_edit', array('id' => $questrep->getId()));
        }

        return $this->render('questrep/edit.html.twig', array(
            'questrep' => $questrep,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));

    }

    /**
     * Deletes a questrep entity.
     *
     * @Route("/{id}", name="questrep_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Questrep $questrep)
    {
        $form = $this->createDeleteForm($questrep);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($questrep);
            $em->flush();
        }

        return $this->redirectToRoute('questrep_index');
    }

    /**
     * Creates a form to delete a questrep entity.
     *
     * @param Questrep $questrep The questrep entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Questrep $questrep)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('questrep_delete', array('id' => $questrep->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
