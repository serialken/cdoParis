<?php
/**
 * Created by PhpStorm.
 * User: yannick.dieng
 * Date: 18/04/2017
 * Time: 15:19
 */
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Address
 * @package AppBundle\Entity
 *
 * @ORM\Table(name="address")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AddressRepository")
 */
class Address{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=128)
     */
    private $title;

    /**
     * @var string $place
     *
     * @ORM\Column(name="place", type="string", length=128)
     */
    private $place;

    /**
     * @var integer $cp
     *
     * @ORM\Column(name="cp", type="integer", length=10)
     */
    private $cp;

    /**
     * @var string $city
     *
     * @ORM\Column(name="city", type="string", length=55)
     */
    private $city;


    /**
     * @var string $informations
     *
     * @ORM\Column(name="informations", type="string", length=255)
     */
    private $informations;

    /**
     * @var \DateTime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var ArrayCollection $studies
     *
     * @ORM\OneToMany(targetEntity="Study", mappedBy="address")
     */
    private $studies;

    /**
     * @var \DateTime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="updated",type="datetime")
     */
    private $updated;

    /**
     * @var \DateTime $contentChanged
     *
     * @Gedmo\Timestampable(on="change", field={"title", "place", "cp", "city", "informations"})
     * @ORM\Column(name="content_changed", type="datetime", nullable=true)
     */
    private $contentChanged;



    /**
     * Address constructor.
     */
    public function __construct()
    {
        $this->studies = new ArrayCollection();
    }

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
     * Set title
     *
     * @param string $title
     *
     * @return Address
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set place
     *
     * @param string $place
     *
     * @return Address
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     *
     * @return Address
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return integer
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set informations
     *
     * @param string $informations
     *
     * @return Address
     */
    public function setInformations($informations)
    {
        $this->informations = $informations;

        return $this;
    }

    /**
     * Get informations
     *
     * @return string
     */
    public function getInformations()
    {
        return $this->informations;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Address
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Address
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set contentChanged
     *
     * @param \DateTime $contentChanged
     *
     * @return Address
     */
    public function setContentChanged($contentChanged)
    {
        $this->contentChanged = $contentChanged;

        return $this;
    }

    /**
     * Get contentChanged
     *
     * @return \DateTime
     */
    public function getContentChanged()
    {
        return $this->contentChanged;
    }

    /**
     * Add study
     *
     * @param \AppBundle\Entity\Study $study
     *
     * @return Address
     */
    public function addStudy(\AppBundle\Entity\Study $study)
    {
        $this->studies[] = $study;

        return $this;
    }

    /**
     * Remove study
     *
     * @param \AppBundle\Entity\Study $study
     */
    public function removeStudy(\AppBundle\Entity\Study $study)
    {
        $this->studies->removeElement($study);
    }

    /**
     * Get studies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStudies()
    {
        return $this->studies;
    }
}
