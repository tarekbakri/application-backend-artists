<?php
/**
 * Created by PhpStorm.
 * User: tarek
 * Date: 02.01.19
 * Time: 17:50
 */

namespace App\DataFixtures;


use App\Entity\Artist;
use App\Utils\TokenGenerator;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ArtistFixtures extends Fixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        //Create Artiste 1 Radiohead

        $exist = false;

        while ($exist == false) {
            $tokenGenerator = new TokenGenerator();
            $token = $tokenGenerator->generate(6);
            $tokenExist = $manager->getRepository(Artist::class)->findBy(['token' => $token]);
            if (!$tokenExist)
                $exist = true;
        }
        $artist = new Artist();
        $artist->setName('Radiohead');
        $artist->setToken($token);

        $manager->persist($artist);

        //Create Artiste 2
        $exist = false;

        while ($exist == false) {
            $tokenGenerator = new TokenGenerator();
            $token = $tokenGenerator->generate(6);
            $tokenExist = $manager->getRepository(Artist::class)->findBy(['token' => $token]);
            if (!$tokenExist)
                $exist = true;
        }

        $artist = new Artist();
        $artist->setName('Portishead');
        $artist->setToken($token);

        $manager->persist($artist);

        $manager->flush();

    }
}