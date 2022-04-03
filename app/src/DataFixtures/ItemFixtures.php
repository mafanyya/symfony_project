<?php

namespace App\DataFixtures;

use App\Entity\Age;
use App\Entity\Category;
use App\Entity\Item;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\DataFixtures\CategoryFixtures;

class ItemFixtures extends Fixture
{
  public function load(ObjectManager $manager): void
  {
    // $product = new Product();
    // $manager->persist($product);


      $action = new Category();
      $action->setName('Action figures');
      $manager->persist($action);

      $baby = new Category();
      $baby->setName('Baby and preschool toys');
      $manager->persist($baby);

      $bikes = new Category();
      $bikes->setName('Bikes and scooters');
      $manager->persist($bikes);

      $build = new Category();
      $build->setName('Building sets');
      $manager->persist($build);

      $dolls = new Category();
      $dolls->setName('Dolls and-stuffed animals');
      $manager->persist($dolls);

      $puzzles = new Category();
      $puzzles->setName('Games and puzzles');
      $manager->persist($puzzles);

      $arts = new Category();
      $arts->setName('Arts and crafts');
      $manager->persist($arts);

      $learning = new Category();
      $learning->setName('Learning');
      $manager->persist($learning);

      $outdoor = new Category();
      $outdoor->setName('Outdoor play');
      $manager->persist($outdoor);

      $pretend = new Category();
      $pretend->setName('Pretend play');
      $manager->persist($pretend);

      $steam = new Category();
      $steam->setName('Steam toys');
      $manager->persist($steam);

      $remote = new Category();
      $remote->setName('Remote control toys');
      $manager->persist($remote);

      $age1 = new Age();
      $age1->setName('0-2 years');
      $manager->persist($age1);

      $age2 = new Age();
      $age2->setName('3-4 years');
      $manager->persist($age2);

      $age3 = new Age();
      $age3->setName('5-7 years');
      $manager->persist($age3);

      $age4 = new Age();
      $age4->setName('8-10 years');
      $manager->persist($age4);

      $age5 = new Age();
      $age5->setName('11+ years');
      $manager->persist($age5);




    $item1 = new Item();
    $item1->setName('Lego Barn Tractor');
    $item1->setPrice(59.9);
    $item1->addCategory($build);
    $item1->setAge($age4);
    $item1->setDescription('There are farm buildings and a tractor, plus a pig, sheep, and cows to care for.');
    $item1->setImg('https://slimages.macysassets.com/is/image/MCY/products/0/optimized/19679220_fpx.tif');

    $manager->persist($item1);

    $item2 = new Item();
    $item2->setName('Dragon ball Super Dragon Stars  Action Figure');
    $item2->setPrice(29.99);
    $item2->addCategory($action);
    $item2->setAge($age5);
    $item2->setDescription('Welcome the fierce battles of dragon ball into your world with these superior 6.5" dragon stars figures. Finely crafted and intricately detailed with over 16 points of articulation.');
    $item2->setImg('https://slimages.macysassets.com/is/image/MCY/products/8/optimized/18313858_fpx.tif');
    $manager->persist($item2);

    $item3 = new Item();
    $item3->setName('Sharper Image Toy Rc Robotic Robotosaur Mini');
    $item3->setPrice(17.99);
    $item3->addCategory($remote);
    $item3->setAge($age3);
    $item3->setDescription("Where technology meets fun your children will love the mini robot's cute size and easy-to-use.");
    $item3->setImg('https://slimages.macysassets.com/is/image/MCY/products/1/optimized/17379211_fpx.tif');
    $manager->persist($item3);

    $item4 = new Item();
    $item4->setName('Funko Pop Movies it Chapter 2 Collectors Set 2');
    $item4->setPrice(28.99);
    $item4->addCategory($action);
    $item4->setAge($age5);
    $item4->setDescription("Round out your collections with the beloved movie characters from the one and only it from pennywise to shop ceeper collect them all.");
    $item4->setImg('https://slimages.macysassets.com/is/image/MCY/products/9/optimized/17283619_fpx.tif');
    $manager->persist($item4);

    $item5 = new Item();
    $item5->setName('VTech Touch & Teach Sea Turtle');
    $item5->setPrice(18.99);
    $item5->addCategory($baby);
    $item5->setAge($age1);
    $item5->setDescription("A holographic cover, bright colors and light-up buttons draw and hold your little one's attention on eight double-sided book pages.");
    $item5->setImg('https://slimages.macysassets.com/is/image/MCY/products/3/optimized/20475443_fpx.tif');
    $manager->persist($item5);
    //baby

    $item6 = new Item();
    $item6->setName('Lil Rider 4-in-1 Tricycle Stroller Multistage Convertible Trike');
    $item6->setPrice(79.99);
    $item6->addCategory($bikes);
    $item6->setAge($age2);
    $item6->setDescription("The 4-in-1 Tricycle Stroller by Lil' Rider grows with your child to keep them moving through their toddler years.");
    $item6->setImg('https://slimages.macysassets.com/is/image/MCY/products/5/optimized/14628675_fpx.tif');
    $manager->persist($item6);
    //bikes

    $item7 = new Item();
    $item7->setName('Barbie Pink Collection Doll');
    $item7->setPrice(84.99);
    $item7->addCategory($dolls);
    $item7->setAge($age4);
    $item7->setDescription("Barbie introduces a glamorous new collection celebrating elegant couture and runway-ready looks. This first doll in the series features exceptional fashion details, premium fabrics and display-ready packaging, ideal for collectors.");
    $item7->setImg('https://slimages.macysassets.com/is/image/MCY/products/8/optimized/18775298_fpx.tif');
    $manager->persist($item7);


    $item8 = new Item();
    $item8->setName('Monopoly Arcade Pacman');
    $item8->setPrice(25.99);
    $item8->addCategory($puzzles);
    $item8->setAge($age5);
    $item8->setDescription("Gamers and fans of the original Pac-Man can relive some of their gaming experiences with this Pac-Man themed Monopoly game.");
    $item8->setImg('https://slimages.macysassets.com/is/image/MCY/products/2/optimized/18508392_fpx.tif');
    $manager->persist($item8);
    //puzzle

    $item9 = new Item();
    $item9->setName('Cra-z-Art Super Art Set, 250 Piece');
    $item9->setPrice(18.99);
    $item9->addCategory($arts);
    $item9->setAge($age3);
    $item9->setDescription("Draw, paint, color and create with the CraZArt Creative Art Studio. This art set features a huge amount of quality art materials.");
    $item9->setImg('https://slimages.macysassets.com/is/image/MCY/products/6/optimized/11428676_fpx.tif');
    $manager->persist($item9);

    $item10 = new Item();
    $item10->setName('Junior Learning Math Learning Educational Board Games');
    $item10->setPrice(14.99);
    $item10->addCategory($steam);
    $item10->setAge($age3);
    $item10->setDescription("Learn useful math skills while playing these fun board games with your friends. Topics include- addition, subtraction, double or half and place value.");
    $item10->setImg('https://slimages.macysassets.com/is/image/MCY/products/4/optimized/17284094_fpx.tif');
    $manager->persist($item10);
    //steam

    $item11 = new Item();
    $item11->setName('Banzai Wild Waves Water Park with Sprinkling Arch and Ring Toss Game');
    $item11->setPrice(64.99);
    $item11->addCategory($outdoor);
    $item11->setAge($age2);
    $item11->setDescription("Suit up for summer backyard fun. Make waves this summer with the wild wave water park.");
    $item11->setImg('https://slimages.macysassets.com/is/image/MCY/products/2/optimized/18313272_fpx.tif');
    $manager->persist($item11);
    //outdoor


    $item12 = new Item();
    $item12->setName('Gener8 Workbench and Tool Set');
    $item12->setPrice(41.99);
    $item12->addCategory($pretend);
    $item12->setAge($age4);
    $item12->setDescription("With loads of pretend tools and accessories, the workshop offers plenty of ways for aspiring builders to craft new creations after constructing the bench with the included tools and hardware. ");
    $item12->setImg('https://slimages.macysassets.com/is/image/MCY/products/9/optimized/17897929_fpx.tif');
    $manager->persist($item12);
    //pretend

    $item13 = new Item();
    $item13->setName('Discovery Kids Toy Rc Triceratops - Dinosaur Toy');
    $item13->setPrice(13.99);
    $item13->addCategory($steam);
    $item13->setAge($age2);
    $item13->setDescription("Discovery Kids Rc Triceratops Figure, Led Infrared Remote Control, Built-In Speakers W/ Digital Sound Effects, Stands 10 Inches Long, Includes Glowing Eyes, Lifelike Motion, A Great Toy For Girls/Boys, Brown");
    $item13->setImg('https://slimages.macysassets.com/is/image/MCY/products/6/optimized/14586506_fpx.tif');
    $manager->persist($item13);
    //steam


    $item14 = new Item();
    $item14->setName('Mag-Genius Die Cast 15 Channel Rc Fully Functional Excavator Toy');
    $item14->setPrice(48.99);
    $item14->addCategory($remote);
    $item14->setAge($age4);
    $item14->setDescription("Featuring life like interactive parts the big-daddy excavator is a great addition to any toy box.");
    $item14->setImg('https://slimages.macysassets.com/is/image/MCY/products/3/optimized/17615613_fpx.tif');
    $manager->persist($item14);
    //remote


    $item15 = new Item();
    $item15->setName('Marvel Legends Series J. Jonah Jameson');
    $item15->setPrice(17.99);
    $item15->addCategory($action);
    $item15->setAge($age5);
    $item15->setDescription("With the Marvel Legends Series, fan favorite Marvel Comic Universe and Marvel Cinematic Universe characters are designed with premium detail and articulation for posing and display in collections. From figures to vehicles to premium roleplay items.");
    $item15->setImg('https://slimages.macysassets.com/is/image/MCY/products/2/optimized/20521472_fpx.tif');
    $manager->persist($item15);
    //action figures

    $item16 = new Item();
    $item16->setName('Kiddieland Delight and Discover Activity Table Toy');
    $item16->setPrice(44.99);
    $item16->addCategory($baby);
    $item16->setAge($age1);
    $item16->setDescription("Your child can learn through play with interactive table packed with fun. Lively music and 10+ play activities with flashing lights and rewarding fun sounds. Drop-balls for surprise fun flashing colorful lights as they roll out of different exits.");
    $item16->setImg('https://slimages.macysassets.com/is/image/MCY/products/0/optimized/18312270_fpx.tif');
    $manager->persist($item16);
    //baby

    $item17 = new Item();
    $item17->setName('Blazin Wheels 12 Volt Motorcycle');
    $item17->setPrice(237.99);
    $item17->addCategory($bikes);
    $item17->setAge($age2);
    $item17->setDescription("Your little driver can ride in style with the 12V motorcycle battery operated ride on. When powering on, your youngster can hear the engine start up. Drives in forward and reverse.");
    $item17->setImg('https://slimages.macysassets.com/is/image/MCY/products/1/optimized/17379211_fpx.tif');
    $manager->persist($item17);

    $item18 = new Item();
    $item18->setName('Mega Construx 199 Piece Pokemon Build  Building Set');
    $item18->setPrice(17.99);
    $item18->addCategory($build);
    $item18->setAge($age4);
    $item18->setDescription('Build even bigger battles with this Squirtle construction set. This Water-type Pokemon stands over 4" tall and can create a number of heroic stances when you pose it in different battle-ready positions.');
    $item18->setImg('https://slimages.macysassets.com/is/image/MCY/products/8/optimized/19873268_fpx.tif');
    $manager->persist($item18);
    //building

    $item19 = new Item();
    $item19->setName('Gener8 15" Hoppy Horse');
    $item19->setPrice(19.99);
    $item19->addCategory($dolls);
    $item19->setAge($age2);
    $item19->setDescription("Giddy up, hop-along-horse perfect for inside and outside play. 15 ball with easy grip handle in a plush fabric horse cover.");
    $item19->setImg('https://slimages.macysassets.com/is/image/MCY/products/4/optimized/17897944_fpx.tif');
    $manager->persist($item19);
    //dolls

    $item20 = new Item();
    $item20->setName('Wrebbit Harry Potter Daigon Alley Collection 3D Puzzle');
    $item20->setPrice(31.95);
    $item20->addCategory($puzzles);
    $item20->setAge($age4);
    $item20->setDescription("Build your own replica of one of the most emblematic shops in Diagon Alley, Weasleys' Wizard Wheezes, and the headquarters of Britain's wizarding newspaper, the Daily Prophet. This 285-piece 3D puzzle is an integral part of the Diagon Alley Collection.");
    $item20->setImg('https://slimages.macysassets.com/is/image/MCY/products/6/optimized/17304276_fpx.tif');
    $manager->persist($item20);
    //puzzles

    $item21 = new Item();
    $item21->setName('Play-Doh Drill  Fill Dentist');
    $item21->setPrice(15.99);
    $item21->addCategory($arts);
    $item21->setAge($age3);
    $item21->setDescription("Doctor, drill 'n fill that patient before he gets a toothache! Even if it can be a little scary to go to the dentist, kids can take control and play pretend dentist with this Play-Doh playset. ");
    $item21->setImg('https://slimages.macysassets.com/is/image/MCY/products/9/optimized/19001499_fpx.tif');
    $manager->persist($item21);
    //arts


    $item22 = new Item();
    $item22->setName('Toy Chef Childrens Toy Electric Guitar');
    $item22->setPrice(19.9);
    $item22->addCategory($steam);
    $item22->setAge($age4);
    $item22->setDescription("Inspire your child to become a musician by introducing them to this fun toy. This toy guitar can help a child develop skills and ideas of how a true guitar works. ");
    $item22->setImg('https://slimages.macysassets.com/is/image/MCY/products/6/optimized/19282476_fpx.tif');
    $manager->persist($item22);
    //steam


    $item23 = new Item();
    $item23->setName('Franklin Sports Kids Mini Boxing Set - Future Champs');
    $item23->setPrice(34.99);
    $item23->addCategory($outdoor);
    $item23->setAge($age2);
    $item23->setDescription("Give your aspiring Champ a boxing set just like the pros use. The Franklin Sports kids mini boxing set is made for little hands and is suitable for all ages. ");
    $item23->setImg('https://slimages.macysassets.com/is/image/MCY/products/3/optimized/16101553_fpx.tif');
    $manager->persist($item23);
    //outdoor

    $item24 = new Item();
    $item24->setName('Melissa and Doug Mickey Mouse Friends Hand Puppets');
    $item24->setPrice(16.99);
    $item24->addCategory($baby);
    $item24->setAge($age1);
    $item24->setDescription("Have lots of hands-on fun with Mickey and the gang with these super-soft hand puppets Puppet play is a wonderful way to connect with children and for them to express themselves in a safe and imaginative way.");
    $item24->setImg('https://slimages.macysassets.com/is/image/MCY/products/1/optimized/14325521_fpx.tif');
    $manager->persist($item24);
    //baby

    $item25 = new Item();
    $item25->setName('Gener8 Wood Burning Set');
    $item25->setPrice(14.99);
    $item25->addCategory($steam);
    $item25->setAge($age4);
    $item25->setDescription("A classic craft that includes new projects and updated patterns. Wood burning is the creative activity that is as popular now as it was a generation ago.");
    $item25->setImg('https://slimages.macysassets.com/is/image/MCY/products/8/optimized/17897958_fpx.tif');
    $manager->persist($item25);
    //steam

      $item26 = new Item();
      $item26->setName('Closeout! Beyblade Burst Surge Speedstorm Motor Strike Battle Set');
      $item26->setPrice(52.99);
      $item26->addCategory($remote);
      $item26->setAge($age4);
      $item26->setDescription("Supercharge the battle strategy with Beyblade Burst Speedstorm tech. Launch into a high-speed head to head in the official Beyblade Burst Speedstorm motor strike Beystadium by Hasbro, the first motorized Beystadium in the Beyblade Burst line.");
      $item26->setImg('https://slimages.macysassets.com/is/image/MCY/products/4/optimized/19793464_fpx.tif');
      $manager->persist($item26);


      $item27 = new Item();
      $item27->setName('Exquisite Gaming Cable Guy Controller and Phone Holder Classic Sega Sonic');
      $item27->setPrice(28.99);
      $item27->addCategory($action);
      $item27->setAge($age4);
      $item27->setDescription("Cable guy 100% official licensed collectable classic sega sonic the hedgehog functional figure standing 8 tall and coming with a 2m cable for charging your device, its the perfect squad mate for any bedroom, office or lounge.");
      $item27->setImg('https://slimages.macysassets.com/is/image/MCY/products/1/optimized/11428121_fpx.tif');
      $manager->persist($item27);

      $item28 = new Item();
      $item28->setName('Mag-Genius Magnet Tiles');
      $item28->setPrice(74.99);
      $item28->addCategory($build);
      $item28->setAge($age3);
      $item28->setDescription("Featuring 141 pieces and 3 buildable car bases, watch your little one have a blast building and playing with all sorts of magnetic structures all day long. ");
      $item28->setImg('https://slimages.macysassets.com/is/image/MCY/products/0/optimized/17615590_fpx.tif');
      $manager->persist($item28);

      $item29 = new Item();
      $item29->setName('Mattel Uno Triple Play');
      $item29->setPrice(21.99);
      $item29->addCategory($puzzles);
      $item29->setAge($age5);
      $item29->setDescription("The Uno triple play game is 3 times fun, with this unit that holds 3 discard piles, features exciting lights, sounds for suspense, surprise. Game play is like classic Uno, but players may only discard to any pile that are lit up on their turn. ");
      $item29->setImg('https://slimages.macysassets.com/is/image/MCY/products/7/optimized/19837877_fpx.tif');
      $manager->persist($item29);

      $item30 = new Item();
      $item30->setName('Kinetic Sand Sandisfactory Set');
      $item30->setPrice(15.99);
      $item30->addCategory($arts);
      $item30->setAge($age2);
      $item30->setDescription("Features over 10 molds and clear tools that let you see your mesmerizing effects as you create them. Includes black Kinetic Sand and 3 additional colours.");
      $item30->setImg('https://slimages.macysassets.com/is/image/MCY/products/5/optimized/20156035_fpx.tif');
      $manager->persist($item30);

      $item31 = new Item();
      $item31->setName('Boxed Figure: Kings Toys Joseph Stalin');
      $item31->setPrice(94.99);
      $item31->addCategory($action);
      $item31->setAge($age5);
      $item31->setDescription("King's Toys might be a new name to 1/6 fans, but they have been in the game behind the scenes for quite a while. They acted as a OEM for some of the biggest 1/6 scale companies and have now released their first figure on their own Joseph Uncle Joe Stalin.");
      $item31->setImg('https://cdn3.volusion.com/7aztx.j6veq/v/vspfiles/photos/KT0001-3.jpg?v-cache=1321084893');
      $manager->persist($item31);

      $item32 = new Item();
      $item32->setName('Discovery Kids Toy Tent Inflatable Dome');
      $item32->setPrice(24.99);
      $item32->addCategory($pretend);
      $item32->setAge($age3);
      $item32->setDescription("The Discovery play tent will fully inflate in under 30 seconds leaving more time for them to fully engage their imaginations. With no poles and no assembly required, clean up time is a breeze.");
      $item32->setImg('https://slimages.macysassets.com/is/image/MCY/products/6/optimized/20384926_fpx.tif');
      $manager->persist($item32);

      $item33 = new Item();
      $item33->setName('Glowing 3-d Solar System');
      $item33->setPrice(24.99);
      $item33->addCategory($learning);
      $item33->setAge($age5);
      $item33->setDescription("This kit is astronomical! Gleaming with glow-in-the-dark glimmer, it's a fun way to experience the wonders of science. Now you can hang the planets on your ceiling and recreate the captivating cosmos right in your room.");
      $item33->setImg('https://slimages.macysassets.com/is/image/MCY/products/2/optimized/11124992_fpx.tif');
      $manager->persist($item33);

      $item34 = new Item();
      $item34->setName('Metal Earth 3D Metal Model Kit - Harry Potter Gringotts Dragon');
      $item34->setPrice(14.95);
      $item34->addCategory($steam);
      $item34->setAge($age5);
      $item34->setDescription("Gringotts Dragon is a unique beautiful creature also known as the Ukrainian Ironbelly species.");
      $item34->setImg('https://slimages.macysassets.com/is/image/MCY/products/9/optimized/11410849_fpx.tif');
      $manager->persist($item34);

      $item35 = new Item();
      $item35->setName('Franklin Sports Go - Pro Basketball Hoop Set');
      $item35->setPrice(17.99);
      $item35->addCategory($outdoor);
      $item35->setAge($age4);
      $item35->setDescription("The set offers loads of fun for kids as they shoot at the over-the-door hoop with the 4 basketball included in the set Fitting over most doors, the game is the perfect addition to any bedroom, playroom, or even work office.");
      $item35->setImg('https://slimages.macysassets.com/is/image/MCY/products/7/optimized/11238057_fpx.tif');
      $manager->persist($item35);




      $manager->flush();
  }
}
