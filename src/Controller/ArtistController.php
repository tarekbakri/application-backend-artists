<?php

namespace App\Controller;

use App\Entity\Artist;
use App\Entity\Song;
use App\Utils\TokenGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ArtistController extends AbstractController
{
    /**
     * @Route("/artists", name="artists")
     * Get All Artists
     */
    public function getArtists()
    {
        //Entity Manager
        $em = $this->getDoctrine()->getManager();
        // Select all Artists
        $artists = $em->getRepository(Artist::class)->getArtistAndAlbums();

        //Return the result with JSON
        $response = new JsonResponse();
        if ($artists)
            return $response->setData($artists);
        else
            return $response->setData(['no data available']);
    }

    /**
     * @Route("/artists/{token}", name="artist")
     * Get One Artist
     */
    public function getOneArtist($token)
    {
        //Entity Manager
        $em = $this->getDoctrine()->getManager();
        // Select the searched Artist
        $artist = $em->getRepository(Artist::class)->getOneArtistAndAlbums($token);
        //Return the result with JSON
        $response = new JsonResponse();

        if ($artist)
            return $response->setData($artist);
        else
            return $response->setData(['no data available']);
    }

}
