<?php

namespace Crm\PersonalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personal
 */
class Personal
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apePat;

    /**
     * @var string
     */
    private $apeMat;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $celular;

    /**
     * @var string
     */
    private $email;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Personal
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
     * Set apePat
     *
     * @param string $apePat
     * @return Personal
     */
    public function setApePat($apePat)
    {
        $this->apePat = $apePat;

        return $this;
    }

    /**
     * Get apePat
     *
     * @return string 
     */
    public function getApePat()
    {
        return $this->apePat;
    }

    /**
     * Set apeMat
     *
     * @param string $apeMat
     * @return Personal
     */
    public function setApeMat($apeMat)
    {
        $this->apeMat = $apeMat;

        return $this;
    }

    /**
     * Get apeMat
     *
     * @return string 
     */
    public function getApeMat()
    {
        return $this->apeMat;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Personal
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

    /**
     * Set celular
     *
     * @param string $celular
     * @return Personal
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Personal
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
    
     public function __toString()
    {
        return $this->nombre;
    }
    /**
     * @var \Crm\GeneralBundle\Entity\Estatus
     */
    private $estatus;


    /**
     * Set estatus
     *
     * @param \Crm\GeneralBundle\Entity\Estatus $estatus
     * @return Personal
     */
    public function setEstatus(\Crm\GeneralBundle\Entity\Estatus $estatus = null)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get estatus
     *
     * @return \Crm\GeneralBundle\Entity\Estatus 
     */
    public function getEstatus()
    {
        return $this->estatus;
    }
}