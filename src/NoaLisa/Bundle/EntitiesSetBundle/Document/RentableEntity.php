<?php
namespace NoaLisa\Bundle\EntitiesSetBundle\Document;

class RentableEntity{
		protected $id;
		protected $name;
		protected $title;
		protected $space;
		protected $bedrooms_count;
		protected $bed1p_count;
		protected $bed2p_count;
		protected $pictures_count;
		protected $description;
		protected $disabled_person_ok;
		protected $wifi_ok;
		protected $booking_online_ok;
		protected $private_bathroom_included;
		protected $tvset_included;
		protected $computer_included;
		protected $balcony_included;
		protected $terrace_included;
		protected $hifi_included;
		protected $private_wc_included;
		protected $fan_included;
		protected $air_conditionned_included;
		protected $towels_included;
		protected $sheets_included;
		protected $bath_included;
		protected $separated_wc_included;
		protected $forbid_allocation;
		protected $address;
		protected $zip;
		protected $neighborhood;
		protected $website;
		protected $access_description;
		protected $animals_ok;
		protected $furnished_kitchen;
		protected $extrabed_included;
		protected $managed_calendar;
		protected $checkin_time;
		protected $checkout_time;
		protected $warranty_deposit_amount;
		protected $pictures=array();
		protected $accomodation_type;
		protected $view;
                


