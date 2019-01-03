<?php
/**
 * Created by PhpStorm.
 * User: tarek
 * Date: 02.01.19
 * Time: 17:50
 */

namespace App\DataFixtures;


use App\Entity\Album;
use App\Entity\Artist;
use App\Utils\TokenGenerator;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class AlbumFixtures extends Fixture implements DependentFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {

        $exist = false;

        while ($exist == false) {
            $tokenGenerator = new TokenGenerator();
            $token = $tokenGenerator->generate(6);
            $tokenExist = $manager->getRepository(Artist::class)->findBy(['token' => $token]);
            if (!$tokenExist)
                $exist = true;
        }

       $album = new Album();
       $album->setTitle('The King of Limbs');
       $album->setCover('https://goo.gl/CsDNgQ');
       $album->setDescription('The King of Limbs is the eighth studio album by English rock band Radiohead, produced by Nigel Godrich. It was self-released on 18 February 2011 as a download in MP3 and WAV formats, followed by physical CD and 12" vinyl releases on 28 March, a wider digital release via AWAL, and a special "newspaper" edition on 9 May 2011. The physical editions were released through the band\'s Ticker Tape imprint on XL in the United Kingdom, TBD in the United States, and Hostess Entertainment in Japan.');
       $artiste = $manager->getRepository(Artist::class)->findOneBy(['name' => 'Radiohead']);
       $album->setArtist($artiste);
       $album->setToken($token);

       $manager->persist($album);

       //Create Album 2
        $exist = false;

        while ($exist == false) {
            $tokenGenerator = new TokenGenerator();
            $token = $tokenGenerator->generate(6);
            $tokenExist = $manager->getRepository(Artist::class)->findBy(['token' => $token]);
            if (!$tokenExist)
                $exist = true;
        }
       $album = new Album();
       $album->setTitle('OK Computer');
       $album->setCover('https://goo.gl/tJZYkB');
       $album->setDescription('OK Computer is the third studio album by the English alternative rock band Radiohead, released on 16 June 1997 on Parlophone in the United Kingdom and 1 July 1997 by Capitol Records in the United States. It marks a deliberate attempt by the band to move away from the introspective guitar-oriented sound of their previous album The Bends. Its layered sound and wide range of influences set it apart from many of the Britpop and alternative rock bands popular at the time and laid the groundwork for Radiohead\'s later, more experimental work.');
       $artiste = $manager->getRepository(Artist::class)->findOneBy(['name' => 'Radiohead']);
       $album->setArtist($artiste);
       $album->setToken($token);

       $manager->persist($album);

       //Album 3
       $album = new Album();
       $album->setTitle('Dummy');
       $album->setCover('https://goo.gl/evUdcY');
       $album->setDescription('OK Computer is the third studio album by the English alternative rock band Radiohead, released on 16 June 1997 on Parlophone in the United Kingdom and 1 July 1997 by Capitol Records in the United States. It marks a deliberate attempt by the band to move away from the introspective guitar-oriented sound of their previous album The Bends. Its layered sound and wide range of influences set it apart from many of the Britpop and alternative rock bands popular at the time and laid the groundwork for Radiohead\'s later, more experimental work.');
       $artiste = $manager->getRepository(Artist::class)->findOneBy(['name' => 'Portishead']);
       $album->setArtist($artiste);
       $album->setToken('ALYY03');

       $manager->persist($album);

       //Album 4
        $exist = false;

        while ($exist == false) {
            $tokenGenerator = new TokenGenerator();
            $token = $tokenGenerator->generate(6);
            $tokenExist = $manager->getRepository(Artist::class)->findBy(['token' => $token]);
            if (!$tokenExist)
                $exist = true;
        }
       $album = new Album();
       $album->setTitle('Third');
       $album->setCover('https://goo.gl/9fmjsi');
       $album->setDescription('Third is the third studio album by English musical group Portishead, released on 27 April 2008, on Island Records in the United Kingdom, two days after on Mercury Records in the United States, and on 30 April 2008 on Universal Music Japan in Japan. It is their first release in 10 years, and their first studio album in eleven years. Third entered the UK Album Chart at #2, and became the band\'s first-ever American Top 10 album on the Billboard 200, reaching #7 in its entry week.');
       $artiste = $manager->getRepository(Artist::class)->findOneBy(['name' => 'Radiohead']);
       $album->setArtist($artiste);
       $album->setToken($token);

       $manager->persist($album);
       $manager->flush();

    }

    public function getDependencies()
    {
        return array(
            ArtistFixtures::class,
        );
    }
}