<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MainBundle\Entity\Edificio
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Edificio
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
     * @var string $Nombre
     *
     * @ORM\Column(name="Nombre", type="string", length=255)
     */
    private $Nombre;

    /**
     * @var string $Direccion
     *
     * @ORM\Column(name="Direccion", type="string", length=255)
     */
    private $Direccion;


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
     * Set Nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->Nombre = $nombre;
    }

    /**
     * Get Nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * Set Direccion
     *
     * @param string $direccion
     */
    public function setDireccion($direccion)
    {
        $this->Direccion = $direccion;
    }

    /**
     * Get Direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->Direccion;
    }
    
    public function __toString()
    {
    	return $this->Nombre;
    }
}