<?php

namespace DEPI\AlumnosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumnos
 *
 * @ORM\Table(name="alumnos")
 * @ORM\Entity
 */
class Alumnos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="no_control", type="string", length=10)
     */
    private $no_control;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_paterno", type="string", length=30)
     */
    private $apellido_paterno;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_materno", type="string", length=30)
     */
    private $apellido_materno;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20)
     */
    private $telefono;


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
     * Set no_control
     *
     * @param string $noControl
     * @return Alumnos
     */
    public function setNoControl($noControl)
    {
        $this->no_control = $noControl;
    
        return $this;
    }

    /**
     * Get no_control
     *
     * @return string 
     */
    public function getNoControl()
    {
        return $this->no_control;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Alumnos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido_paterno
     *
     * @param string $apellidoPaterno
     * @return Alumnos
     */
    public function setApellidoPaterno($apellidoPaterno)
    {
        $this->apellido_paterno = $apellidoPaterno;
    
        return $this;
    }

    /**
     * Get apellido_paterno
     *
     * @return string 
     */
    public function getApellidoPaterno()
    {
        return $this->apellido_paterno;
    }

    /**
     * Set apellido_materno
     *
     * @param string $apellidoMaterno
     * @return Alumnos
     */
    public function setApellidoMaterno($apellidoMaterno)
    {
        $this->apellido_materno = $apellidoMaterno;
    
        return $this;
    }

    /**
     * Get apellido_materno
     *
     * @return string 
     */
    public function getApellidoMaterno()
    {
        return $this->apellido_materno;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Alumnos
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
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
     * Set telefono
     *
     * @param string $telefono
     * @return Alumnos
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
}
