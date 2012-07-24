<?php

namespace Acme\MainBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="usuarios")
 */
class Usuario implements UserInterface {
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(name="usuario", type="string", length="255")
	 */
	protected $usuario;

	/**
	 * @ORM\Column(name="password", type="string", length="255")
	 */
	protected $password;

	/**
	 * @ORM\Column(name="salt", type="string", length="255")
	 */
	protected $salt;

	/**
	 * @ORM\ManyToMany(targetEntity="Rol")
	 * @ORM\JoinTable(name="usuario_rol",
	 * 	joinColumns={@ORM\JoinColumn(name="usuario_id", referencedColumnName="id")},
	 *  inverseJoinColumns={@ORM\JoinColumn(name="rol_id", referencedColumnName="id")}
	 *  )
	 */
	protected $usuario_roles;
	

	
	/**
     * Get user_roles
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getUsuarioRoles()
    {
        return $this->usuario_roles;
    }


    /**
     * Get roles
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getRoles()
    {
        return $this->usuario_roles->toArray(); //IMPORTANTE: el mecanismo de seguridad de Sf2 requiere ésto como un array
		/*$rolesObj = $this->usuario_roles; 
		$retVal = array(); 
	    if ($rolesObj != null) { 
	       foreach ($rolesObj as $role) { 
	           $roleName = $role->getNombre(); 
	           $retVal[] = $roleName; 
	        } 
	    } 
	    return $retVal;*/ 
    }
	
	public function getPassword() {
		// TODO: Auto-generated method stub
		return $this->password;

	}
	public function getSalt() {
		// TODO: Auto-generated method stub

	}
	public function getUsername() {
		// TODO: Auto-generated method stub
		return $this->usuario;

	}
	public function eraseCredentials() {
		// TODO: Auto-generated method stub

	}
	public function equals(UserInterface $user) {
		// TODO: Auto-generated method stub

	}

    public function __construct()
    {
        $this->usuario_roles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set usuario
     *
     * @param string $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Add roles
     *
     * @param Acme\MainBundle\Entity\Rol $roles
     */
    public function addRol(\Acme\MainBundle\Entity\Rol $roles)
    {
        $this->usuario_roles[] = $roles;
    }
    
    public function setRoles($roles)
    {
    	$this->usuario_roles = $roles;
    }

    /**
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }
}