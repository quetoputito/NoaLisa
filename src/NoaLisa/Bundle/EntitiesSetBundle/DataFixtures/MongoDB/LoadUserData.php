<?php 

namespace NoaLisa\Bundle\EntitiesSetBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use NoaLisa\Bundle\EntitiesSetBundle\Document;

class LoadUserData implements FixtureInterface
{
    public function load($manager)
    {
        $accomodation_type = new AccomodationType();
        $accomodation_type->setName('Maison');
        $accomodation_type->setName('Maison de ville');
        $accomodation_type->setName('Châlet');
        $accomodation_type->setName('Château');
        $accomodation_type->setName('Bateau');
        $accomodation_type->setName('Roulotte');
        $accomodation_type->setName('Chambre');
        $manager->persist($accomodation_type);
        $manager->flush();
       
        $activities = new Activities();
        $activities->setName('Piscine');
        $activities->setName('Sauna');
        $activities->setName('Jacuzzi');
        $activities->setName('VTT');
        $manager->persist($activities);
        $manager->flush();
        
        $entity_set_type = new EntitySetType();
        $entity_set_type->setName('Hôtel');
        $entity_set_type->setName("Maison d'hôte");
        $entity_set_type->setName('Location(s) saisonnière(s)');
        $entity_set_type->setName('Gîte(s)');
        $manager->persist($entity_set_type);
        $manager->flush();
        
        $views = new Views();
        $views->setName('Mer');
        $views->setName("Lac/Plan d'eau");
        $views->setName('Montagne');
        $views->setName('Campagne');
        $views->setName('Rue');
        $views->setName('Jardin');
        $views->setName('Ville');
        $views->setName('Indifférente');
        $manager->persist($views);
        $manager->flush();
        
        $services = new Services();
        $services->setName('repassage');
        $services->setName("garde d'enfant");
        $services->setName('Parking');
        $services->setName('Prêt de véhicule');
        $services->setName('Transport à la gare/aéroport');
        $manager->persist($services);
        $manager->flush();
        
        $languages = new Languages();
        $languages->setName('Français');
        $languages->setName('Anglais');
        $languages->setName('Allemand');
        $languages->setName('Espagnol');
        $languages->setName('Italien');
        $languages->setName('Russe');
        $languages->setName('Hollandais');
        $languages->setName('Danois');
        $languages->setName('Norvégien');
        $languages->setName('Finnois');
        $languages->setName('Mandarin');
        $languages->setName('Japonais');
        $manager->persist($languages);
        $manager->flush();
        
        $paiement_methods = new PaiementMethods();
        $paiement_methods->setName('Chèque');
        $paiement_methods->setName('Espèce');
        $paiement_methods->setName('Carte Bleue');
        $paiement_methods->setName('Virement bancaire');
        $paiement_methods->setName('Paypal');        
        $manager->persist($paiement_methods);
        $manager->flush();
        
        $themes = new Themes();
        $themes->setName('Sans thème');
        $manager->persist($themes);
        $manager->flush();
	}
}