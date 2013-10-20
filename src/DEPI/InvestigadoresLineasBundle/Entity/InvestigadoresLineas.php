<?php

namespace DEPI\InvestigadoresLineasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvestigadoresLineas
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class InvestigadoresLineas
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
     * @var integer
     *
     * @ORM\Column(name="investigadores", type="integer")
     */
    private $investigadores;

    /**
     * @var integer
     *
     * @ORM\Column(name="lineasinvestigacion", type="integer")
     */
    private $lineasinvestigacion;

    /**
     * @var string
     *
     * @ORM\Column(name="rol", type="string", length=20)
     */
    private $rol;


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
     * Set investigadores
     *
     * @param integer $investigadores
     * @return InvestigadoresLineas
     */
    public function setInvestigadores($investigadores)
    {
        $this->investigadores = $investigadores;
    
        return $this;
    }

    /**
     * Get investigadores
     *
     * @return integer 
     */
    public function getInvestigadores()
    {
        return $this->investigadores;
    }

    /**
     * Set lineasinvestigacion
     *
     * @param integer $lineasinvestigacion
     * @return InvestigadoresLineas
     */
    public function setLineasinvestigacion($lineasinvestigacion)
    {
        $this->lineasinvestigacion = $lineasinvestigacion;
    
        return $this;
    }

    /**
     * Get lineasinvestigacion
     *
     * @return integer 
     */
    public function getLineasinvestigacion()
    {
        return $this->lineasinvestigacion;
    }

    /**
     * Set rol
     *
     * @param string $rol
     * @return InvestigadoresLineas
     */
    public function setRol($rol)
    {
        $this->rol = $rol;
    
        return $this;
    }

    /**
     * Get rol
     *
     * @return string 
     */
    public function getRol()
    {
        return $this->rol;
    }
}
