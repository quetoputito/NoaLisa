<?php
namespace NoaLisa\Bundle\BookingRequestBundle\Document;

class BookingRequest
{
	protected $id;
	protected $start_date;
	protected $days_count;
	protected $people_count;
	protected $request_time;
	protected $read_by_owner;

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
     * Set start_date
     *
     * @param date $startDate
     */
    public function setStartDate($startDate)
    {
        $this->start_date = $startDate;
    }

    /**
     * Get start_date
     *
     * @return date $startDate
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set days_count
     *
     * @param int $daysCount
     */
    public function setDaysCount($daysCount)
    {
        $this->days_count = $daysCount;
    }

    /**
     * Get days_count
     *
     * @return int $daysCount
     */
    public function getDaysCount()
    {
        return $this->days_count;
    }

    /**
     * Set people_count
     *
     * @param int $peopleCount
     */
    public function setPeopleCount($peopleCount)
    {
        $this->people_count = $peopleCount;
    }

    /**
     * Get people_count
     *
     * @return int $peopleCount
     */
    public function getPeopleCount()
    {
        return $this->people_count;
    }

    /**
     * Set request_time
     *
     * @param timestamp $requestTime
     */
    public function setRequestTime($requestTime)
    {
        $this->request_time = $requestTime;
    }

    /**
     * Get request_time
     *
     * @return timestamp $requestTime
     */
    public function getRequestTime()
    {
        return $this->request_time;
    }

    /**
     * Set read_by_owner
     *
     * @param boolean $readByOwner
     */
    public function setReadByOwner($readByOwner)
    {
        $this->read_by_owner = $readByOwner;
    }

    /**
     * Get read_by_owner
     *
     * @return boolean $readByOwner
     */
    public function getReadByOwner()
    {
        return $this->read_by_owner;
    }
}