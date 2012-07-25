<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MainBundle\Entity\Estado
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Estado
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $Descripcion
     *
     * @ORM\Column(name="Descripcion", type="string", length=255)
     */
    private $Descripcion;


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
     * Set Descripcion
     *
     * @param string $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->Descripcion = $descripcion;
    }

    /**
     * Get Descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->Descripcion;
    }
    
    public function __toString()
    {
    	return $this->Descripcion;
    }
}