<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MainBundle\Entity\Servicio
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Servicio
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
     * @var string $Departamento
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Departamento")
     */
    private $Departamento;

    /**
     * @var text $Recomendaciones
     *
     * @ORM\Column(name="Recomendaciones", type="text")
     */
    private $Recomendaciones;


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
     * Set Departamento
     *
     * @param string $departamento
     */
    public function setDepartamento(\Acme\MainBundle\Entity\Departamento $departamento)
    {
        $this->Departamento = $departamento;
    }

    /**
     * Get Departamento
     *
     * @return string 
     */
    public function getDepartamento()
    {
        return $this->Departamento;
    }

    /**
     * Set Recomendaciones
     *
     * @param text $recomendaciones
     */
    public function setRecomendaciones($recomendaciones)
    {
        $this->Recomendaciones = $recomendaciones;
    }

    /**
     * Get Recomendaciones
     *
     * @return text 
     */
    public function getRecomendaciones()
    {
        return $this->Recomendaciones;
    }
    
    public function __toString()
    {
    	return $this->Nombre;
    }
}