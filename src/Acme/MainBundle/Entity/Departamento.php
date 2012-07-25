<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MainBundle\Entity\Departamento
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Departamento
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
     * @var string $Edificio
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Edificio") 
     */
    private $Edificio;

    /**
     * @var smallint $Planta
     *
     * @ORM\Column(name="Planta", type="smallint")
     */
    private $Planta;

    /**
     * @var smallint $Puerta
     *
     * @ORM\Column(name="Puerta", type="smallint")
     */
    private $Puerta;

    /**
     * @var boolean $Habilitado
     *
     * @ORM\Column(name="Habilitado", type="boolean")
     */
    private $Habilitado;


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
     * Set Edificio
     *
     * @param string $edificio
     */
    public function setEdificio(\Acme\MainBundle\Entity\Edificio $edificio)
    {
        $this->Edificio = $edificio;
    }

    /**
     * Get Edificio
     *
     * @return string 
     */
    public function getEdificio()
    {
        return $this->Edificio;
    }

    /**
     * Set Planta
     *
     * @param smallint $planta
     */
    public function setPlanta($planta)
    {
        $this->Planta = $planta;
    }

    /**
     * Get Planta
     *
     * @return smallint 
     */
    public function getPlanta()
    {
        return $this->Planta;
    }

    /**
     * Set Puerta
     *
     * @param smallint $puerta
     */
    public function setPuerta($puerta)
    {
        $this->Puerta = $puerta;
    }

    /**
     * Get Puerta
     *
     * @return smallint 
     */
    public function getPuerta()
    {
        return $this->Puerta;
    }

    /**
     * Set Habilitado
     *
     * @param boolean $habilitado
     */
    public function setHabilitado($habilitado)
    {
        $this->Habilitado = $habilitado;
    }

    /**
     * Get Habilitado
     *
     * @return boolean 
     */
    public function getHabilitado()
    {
        return $this->Habilitado;
    }
    
    public function __toString()
    {
    	return $this->Nombre;
    }
}