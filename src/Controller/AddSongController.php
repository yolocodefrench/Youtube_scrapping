<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\LienYoutubeType;
use App\Entity\LienYoutube;
use Symfony\Component\HttpFoundation\Request;

class AddSongController extends AbstractController
{
    /**
     * @Route("/addSong", name="addSong")
     */
    public function index(Request $request)
    {
        $lien = new LienYoutube();
        $form = $this->createForm(LienYoutubeType::class, $lien);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $lien = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($lien);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }
        return $this->render('addSong.html.twig', [
           'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/editSong/{id}", name="editSong")
     */
    public function edit(Request $request, $id)
    {
        $repository = $this->getDoctrine()->getRepository(LienYoutube::class);
        $lien = $repository->find($id);
        $form = $this->createForm(LienYoutubeType::class, $lien);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $lien = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($lien);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }
        return $this->render('addSong.html.twig', [
           'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/delete/{id}", name="deleteSong")
     */
    public function delete(Request $request, $id)
    {
        $repository = $this->getDoctrine()->getRepository(LienYoutube::class);
        $lien = $repository->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($lien);

        return $this->redirectToRoute('home');
    }
}
