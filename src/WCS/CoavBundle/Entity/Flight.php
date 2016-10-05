<?php

namespace WCS\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flight
 */
class Flight
{
    
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $departure;

    /**
     * @var string
     */
    private $arrival;

    /**
     * @var string
     */
    private $pilot;

    /**
     * @var int
     */
    private $freeSeats;

    /**
     * @var \DateTime
     */
    private $takeofTime;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set departure
     *
     * @param string $departure
     * @return Flight
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return string 
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrival
     *
     * @param string $arrival
     * @return Flight
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return string 
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set pilot
     *
     * @param string $pilot
     * @return Flight
     */
    public function setPilot($pilot)
    {
        $this->pilot = $pilot;

        return $this;
    }

    /**
     * Get pilot
     *
     * @return string 
     */
    public function getPilot()
    {
        return $this->pilot;
    }

    /**
     * Set freeSeats
     *
     * @param integer $freeSeats
     * @return Flight
     */
    public function setFreeSeats($freeSeats)
    {
        $this->freeSeats = $freeSeats;

        return $this;
    }

    /**
     * Get freeSeats
     *
     * @return integer 
     */
    public function getFreeSeats()
    {
        return $this->freeSeats;
    }

    /**
     * Set takeofTime
     *
     * @param \DateTime $takeofTime
     * @return Flight
     */
    public function setTakeofTime($takeofTime)
    {
        $this->takeofTime = $takeofTime;

        return $this;
    }

    /**
     * Get takeofTime
     *
     * @return \DateTime 
     */
    public function getTakeofTime()
    {
        return $this->takeofTime;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $flight;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->flight = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add flight
     *
     * @param \WCS\CoavBundle\Entity\Reservation $flight
     * @return Flight
     */
    public function addFlight(\WCS\CoavBundle\Entity\Reservation $flight)
    {
        $this->flight[] = $flight;

        return $this;
    }

    /**
     * Remove flight
     *
     * @param \WCS\CoavBundle\Entity\Reservation $flight
     */
    public function removeFlight(\WCS\CoavBundle\Entity\Reservation $flight)
    {
        $this->flight->removeElement($flight);
    }

    /**
     * Get flight
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFlight()
    {
        return $this->flight;
    }

    /**
     * Set flight
     *
     * @param \WCS\CoavBundle\Entity\Reservation $flight
     * @return Flight
     */
    public function setFlight(\WCS\CoavBundle\Entity\Reservation $flight = null)
    {
        $this->flight = $flight;

        return $this;
    }
    /**
     * @var \WCS\CoavBundle\Entity\PlaneModel
     */
    private $plane;


    /**
     * Set plane
     *
     * @param \WCS\CoavBundle\Entity\PlaneModel $plane
     * @return Flight
     */
    public function setPlane(\WCS\CoavBundle\Entity\PlaneModel $plane = null)
    {
        $this->plane = $plane;

        return $this;
    }

    /**
     * Get plane
     *
     * @return \WCS\CoavBundle\Entity\PlaneModel 
     */
    public function getPlane()
    {
        return $this->plane;
    }
    /**
     * @var \WCS\CoavBundle\Entity\PlaneModel
     */
    private $model;


    /**
     * Set model
     *
     * @param \WCS\CoavBundle\Entity\PlaneModel $model
     * @return Flight
     */
    public function setModel(\WCS\CoavBundle\Entity\PlaneModel $model = null)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return \WCS\CoavBundle\Entity\PlaneModel 
     */
    public function getModel()
    {
        return $this->model;
    }
}
