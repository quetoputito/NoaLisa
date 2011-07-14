<?php
namespace NoaLisa\Bundle\EntitiesSetBundle\Document;

class Pictures{
	protected $id;
	protected $name;
	protected $order;
	protected $code;
	protected $picture_type;
    /**
     * @var int $type
     */
    private $type;


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
     * Set code
     *
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * Get code
     *
     * @return string $code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set order
     *
     * @param int $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * Get order
     *
     * @return int $order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set type
     *
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return int $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set picture_type
     *
     * @param NoaLisa\Bundle\EntitiesSetBundle\Document\PictureType $pictureType
     */
    public function setPictureType(\NoaLisa\Bundle\EntitiesSetBundle\Document\PictureType $pictureType)
    {
        $this->picture_type = $pictureType;
    }

    /**
     * Get picture_type
     *
     * @return NoaLisa\Bundle\EntitiesSetBundle\Document\PictureType $pictureType
     */
    public function getPictureType()
    {
        return $this->picture_type;
    }
}