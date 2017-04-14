<?php
/**
 * Created by PhpStorm.
 * User: yannick.dieng
 * Date: 21/02/2017
 * Time: 12:39
 */

namespace cdoparis\CoursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class Cours
 * @package cdoparis\CoursBundle\Entity
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity(repositoryClass="cdoparis\CoursBundle\Repository\CoursRepository")
 */
class Cours{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
}