<?php

namespace crm\licenciaBundle\Entity;

/**
 * Equipo
 */
class Equipo
{
    /**
     * @var integer
     */
    private $id;
    
    /**
     * @var string
     */
    private $numeroSerie;

    /**
     * @var \DateTime
     */
    private $fechaInstalacion;


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
     * Set numeroSerie
     *
     * @param string $numeroSerie
     *
     * @return Equipo
     */
    public function setNumeroSerie($numeroSerie)
    {
        $this->numeroSerie = $numeroSerie;

        return $this;
    }

    /**
     * Get numeroSerie
     *
     * @return string
     */
    public function getNumeroSerie()
    {
        return $this->numeroSerie;
    }

    /**
     * Set fechaInstalacion
     *
     * @param \DateTime $fechaInstalacion
     *
     * @return Equipo
     */
    public function setFechaInstalacion($fechaInstalacion)
    {
        $this->fechaInstalacion = $fechaInstalacion;

        return $this;
    }

    /**
     * Get fechaInstalacion
     *
     * @return \DateTime
     */
    public function getFechaInstalacion()
    {
        return $this->fechaInstalacion;
    }
}

