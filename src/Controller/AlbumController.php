<?php

namespace App\Controller;

use App\Entity\Album;
use JMS\Serializer\SerializerBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlbumController extends AbstractController
{
    /**
     * @Route("/albums/{token}", name="get_album")
     * Get One Album
     */
    public function getOneAlbum($token)
    {
        //Entity Manager
        $em = $this->getDoctrine()->getManager();
        // select the searched album
        $album = $em->getRepository(Album::class)->findOneBy(['token' => $token]);

        //Serialize the data
        $serializer = SerializerBuilder::create()->build();
        $jsonObject = $serializer->serialize($album, 'json');

        if ($album)
            return $response = new Response($jsonObject);
        else
            return $response = new JsonResponse(); $response->setData(['no data available']);
    }
}
