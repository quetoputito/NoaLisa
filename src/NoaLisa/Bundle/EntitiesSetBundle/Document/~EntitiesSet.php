<?php
namespace NoaLisa\Bundle\EntitiesSetBundle\Document;

class EntitiesSet{
	protected $id;
	protected $name;
	protected $address;
	protected $zip;
	protected $people_max_count;
	protected $total_bedrooms_count;
	protected $website;
	protected $access_desc;
	protected $personal_desc;
	protected $animals_ok;
	protected $shared_kitchen;
	protected $surface_garden;
	protected $disabled_person_ok;
	protected $babies_ok;
	protected $smokers_ok;
	protected $cat_on_site;
	protected $dog_on_site;
	protected $building_year;
	protected $paiement_advance;
	protected $seasoned_prices;
	protected $entities_at_same_price;
	protected $pictures_count;
	protected $forbid_allocation;
	protected $rentable_entities=array();
	protected $pictures=array();
	protected $entity_set_type;
	protected $included_services=array();
	protected $unincluded_services=array();
	protected $included_activities=array();
	protected $unincluded_activities=array();
	protected $themes=array();
	protected $paiement_methods=array();
    /**
     * @var boolean $paiement_advance_required
     */
    private $paiement_advance_required;

    public function __construct()
    {
        $this->rentable_entities = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pictures = new \Doctrine\Common\Collections\ArrayCollection();
        $this->themes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->paiement_methods = new \Doctrine\Common\Collections\ArrayCollection();
        $this->included_services = new \Doctrine\Common\Collections\ArrayCollection();
        $this->unincluded_services = new \Doctrine\Common\Collections\ArrayCollection();
        $this->included_activities = new \Doctrine\Common\Collections\ArrayCollection();
        $this->unincluded_activities = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Get address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zip
     *
     * @param string $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * Get zip
     *
     * @return string $zip
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set people_max_count
     *
     * @param int $peopleMaxCount
     */
    public function setPeopleMaxCount($peopleMaxCount)
    {
        $this->people_max_count = $peopleMaxCount;
    }

    /**
     * Get people_max_count
     *
     * @return int $peopleMaxCount
     */
    public function getPeopleMaxCount()
    {
        return $this->people_max_count;
    }

    /**
     * Set total_bedrooms_count
     *
     * @param int $totalBedroomsCount
     */
    public function setTotalBedroomsCount($totalBedroomsCount)
    {
        $this->total_bedrooms_count = $totalBedroomsCount;
    }

    /**
     * Get total_bedrooms_count
     *
     * @return int $totalBedroomsCount
     */
    public function getTotalBedroomsCount()
    {
        return $this->total_bedrooms_count;
    }

    /**
     * Set website
     *
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * Get website
     *
     * @return string $website
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set access_desc
     *
     * @param string $accessDesc
     */
    public function setAccessDesc($accessDesc)
    {
        $this->access_desc = $accessDesc;
    }

    /**
     * Get access_desc
     *
     * @return string $accessDesc
     */
    public function getAccessDesc()
    {
        return $this->access_desc;
    }

    /**
     * Set personal_desc
     *
     * @param string $personalDesc
     */
    public function setPersonalDesc($personalDesc)
    {
        $this->personal_desc = $personalDesc;
    }

    /**
     * Get personal_desc
     *
     * @return string $personalDesc
     */
    public function getPersonalDesc()
    {
        return $this->personal_desc;
    }

    /**
     * Set animals_ok
     *
     * @param boolean $animalsOk
     */
    public function setAnimalsOk($animalsOk)
    {
        $this->animals_ok = $animalsOk;
    }

    /**
     * Get animals_ok
     *
     * @return boolean $animalsOk
     */
    public function getAnimalsOk()
    {
        return $this->animals_ok;
    }

    /**
     * Set shared_kitchen
     *
     * @param boolean $sharedKitchen
     */
    public function setSharedKitchen($sharedKitchen)
    {
        $this->shared_kitchen = $sharedKitchen;
    }

    /**
     * Get shared_kitchen
     *
     * @return boolean $sharedKitchen
     */
    public function getSharedKitchen()
    {
        return $this->shared_kitchen;
    }

    /**
     * Set surface_garden
     *
     * @param int $surfaceGarden
     */
    public function setSurfaceGarden($surfaceGarden)
    {
        $this->surface_garden = $surfaceGarden;
    }

    /**
     * Get surface_garden
     *
     * @return int $surfaceGarden
     */
    public function getSurfaceGarden()
    {
        return $this->surface_garden;
    }

    /**
     * Set disabled_person_ok
     *
     * @param boolean $disabledPersonOk
     */
    public function setDisabledPersonOk($disabledPersonOk)
    {
        $this->disabled_person_ok = $disabledPersonOk;
    }

    /**
     * Get disabled_person_ok
     *
     * @return boolean $disabledPersonOk
     */
    public function getDisabledPersonOk()
    {
        return $this->disabled_person_ok;
    }

    /**
     * Set babies_ok
     *
     * @param boolean $babiesOk
     */
    public function setBabiesOk($babiesOk)
    {
        $this->babies_ok = $babiesOk;
    }

    /**
     * Get babies_ok
     *
     * @return boolean $babiesOk
     */
    public function getBabiesOk()
    {
        return $this->babies_ok;
    }

    /**
     * Set smokers_ok
     *
     * @param boolean $smokersOk
     */
    public function setSmokersOk($smokersOk)
    {
        $this->smokers_ok = $smokersOk;
    }

    /**
     * Get smokers_ok
     *
     * @return boolean $smokersOk
     */
    public function getSmokersOk()
    {
        return $this->smokers_ok;
    }

    /**
     * Set cat_on_site
     *
     * @param boolean $catOnSite
     */
    public function setCatOnSite($catOnSite)
    {
        $this->cat_on_site = $catOnSite;
    }

    /**
     * Get cat_on_site
     *
     * @return boolean $catOnSite
     */
    public function getCatOnSite()
    {
        return $this->cat_on_site;
    }

    /**
     * Set dog_on_site
     *
     * @param boolean $dogOnSite
     */
    public function setDogOnSite($dogOnSite)
    {
        $this->dog_on_site = $dogOnSite;
    }

    /**
     * Get dog_on_site
     *
     * @return boolean $dogOnSite
     */
    public function getDogOnSite()
    {
        return $this->dog_on_site;
    }

    /**
     * Set building_year
     *
     * @param int $buildingYear
     */
    public function setBuildingYear($buildingYear)
    {
        $this->building_year = $buildingYear;
    }

    /**
     * Get building_year
     *
     * @return int $buildingYear
     */
    public function getBuildingYear()
    {
        return $this->building_year;
    }

    /**
     * Set paiement_advance_required
     *
     * @param boolean $paiementAdvanceRequired
     */
    public function setPaiementAdvanceRequired($paiementAdvanceRequired)
    {
        $this->paiement_advance_required = $paiementAdvanceRequired;
    }

    /**
     * Get paiement_advance_required
     *
     * @return boolean $paiementAdvanceRequired
     */
    public function getPaiementAdvanceRequired()
    {
        return $this->paiement_advance_required;
    }

    /**
     * Set seasoned_prices
     *
     * @param boolean $seasonedPrices
     */
    public function setSeasonedPrices($seasonedPrices)
    {
        $this->seasoned_prices = $seasonedPrices;
    }

    /**
     * Get seasoned_prices
     *
     * @return boolean $seasonedPrices
     */
    public function getSeasonedPrices()
    {
        return $this->seasoned_prices;
    }

    /**
     * Set entities_at_same_price
     *
     * @param boolean $entitiesAtSamePrice
     */
    public function setEntitiesAtSamePrice($entitiesAtSamePrice)
    {
        $this->entities_at_same_price = $entitiesAtSamePrice;
    }

    /**
     * Get entities_at_same_price
     *
     * @return boolean $entitiesAtSamePrice
     */
    public function getEntitiesAtSamePrice()
    {
        return $this->entities_at_same_price;
    }

    /**
     * Set pictures_count
     *
     * @param int $picturesCount
     */
    public function setPicturesCount($picturesCount)
    {
        $this->pictures_count = $picturesCount;
    }

    /**
     * Get pictures_count
     *
     * @return int $picturesCount
     */
    public function getPicturesCount()
    {
        return $this->pictures_count;
    }

    /**
     * Set forbid_allocation
     *
     * @param boolean $forbidAllocation
     */
    public function setForbidAllocation($forbidAllocation)
    {
        $this->forbid_allocation = $forbidAllocation;
    }

    /**
     * Get forbid_allocation
     *
     * @return boolean $forbidAllocation
     */
    public function getForbidAllocation()
    {
        return $this->forbid_allocation;
    }

    /**
     * Set entity_set_type
     *
     * @param NoaLisa\Bundle\EntitiesSetBundle\Document\EntitySetType $entitySetType
     */
    public function setEntitySetType(\NoaLisa\Bundle\EntitiesSetBundle\Document\EntitySetType $entitySetType)
    {
        $this->entity_set_type = $entitySetType;
    }

    /**
     * Get entity_set_type
     *
     * @return NoaLisa\Bundle\EntitiesSetBundle\Document\EntitySetType $entitySetType
     */
    public function getEntitySetType()
    {
        return $this->entity_set_type;
    }

    /**
     * Add rentable_entities
     *
     * @param NoaLisa\Bundle\EntitiesSetBundle\Document\RentableEntity $rentableEntities
     */
    public function addRentableEntities(\NoaLisa\Bundle\EntitiesSetBundle\Document\RentableEntity $rentableEntities)
    {
        $this->rentable_entities[] = $rentableEntities;
    }

    /**
     * Get rentable_entities
     *
     * @return Doctrine\Common\Collections\Collection $rentableEntities
     */
    public function getRentableEntities()
    {
        return $this->rentable_entities;
    }

    /**
     * Add pictures
     *
     * @param NoaLisa\Bundle\EntitiesSetBundle\Document\Pictures $pictures
     */
    public function addPictures(\NoaLisa\Bundle\EntitiesSetBundle\Document\Pictures $pictures)
    {
        $this->pictures[] = $pictures;
    }

    /**
     * Get pictures
     *
     * @return Doctrine\Common\Collections\Collection $pictures
     */
    public function getPictures()
    {
        return $this->pictures;
    }

    /**
     * Add themes
     *
     * @param NoaLisa\Bundle\EntitiesSetBundle\Document\Themes $themes
     */
    public function addThemes(\NoaLisa\Bundle\EntitiesSetBundle\Document\Themes $themes)
    {
        $this->themes[] = $themes;
    }

    /**
     * Get themes
     *
     * @return Doctrine\Common\Collections\Collection $themes
     */
    public function getThemes()
    {
        return $this->themes;
    }

    /**
     * Add paiement_methods
     *
     * @param NoaLisa\Bundle\EntitiesSetBundle\Document\PaiementMethods $paiementMethods
     */
    public function addPaiementMethods(\NoaLisa\Bundle\EntitiesSetBundle\Document\PaiementMethods $paiementMethods)
    {
        $this->paiement_methods[] = $paiementMethods;
    }

    /**
     * Get paiement_methods
     *
     * @return Doctrine\Common\Collections\Collection $paiementMethods
     */
    public function getPaiementMethods()
    {
        return $this->paiement_methods;
    }

    /**
     * Add included_services
     *
     * @param NoaLisa\Bundle\EntitiesSetBundle\Document\Services $includedServices
     */
    public function addIncludedServices(\NoaLisa\Bundle\EntitiesSetBundle\Document\Services $includedServices)
    {
        $this->included_services[] = $includedServices;
    }

    /**
     * Get included_services
     *
     * @return Doctrine\Common\Collections\Collection $includedServices
     */
    public function getIncludedServices()
    {
        return $this->included_services;
    }

    /**
     * Add unincluded_services
     *
     * @param NoaLisa\Bundle\EntitiesSetBundle\Document\Services $unincludedServices
     */
    public function addUnincludedServices(\NoaLisa\Bundle\EntitiesSetBundle\Document\Services $unincludedServices)
    {
        $this->unincluded_services[] = $unincludedServices;
    }

    /**
     * Get unincluded_services
     *
     * @return Doctrine\Common\Collections\Collection $unincludedServices
     */
    public function getUnincludedServices()
    {
        return $this->unincluded_services;
    }

    /**
     * Add included_activities
     *
     * @param NoaLisa\Bundle\EntitiesSetBundle\Document\Activities $includedActivities
     */
    public function addIncludedActivities(\NoaLisa\Bundle\EntitiesSetBundle\Document\Activities $includedActivities)
    {
        $this->included_activities[] = $includedActivities;
    }

    /**
     * Get included_activities
     *
     * @return Doctrine\Common\Collections\Collection $includedActivities
     */
    public function getIncludedActivities()
    {
        return $this->included_activities;
    }

    /**
     * Add unincluded_activities
     *
     * @param NoaLisa\Bundle\EntitiesSetBundle\Document\Activities $unincludedActivities
     */
    public function addUnincludedActivities(\NoaLisa\Bundle\EntitiesSetBundle\Document\Activities $unincludedActivities)
    {
        $this->unincluded_activities[] = $unincludedActivities;
    }

    /**
     * Get unincluded_activities
     *
     * @return Doctrine\Common\Collections\Collection $unincludedActivities
     */
    public function getUnincludedActivities()
    {
        return $this->unincluded_activities;
    }
}