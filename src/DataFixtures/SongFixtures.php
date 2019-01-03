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
use App\Entity\Song;
use App\Service\TimeConvertor;
use App\Utils\TokenGenerator;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class SongFixtures extends Fixture implements DependentFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        /*ALBUM The King of Limbs*/
        $album = $manager->getRepository(Album::class)->findOneBy(['title' => 'The King of Limbs']);
        //Create Song Bloom
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Bloom');
        $song->setLength($length->MinToSec('5:15'));
        $song->setAlbum($album);

        $manager->persist($song);
        //Create Song Morning Mr Magpie
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Morning Mr Magpie');
        $song->setLength($length->MinToSec('4:41'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Little by Little
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Little by Little');
        $song->setLength($length->MinToSec('4:27'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Feral
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Feral');
        $song->setLength($length->MinToSec('3:13'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Lotus Flower
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Lotus Flower');
        $song->setLength($length->MinToSec('5:01'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Codex
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Codex');
        $song->setLength($length->MinToSec('4:47'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Give Up the Ghost
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Give Up the Ghost');
        $song->setLength($length->MinToSec('4:50'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Separator
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Separator');
        $song->setLength($length->MinToSec('5:20'));
        $song->setAlbum($album);

        $manager->persist($song);

        /*ALBUM OK Computer*/
        $album = $manager->getRepository(Album::class)->findOneBy(['title' => 'OK Computer']);
        //Create Song Airbag
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Airbag');
        $song->setLength($length->MinToSec('4:44'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Paranoid Android
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Paranoid Android');
        $song->setLength($length->MinToSec('6:26'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Subterranean Homesick Alien
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Subterranean Homesick Alien');
        $song->setLength($length->MinToSec('4:27'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Exit Music (For a Film)
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Exit Music (For a Film)');
        $song->setLength($length->MinToSec('4:24'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Let Down
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Let Down');
        $song->setLength($length->MinToSec('4:59'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Karma Police"
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Karma Police"');
        $song->setLength($length->MinToSec('4:21'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Fitter Happier
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Fitter Happier');
        $song->setLength($length->MinToSec('1:57'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Electioneering
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Electioneering');
        $song->setLength($length->MinToSec('3:50'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Climbing Up the Walls
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Climbing Up the Walls');
        $song->setLength($length->MinToSec('4:45'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song No Surprises
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('No Surprises');
        $song->setLength($length->MinToSec('3:48'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Lucky
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Lucky');
        $song->setLength($length->MinToSec('4:19'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song The Tourist
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('The Tourist');
        $song->setLength($length->MinToSec('5:24'));
        $song->setAlbum($album);

        $manager->persist($song);

        /*ALBUM Dummy*/
        $album = $manager->getRepository(Album::class)->findOneBy(['title' => 'Dummy']);

        //Create Song Mysterons
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Mysterons');
        $song->setLength($length->MinToSec('5:02'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Sour Times
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Sour Times');
        $song->setLength($length->MinToSec('4:11'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Strangers
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Strangers');
        $song->setLength($length->MinToSec('3:55'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create It Could Be Sweet
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('It Could Be Sweet');
        $song->setLength($length->MinToSec('4:16'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Wandering Star
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Wandering Star');
        $song->setLength($length->MinToSec('4:16'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Wandering Star
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Strangers');
        $song->setLength($length->MinToSec('4:51'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Numb
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Numb');
        $song->setLength($length->MinToSec('3:54'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create It's a Fire
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle("It's a Fire");
        $song->setLength($length->MinToSec('3:49'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Roads
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle("Roads");
        $song->setLength($length->MinToSec('5:02'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Pedestal
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle("Pedestal");
        $song->setLength($length->MinToSec('3:39'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Biscuit
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle("Biscuit");
        $song->setLength($length->MinToSec('5:01'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Glory Box
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle("Glory Box");
        $song->setLength($length->MinToSec('5:06'));
        $song->setAlbum($album);

        $manager->persist($song);

        /*ALBUM Third*/
        $album = $manager->getRepository(Album::class)->findOneBy(['title' => 'Third']);

        //Create Song Silence
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Silence');
        $song->setLength($length->MinToSec('4:58'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Hunter
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Hunter');
        $song->setLength($length->MinToSec('3:57'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Nylon Smile
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Nylon Smile');
        $song->setLength($length->MinToSec('3:16'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song The Rip
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('The Rip');
        $song->setLength($length->MinToSec('4:29'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Plastic
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Plastic');
        $song->setLength($length->MinToSec('3:27'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song We Carry On
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('We Carry On');
        $song->setLength($length->MinToSec('6:27'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Silence
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Deep Water');
        $song->setLength($length->MinToSec('1:31'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Machine Gun
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Machine Gun');
        $song->setLength($length->MinToSec('4:43'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Small
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Small');
        $song->setLength($length->MinToSec('6:45'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Silence
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Silence');
        $song->setLength($length->MinToSec('4:58'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Magic Doors
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Magic Doors');
        $song->setLength($length->MinToSec('3:32'));
        $song->setAlbum($album);

        $manager->persist($song);

        //Create Song Threads
        $song = new Song();
        $length = new TimeConvertor();
        $song->setTitle('Threads');
        $song->setLength($length->MinToSec('5:45'));
        $song->setAlbum($album);

        $manager->persist($song);

        $manager->flush();

    }

    public function getDependencies()
    {
        return array(
            AlbumFixtures::class,
        );
    }
}