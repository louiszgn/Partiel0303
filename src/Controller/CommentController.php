<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
        /**
     * @Route("/comment", name="comment")
     */
    public function index(CommentRepository $commentRepository)
    {
        $comments = $commentRepository->findAll();

        return $this->render('comment/index.html.twig', [
            'comments' => 'CommentController',
        ]);
    }
    /**
     * @Route("/comment/new", name="comment_add")
     */
    public function add(Request $request, EntityManagerInterface $manager)
    {
        $comment = new Comment();

        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setRoles(ROLE_USER);
            $manager->persist($comment);
            $manager->flush();
            $this->addFlash('info', "Comment created");

        }

        return $this->render('comment/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/comment/edit/{id}", name="comment_edit")
     * @ParamConverter("comment", options={"id"="id"})
     */
    public function edit(Request $request, EntityManagerInterface $manager, Comment $comment)
    {
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($comment);
            $manager->flush();
            $this->addFlash('info', "Comment edited");
        }

        return $this->render('comment/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/comment/delete/{id}", name="comment_delete")
     * @ParamConverter("comment", options={"id"="id"})
     */
    public function delete(Request $request, EntityManagerInterface $manager, Comment $comment)
    {
        $manager->remove($comment);
        $manager->flush();
        $this->addFlash('info', "Comment deleted");

        return $this->redirectToRoute('comment');
    }
}
