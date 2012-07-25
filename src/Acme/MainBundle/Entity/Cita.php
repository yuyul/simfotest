<?php

namespace Acme\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\MainBundle\Entity\Cita
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Cita
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
     * @var date $Fecha
     *
     * @ORM\Column(name="Fecha", type="date")
     */
    private $Fecha;

    /**
     * @var time $Hora
     *
     * @ORM\Column(name="Hora", type="time")
     */
    private $Hora;

    /**
     * @var string $Persona
     *
     * @ORM\Column(name="Persona", type="string", length=255)
     */
    private $Persona;

    /**
     * @var string $DNI
     *
     * @ORM\Column(name="DNI", type="string", length=9)
     */
    private $DNI;

    /**
     * @var string $Telefono
     *
     * @ORM\Column(name="Telefono", type="string", length=9)
     */
    private $Telefono;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string $expediente
     *
     * @ORM\Column(name="expediente", type="string", length=255, nullable="true")
     */
    private $expediente;

    /**
     * @var text $Motivo
     *
     * @ORM\Column(name="Motivo", type="text", nullable="true")
     */
    private $Motivo;

    /**
     * @var string $Estado
     *
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Estado")
     */
    private $Estado;

    /**
     * @var smallint $Duracion
     *
     * @ORM\Column(name="Duracion", type="smallint", nullable="true")
     */
    private $Duracion;

    /**
     * @var text $Observaciones
     *
     * @ORM\Column(name="Observaciones", type="text", nullable="true")
     */
    private $Observaciones;

    /**
     * @var servicio $Servicio
     * 
     * @ORM\ManyToOne(targetEntity="Acme\MainBundle\Entity\Servicio")
     */
    private $Servicio;

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
     * Set Fecha
     *
     * @param date $fecha
     */
    public function setFecha($fecha)
    {
        $this->Fecha = $fecha;
    }

    /**
     * Get Fecha
     *
     * @return date 
     */
    public function getFecha()
    {
        return $this->Fecha;
    }

    /**
     * Set Hora
     *
     * @param time $hora
     */
    public function setHora($hora)
    {
        $this->Hora = $hora;
    }

    /**
     * Get Hora
     *
     * @return time 
     */
    public function getHora()
    {
        return $this->Hora;
    }

    /**
     * Set Persona
     *
     * @param string $persona
     */
    public function setPersona($persona)
    {
        $this->Persona = $persona;
    }

    /**
     * Get Persona
     *
     * @return string 
     */
    public function getPersona()
    {
        return $this->Persona;
    }

    /**
     * Set DNI
     *
     * @param string $dNI
     */
    public function setDNI($dNI)
    {
        $this->DNI = $dNI;
    }

    /**
     * Get DNI
     *
     * @return string 
     */
    public function getDNI()
    {
        return $this->DNI;
    }

    /**
     * Set Telefono
     *
     * @param string $telefono
     */
    public function setTelefono($telefono)
    {
        $this->Telefono = $telefono;
    }

    /**
     * Get Telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->Telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set expediente
     *
     * @param string $expediente
     */
    public function setExpediente($expediente)
    {
        $this->expediente = $expediente;
    }

    /**
     * Get expediente
     *
     * @return string 
     */
    public function getExpediente()
    {
        return $this->expediente;
    }

    /**
     * Set Motivo
     *
     * @param text $motivo
     */
    public function setMotivo($motivo)
    {
        $this->Motivo = $motivo;
    }

    /**
     * Get Motivo
     *
     * @return text 
     */
    public function getMotivo()
    {
        return $this->Motivo;
    }

    /**
     * Set Estado
     *
     * @param string $estado
     */
    public function setEstado(\Acme\MainBundle\Entity\Estado $estado)
    {
        $this->Estado = $estado;
    }

    /**
     * Get Estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * Set Duracion
     *
     * @param smallint $duracion
     */
    public function setDuracion($duracion)
    {
        $this->Duracion = $duracion;
    }

    /**
     * Get Duracion
     *
     * @return smallint 
     */
    public function getDuracion()
    {
        return $this->Duracion;
    }

    /**
     * Set Observaciones
     *
     * @param text $observaciones
     */
    public function setObservaciones($observaciones)
    {
        $this->Observaciones = $observaciones;
    }

    /**
     * Get Observaciones
     *
     * @return text 
     */
    public function getObservaciones()
    {
        return $this->Observaciones;
    }
    
    /**
     * Set Servicio
     * 
     * @param Servicio $servicio
     */
    public function setServicio(\Acme\MainBundle\Entity\Servicio $servicio)
    {
    	$this->Servicio = $servicio;
    }
    
    /**
     * Get Servicio
     * 
     * @return servicio
     */
    public function getServicio()
    {
    	return $this->Servicio;
    }
    
    public function __toString()
    {
    	return $this->id;
    }
    
    public function getArrayDatos()
    {
    	return array('hora' => date_format($this->Hora, "H:i"));
    }
}