    public function __construct()
    {
        $this->pictures = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set space
     *
     * @param int $space
     */
    public function setSpace($space)
    {
        $this->space = $space;
    }

    /**
     * Get space
     *
     * @return int $space
     */
    public function getSpace()
    {
        return $this->space;
    }

    /**
     * Set bedrooms_count
     *
     * @param int $bedroomsCount
     */
    public function setBedroomsCount($bedroomsCount)
    {
        $this->bedrooms_count = $bedroomsCount;
    }

    /**
     * Get bedrooms_count
     *
     * @return int $bedroomsCount
     */
    public function getBedroomsCount()
    {
        return $this->bedrooms_count;
    }

    /**
     * Set bed1p_count
     *
     * @param int $bed1pCount
     */
    public function setBed1pCount($bed1pCount)
    {
        $this->bed1p_count = $bed1pCount;
    }

    /**
     * Get bed1p_count
     *
     * @return int $bed1pCount
     */
    public function getBed1pCount()
    {
        return $this->bed1p_count;
    }

    /**
     * Set bed2p_count
     *
     * @param int $bed2pCount
     */
    public function setBed2pCount($bed2pCount)
    {
        $this->bed2p_count = $bed2pCount;
    }

    /**
     * Get bed2p_count
     *
     * @return int $bed2pCount
     */
    public function getBed2pCount()
    {
        return $this->bed2p_count;
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
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
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
     * Set wifi_ok
     *
     * @param boolean $wifiOk
     */
    public function setWifiOk($wifiOk)
    {
        $this->wifi_ok = $wifiOk;
    }

    /**
     * Get wifi_ok
     *
     * @return boolean $wifiOk
     */
    public function getWifiOk()
    {
        return $this->wifi_ok;
    }

    /**
     * Set booking_online_ok
     *
     * @param boolean $bookingOnlineOk
     */
    public function setBookingOnlineOk($bookingOnlineOk)
    {
        $this->booking_online_ok = $bookingOnlineOk;
    }

    /**
     * Get booking_online_ok
     *
     * @return boolean $bookingOnlineOk
     */
    public function getBookingOnlineOk()
    {
        return $this->booking_online_ok;
    }

    /**
     * Set private_bathroom_included
     *
     * @param boolean $privateBathroomIncluded
     */
    public function setPrivateBathroomIncluded($privateBathroomIncluded)
    {
        $this->private_bathroom_included = $privateBathroomIncluded;
    }

    /**
     * Get private_bathroom_included
     *
     * @return boolean $privateBathroomIncluded
     */
    public function getPrivateBathroomIncluded()
    {
        return $this->private_bathroom_included;
    }

    /**
     * Set tvset_included
     *
     * @param boolean $tvsetIncluded
     */
    public function setTvsetIncluded($tvsetIncluded)
    {
        $this->tvset_included = $tvsetIncluded;
    }

    /**
     * Get tvset_included
     *
     * @return boolean $tvsetIncluded
     */
    public function getTvsetIncluded()
    {
        return $this->tvset_included;
    }

    /**
     * Set computer_included
     *
     * @param boolean $computerIncluded
     */
    public function setComputerIncluded($computerIncluded)
    {
        $this->computer_included = $computerIncluded;
    }

    /**
     * Get computer_included
     *
     * @return boolean $computerIncluded
     */
    public function getComputerIncluded()
    {
        return $this->computer_included;
    }

    /**
     * Set balcony_included
     *
     * @param boolean $balconyIncluded
     */
    public function setBalconyIncluded($balconyIncluded)
    {
        $this->balcony_included = $balconyIncluded;
    }

    /**
     * Get balcony_included
     *
     * @return boolean $balconyIncluded
     */
    public function getBalconyIncluded()
    {
        return $this->balcony_included;
    }

    /**
     * Set terrace_included
     *
     * @param boolean $terraceIncluded
     */
    public function setTerraceIncluded($terraceIncluded)
    {
        $this->terrace_included = $terraceIncluded;
    }

    /**
     * Get terrace_included
     *
     * @return boolean $terraceIncluded
     */
    public function getTerraceIncluded()
    {
        return $this->terrace_included;
    }

    /**
     * Set hifi_included
     *
     * @param boolean $hifiIncluded
     */
    public function setHifiIncluded($hifiIncluded)
    {
        $this->hifi_included = $hifiIncluded;
    }

    /**
     * Get hifi_included
     *
     * @return boolean $hifiIncluded
     */
    public function getHifiIncluded()
    {
        return $this->hifi_included;
    }

    /**
     * Set private_wc_included
     *
     * @param boolean $privateWcIncluded
     */
    public function setPrivateWcIncluded($privateWcIncluded)
    {
        $this->private_wc_included = $privateWcIncluded;
    }

    /**
     * Get private_wc_included
     *
     * @return boolean $privateWcIncluded
     */
    public function getPrivateWcIncluded()
    {
        return $this->private_wc_included;
    }

    /**
     * Set fan_included
     *
     * @param boolean $fanIncluded
     */
    public function setFanIncluded($fanIncluded)
    {
        $this->fan_included = $fanIncluded;
    }

    /**
     * Get fan_included
     *
     * @return boolean $fanIncluded
     */
    public function getFanIncluded()
    {
        return $this->fan_included;
    }

    /**
     * Set air_conditionned_included
     *
     * @param boolean $airConditionnedIncluded
     */
    public function setAirConditionnedIncluded($airConditionnedIncluded)
    {
        $this->air_conditionned_included = $airConditionnedIncluded;
    }

    /**
     * Get air_conditionned_included
     *
     * @return boolean $airConditionnedIncluded
     */
    public function getAirConditionnedIncluded()
    {
        return $this->air_conditionned_included;
    }

    /**
     * Set towels_included
     *
     * @param boolean $towelsIncluded
     */
    public function setTowelsIncluded($towelsIncluded)
    {
        $this->towels_included = $towelsIncluded;
    }

    /**
     * Get towels_included
     *
     * @return boolean $towelsIncluded
     */
    public function getTowelsIncluded()
    {
        return $this->towels_included;
    }

    /**
     * Set sheets_included
     *
     * @param boolean $sheetsIncluded
     */
    public function setSheetsIncluded($sheetsIncluded)
    {
        $this->sheets_included = $sheetsIncluded;
    }

    /**
     * Get sheets_included
     *
     * @return boolean $sheetsIncluded
     */
    public function getSheetsIncluded()
    {
        return $this->sheets_included;
    }

    /**
     * Set bath_included
     *
     * @param boolean $bathIncluded
     */
    public function setBathIncluded($bathIncluded)
    {
        $this->bath_included = $bathIncluded;
    }

    /**
     * Get bath_included
     *
     * @return boolean $bathIncluded
     */
    public function getBathIncluded()
    {
        return $this->bath_included;
    }

    /**
     * Set separated_wc_included
     *
     * @param boolean $separatedWcIncluded
     */
    public function setSeparatedWcIncluded($separatedWcIncluded)
    {
        $this->separated_wc_included = $separatedWcIncluded;
    }

    /**
     * Get separated_wc_included
     *
     * @return boolean $separatedWcIncluded
     */
    public function getSeparatedWcIncluded()
    {
        return $this->separated_wc_included;
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
     * Set neighborhood
     *
     * @param string $neighborhood
     */
    public function setNeighborhood($neighborhood)
    {
        $this->neighborhood = $neighborhood;
    }

    /**
     * Get neighborhood
     *
     * @return string $neighborhood
     */
    public function getNeighborhood()
    {
        return $this->neighborhood;
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
     * Set access_description
     *
     * @param string $accessDescription
     */
    public function setAccessDescription($accessDescription)
    {
        $this->access_description = $accessDescription;
    }

    /**
     * Get access_description
     *
     * @return string $accessDescription
     */
    public function getAccessDescription()
    {
        return $this->access_description;
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
     * Set furnished_kitchen_included
     *
     * @param boolean $furnishedKitchenIncluded
     */
    public function setFurnishedKitchenIncluded($furnishedKitchenIncluded)
    {
        $this->furnished_kitchen_included = $furnishedKitchenIncluded;
    }

    /**
     * Get furnished_kitchen_included
     *
     * @return boolean $furnishedKitchenIncluded
     */
    public function getFurnishedKitchenIncluded()
    {
        return $this->furnished_kitchen_included;
    }

    /**
     * Set extrabed_included
     *
     * @param boolean $extrabedIncluded
     */
    public function setExtrabedIncluded($extrabedIncluded)
    {
        $this->extrabed_included = $extrabedIncluded;
    }

    /**
     * Get extrabed_included
     *
     * @return boolean $extrabedIncluded
     */
    public function getExtrabedIncluded()
    {
        return $this->extrabed_included;
    }

    /**
     * Set managed_calendar
     *
     * @param boolean $managedCalendar
     */
    public function setManagedCalendar($managedCalendar)
    {
        $this->managed_calendar = $managedCalendar;
    }

    /**
     * Get managed_calendar
     *
     * @return boolean $managedCalendar
     */
    public function getManagedCalendar()
    {
        return $this->managed_calendar;
    }

    /**
     * Set checkin_time
     *
     * @param string $checkinTime
     */
    public function setCheckinTime($checkinTime)
    {
        $this->checkin_time = $checkinTime;
    }

    /**
     * Get checkin_time
     *
     * @return string $checkinTime
     */
    public function getCheckinTime()
    {
        return $this->checkin_time;
    }

    /**
     * Set checkout_time
     *
     * @param string $checkoutTime
     */
    public function setCheckoutTime($checkoutTime)
    {
        $this->checkout_time = $checkoutTime;
    }

    /**
     * Get checkout_time
     *
     * @return string $checkoutTime
     */
    public function getCheckoutTime()
    {
        return $this->checkout_time;
    }

    /**
     * Set warranty_deposit_amount
     *
     * @param int $warrantyDepositAmount
     */
    public function setWarrantyDepositAmount($warrantyDepositAmount)
    {
        $this->warranty_deposit_amount = $warrantyDepositAmount;
    }

    /**
     * Get warranty_deposit_amount
     *
     * @return int $warrantyDepositAmount
     */
    public function getWarrantyDepositAmount()
    {
        return $this->warranty_deposit_amount;
    }

    /**
     * Set accomodation_type
     *
     * @param NoaLisa\Bundle\EntitiesSetBundle\Document\AccomodationType $accomodationType
     */
    public function setAccomodationType(\NoaLisa\Bundle\EntitiesSetBundle\Document\AccomodationType $accomodationType)
    {
        $this->accomodation_type = $accomodationType;
    }

    /**
     * Get accomodation_type
     *
     * @return NoaLisa\Bundle\EntitiesSetBundle\Document\AccomodationType $accomodationType
     */
    public function getAccomodationType()
    {
        return $this->accomodation_type;
    }

    /**
     * Set view
     *
     * @param NoaLisa\Bundle\EntitiesSetBundle\Document\Views $view
     */
    public function setView(\NoaLisa\Bundle\EntitiesSetBundle\Document\Views $view)
    {
        $this->view = $view;
    }

    /**
     * Get view
     *
     * @return NoaLisa\Bundle\EntitiesSetBundle\Document\Views $view
     */
    public function getView()
    {
        return $this->view;
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
     * @var boolean $furnished_kitchen_included
     */
    private $furnished_kitchen_included;


}