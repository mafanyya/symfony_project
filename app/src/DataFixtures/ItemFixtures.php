<?php

namespace App\DataFixtures;

use App\Entity\Item;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ItemFixtures extends Fixture
{
  public function load(ObjectManager $manager): void
  {
    // $product = new Product();
    // $manager->persist($product);

    $item1 = new Item();
    $item1->setName('Lego Barn Tractor');
    $item1->setPrice(59.9);
    $item1->setDescription('There are farm buildings and a tractor, plus a pig, sheep, horse, dog, hen, rooster and cows to care for.');
    $item1->setImg('https://slimages.macysassets.com/is/image/MCY/products/0/optimized/19679220_fpx.tif');
    $manager->persist($item1);

    $item2 = new Item();
    $item2->setName('Dragon ball Super Dragon Stars  Action Figure');
    $item2->setPrice(29.99);
    $item2->setDescription('Welcome the fierce battles of dragon ball into your world with these superior 6.5" dragon stars figures. Finely crafted and intricately detailed with over 16 points of articulation.');
    $item2->setImg('https://slimages.macysassets.com/is/image/MCY/products/8/optimized/18313858_fpx.tif');
    $manager->persist($item2);

    $item3 = new Item();
    $item3->setName('Sharper Image Toy Rc Robotic Robotosaur Mini');
    $item3->setPrice(17.99);
    $item3->setDescription("Where technology meets fun your children will love the mini robot's cute size and easy-to-use.");
    $item3->setImg('https://slimages.macysassets.com/is/image/MCY/products/1/optimized/17379211_fpx.tif');
    $manager->persist($item3);

    $item4 = new Item();
    $item4->setName('Funko Pop Movies it Chapter 2 Collectors Set 2 - Shop Ceeper, Pennywise with Partial Make Up, Pennywise In Pinstripe Suit');
    $item4->setPrice(28.99);
    $item4->setDescription("Round out your collections with the beloved movie characters from the one and only it from pennywise to shop ceeper collect them all.");
    $item4->setImg('https://slimages.macysassets.com/is/image/MCY/products/9/optimized/17283619_fpx.tif');
    $manager->persist($item4);

    $item5 = new Item();
    $item5->setName('VTech Touch & Teach Sea Turtle');
    $item5->setPrice(18.99);
    $item5->setDescription("A holographic cover, bright colors and light-up buttons draw and hold your little one's attention on eight double-sided book pages.");
    $item5->setImg('https://slimages.macysassets.com/is/image/MCY/products/3/optimized/20475443_fpx.tif');
    $manager->persist($item5);
    //baby

    $item6 = new Item();
    $item6->setName('Lil Rider 4-in-1 Tricycle Stroller Multistage Convertible Trike');
    $item6->setPrice(79.99);
    $item6->setDescription("The 4-in-1 Tricycle Stroller by Lil' Rider grows with your child to keep them moving through their toddler years.");
    $item6->setImg('https://slimages.macysassets.com/is/image/MCY/products/5/optimized/14628675_fpx.tif');
    $manager->persist($item6);
    //bikes

    $item7 = new Item();
    $item7->setName('Barbie Pink Collection Doll');
    $item7->setPrice(84.99);
    $item7->setDescription("Barbie introduces a glamorous new collection celebrating elegant couture and runway-ready looks. This first doll in the series features exceptional fashion details, premium fabrics and display-ready packaging, ideal for collectors.");
    $item7->setImg('https://slimages.macysassets.com/is/image/MCY/products/8/optimized/18775298_fpx.tif');
    $manager->persist($item7);


    $item8 = new Item();
    $item8->setName('Monopoly Arcade Pacman');
    $item8->setPrice(25.99);
    $item8->setDescription("Gamers and fans of the original Pac-Man can relive some of their gaming experiences with this Pac-Man themed Monopoly game.");
    $item8->setImg('https://slimages.macysassets.com/is/image/MCY/products/2/optimized/18508392_fpx.tif');
    $manager->persist($item8);
    //puzzle

    $item9 = new Item();
    $item9->setName('Cra-z-Art Super Art Set, 250 Piece');
    $item9->setPrice(18.99);
    $item9->setDescription("Draw, paint, color and create with the CraZArt Creative Art Studio. This art set features a huge amount of quality art materials.");
    $item9->setImg('https://slimages.macysassets.com/is/image/MCY/products/6/optimized/11428676_fpx.tif');
    $manager->persist($item9);

    $item10 = new Item();
    $item10->setName('Junior Learning Math Learning Educational Board Games');
    $item10->setPrice(14.99);
    $item10->setDescription("Learn useful math skills while playing these fun board games with your friends. Topics include- addition, subtraction, double or half and place value.");
    $item10->setImg('https://slimages.macysassets.com/is/image/MCY/products/4/optimized/17284094_fpx.tif');
    $manager->persist($item10);
    //steam

    $item11 = new Item();
    $item11->setName('Banzai Wild Waves Water Park with Sprinkling Arch, Basketball hoop, and Ring Toss Game');
    $item11->setPrice(64.99);
    $item11->setDescription("Suit up for summer backyard fun. Make waves this summer with the wild wave water park.");
    $item11->setImg('https://slimages.macysassets.com/is/image/MCY/products/2/optimized/18313272_fpx.tif');
    $manager->persist($item11);
    //outdoor


    $item12 = new Item();
    $item12->setName('Gener8 Workbench and Tool Set');
    $item12->setPrice(41.99);
    $item12->setDescription("With loads of pretend tools and accessories, the workshop offers plenty of ways for aspiring builders to craft new creations after constructing the bench with the included tools and hardware. ");
    $item12->setImg('https://slimages.macysassets.com/is/image/MCY/products/9/optimized/17897929_fpx.tif');
    $manager->persist($item12);
    //pretend

    $item13 = new Item();
    $item13->setName('Discovery Kids Toy Rc Triceratops - Dinosaur Toy');
    $item13->setPrice(13.99);
    $item13->setDescription("Discovery Kids Rc Triceratops Figure, Led Infrared Remote Control, Built-In Speakers W/ Digital Sound Effects, Stands 10 Inches Long, Includes Glowing Eyes, Lifelike Motion, A Great Toy For Girls/Boys, Brown");
    $item13->setImg('https://slimages.macysassets.com/is/image/MCY/products/6/optimized/14586506_fpx.tif');
    $manager->persist($item13);
    //steam


    $item14 = new Item();
    $item14->setName('Mag-Genius Die Cast 15 Channel Rc Fully Functional Excavator Toy');
    $item14->setPrice(48.99);
    $item14->setDescription("Featuring life like interactive parts the big-daddy excavator is a great addition to any toy box.");
    $item14->setImg('https://slimages.macysassets.com/is/image/MCY/products/3/optimized/17615613_fpx.tif');
    $manager->persist($item14);
    //remote


    $item15 = new Item();
    $item15->setName('Marvel Legends Series J. Jonah Jameson');
    $item15->setPrice(17.99);
    $item15->setDescription("With the Marvel Legends Series, fan favorite Marvel Comic Universe and Marvel Cinematic Universe characters are designed with premium detail and articulation for posing and display in collections. From figures to vehicles to premium roleplay items");
    $item15->setImg('https://slimages.macysassets.com/is/image/MCY/products/2/optimized/20521472_fpx.tif');
    $manager->persist($item15);
    //action figures

    $item16 = new Item();
    $item16->setName('Kiddieland Delight and Discover Activity Table Toy');
    $item16->setPrice(44.99);
    $item16->setDescription("Your child can learn through play with interactive table packed with fun. Lively music and 10+ play activities with flashing lights and rewarding fun sounds. Drop-balls for surprise fun flashing colorful lights as they roll out of different exits.");
    $item16->setImg('https://slimages.macysassets.com/is/image/MCY/products/0/optimized/18312270_fpx.tif');
    $manager->persist($item16);
    //baby

    $item17 = new Item();
    $item17->setName('Blazin Wheels 12 Volt Motorcycle');
    $item17->setPrice(237.99);
    $item17->setDescription("Your little driver can ride in style with the 12V motorcycle battery operated ride on. When powering on, your youngster can hear the engine start up. Drives in forward and reverse.");
    $item17->setImg('https://slimages.macysassets.com/is/image/MCY/products/1/optimized/17379211_fpx.tif');
    $manager->persist($item17);

    $item18 = new Item();
    $item18->setName('Mega Construx 199 Piece Pokemon Build and Show Squirtle Building Set');
    $item18->setPrice(17.99);
    $item18->setDescription('Build even bigger battles with this Squirtle construction set. This Water-type Pokemon stands over 4" tall and can create a number of heroic stances when you pose it in different battle-ready positions.');
    $item18->setImg('https://slimages.macysassets.com/is/image/MCY/products/8/optimized/19873268_fpx.tif');
    $manager->persist($item18);
    //building

    $item19 = new Item();
    $item19->setName('Gener8 15" Hoppy Horse');
    $item19->setPrice(19.99);
    $item19->setDescription("Giddy up, hop-along-horse perfect for inside and outside play. 15 ball with easy grip handle in a plush fabric horse cover.");
    $item19->setImg('https://slimages.macysassets.com/is/image/MCY/products/4/optimized/17897944_fpx.tif');
    $manager->persist($item19);
    //dolls

    $item20 = new Item();
    $item20->setName('Wrebbit Harry Potter Daigon Alley Collection - Weasleys Wizard Wheezes Daily Prophet 3D Puzzle- 285 Pieces');
    $item20->setPrice(31.95);
    $item20->setDescription("Build your own replica of one of the most emblematic shops in Diagon Alley, Weasleys' Wizard Wheezes, and the headquarters of Britain's wizarding newspaper, the Daily Prophet. This 285-piece 3D puzzle is an integral part of the Diagon Alley Collection.");
    $item20->setImg('https://slimages.macysassets.com/is/image/MCY/products/6/optimized/17304276_fpx.tif');
    $manager->persist($item20);
    //puzzles

    $item21 = new Item();
    $item21->setName('Play-Doh Drill  Fill Dentist');
    $item21->setPrice(15.99);
    $item21->setDescription("Doctor, drill 'n fill that patient before he gets a toothache! Even if it can be a little scary to go to the dentist, kids can take control and play pretend dentist with this Play-Doh playset. ");
    $item21->setImg('https://slimages.macysassets.com/is/image/MCY/products/9/optimized/19001499_fpx.tif');
    $manager->persist($item21);
    //arts


    $item22 = new Item();
    $item22->setName('Toy Chef Childrens Toy Electric Guitar');
    $item22->setPrice(19.9);
    $item22->setDescription("Inspire your child to become a musician by introducing them to this fun toy. This toy guitar can help a child develop skills and ideas of how a true guitar works. ");
    $item22->setImg('https://slimages.macysassets.com/is/image/MCY/products/6/optimized/19282476_fpx.tif');
    $manager->persist($item22);
    //steam


    $item23 = new Item();
    $item23->setName('Franklin Sports Kids Mini Boxing Set - Future Champs');
    $item23->setPrice(34.99);
    $item23->setDescription("Give your aspiring Champ a boxing set just like the pros use. The Franklin Sports kids mini boxing set is made for little hands and is suitable for all ages. ");
    $item23->setImg('https://slimages.macysassets.com/is/image/MCY/products/3/optimized/16101553_fpx.tif');
    $manager->persist($item23);
    //outdoor

    $item24 = new Item();
    $item24->setName('Melissa and Doug Mickey Mouse Friends Soft & Cuddly Hand Puppets');
    $item24->setPrice(16.99);
    $item24->setDescription("Have lots of hands-on fun with Mickey and the gang with these super-soft hand puppets Puppet play is a wonderful way to connect with children and for them to express themselves in a safe and imaginative way. Let Mickey, Minnie, Donald, and Goofy help children act out scenes, tell stories, practice new words, and talk about emotions. These approximately 10-inch hand puppets, sized to fit both children and adults, are a playful way to build vocabulary, dexterity, creativity, and imagination");
    $item24->setImg('https://slimages.macysassets.com/is/image/MCY/products/1/optimized/14325521_fpx.tif');
    $manager->persist($item24);
    //baby

    $item25 = new Item();
    $item25->setName('Gener8 Wood Burning Set');
    $item25->setPrice(14.99);
    $item25->setDescription("A classic craft that includes new projects and updated patterns. Wood burning is the creative activity that is as popular now as it was a generation ago. T");
    $item25->setImg('https://slimages.macysassets.com/is/image/MCY/products/8/optimized/17897958_fpx.tif');
    $manager->persist($item25);
    //steam

    $manager->flush();
  }
}
