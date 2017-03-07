<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhClavesTarjeta
 *
 * @ORM\Table(name="RH_Claves_Tarjeta")
 * @ORM\Entity
 */
class RhClavesTarjeta
{
    /**
     * @var string
     *
     * @ORM\Column(name="Vacaciones", type="string", length=1, nullable=false)
     */
    private $vacaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="VacacionesAdelantadas", type="string", length=1, nullable=false)
     */
    private $vacacionesadelantadas;

    /**
     * @var string
     *
     * @ORM\Column(name="Condiciones_Laborales_Anormales", type="string", length=1, nullable=false)
     */
    private $condicionesLaboralesAnormales;

    /**
     * @var string
     *
     * @ORM\Column(name="Cambio_de_Salario", type="string", length=1, nullable=false)
     */
    private $cambioDeSalario;

    /**
     * @var string
     *
     * @ORM\Column(name="Trabajadores_de_Estipendio", type="string", length=1, nullable=false)
     */
    private $trabajadoresDeEstipendio;

    /**
     * @var string
     *
     * @ORM\Column(name="Interrupcion_Laboral", type="string", length=1, nullable=false)
     */
    private $interrupcionLaboral;

    /**
     * @var string
     *
     * @ORM\Column(name="Rehabilitacion_o_Pension", type="string", length=1, nullable=false)
     */
    private $rehabilitacionOPension;

    /**
     * @var string
     *
     * @ORM\Column(name="Suspension_Laboral", type="string", length=1, nullable=false)
     */
    private $suspensionLaboral;

    /**
     * @var string
     *
     * @ORM\Column(name="Maternidad", type="string", length=1, nullable=false)
     */
    private $maternidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Prestacion_Social", type="string", length=1, nullable=false)
     */
    private $prestacionSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="Trabajador_Movilizado", type="string", length=1, nullable=false)
     */
    private $trabajadorMovilizado;

    /**
     * @var string
     *
     * @ORM\Column(name="Primas", type="string", length=1, nullable=false)
     */
    private $primas;

    /**
     * @var string
     *
     * @ORM\Column(name="Pago_por_Rendimiento", type="string", length=1, nullable=false)
     */
    private $pagoPorRendimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="Subsidio", type="string", length=1, nullable=false)
     */
    private $subsidio;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Extra", type="string", length=1, nullable=false)
     */
    private $horasExtra;

    /**
     * @var string
     *
     * @ORM\Column(name="Doble_Turno", type="string", length=1, nullable=false)
     */
    private $dobleTurno;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Op", type="datetime", nullable=false)
     */
    private $fechaOp;

    /**
     * @var string
     *
     * @ORM\Column(name="Estimulacion", type="string", length=1, nullable=false)
     */
    private $estimulacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Medidas_Salariales", type="string", length=1, nullable=false)
     */
    private $medidasSalariales;

    /**
     * @var string
     *
     * @ORM\Column(name="Albergamiento", type="string", length=1, nullable=false)
     */
    private $albergamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="Idoneidad", type="string", length=1, nullable=false)
     */
    private $idoneidad;

    /**
     * @var string
     *
     * @ORM\Column(name="IET", type="string", length=1, nullable=false)
     */
    private $iet;

    /**
     * @var string
     *
     * @ORM\Column(name="ETS", type="string", length=1, nullable=false)
     */
    private $ets;

    /**
     * @var string
     *
     * @ORM\Column(name="Retribucion_Complementaria", type="string", length=1, nullable=false)
     */
    private $retribucionComplementaria;



    /**
     * Set vacaciones
     *
     * @param string $vacaciones
     * @return RhClavesTarjeta
     */
    public function setVacaciones($vacaciones)
    {
        $this->vacaciones = $vacaciones;

        return $this;
    }

    /**
     * Get vacaciones
     *
     * @return string 
     */
    public function getVacaciones()
    {
        return $this->vacaciones;
    }

    /**
     * Set vacacionesadelantadas
     *
     * @param string $vacacionesadelantadas
     * @return RhClavesTarjeta
     */
    public function setVacacionesadelantadas($vacacionesadelantadas)
    {
        $this->vacacionesadelantadas = $vacacionesadelantadas;

        return $this;
    }

    /**
     * Get vacacionesadelantadas
     *
     * @return string 
     */
    public function getVacacionesadelantadas()
    {
        return $this->vacacionesadelantadas;
    }

    /**
     * Set condicionesLaboralesAnormales
     *
     * @param string $condicionesLaboralesAnormales
     * @return RhClavesTarjeta
     */
    public function setCondicionesLaboralesAnormales($condicionesLaboralesAnormales)
    {
        $this->condicionesLaboralesAnormales = $condicionesLaboralesAnormales;

        return $this;
    }

    /**
     * Get condicionesLaboralesAnormales
     *
     * @return string 
     */
    public function getCondicionesLaboralesAnormales()
    {
        return $this->condicionesLaboralesAnormales;
    }

    /**
     * Set cambioDeSalario
     *
     * @param string $cambioDeSalario
     * @return RhClavesTarjeta
     */
    public function setCambioDeSalario($cambioDeSalario)
    {
        $this->cambioDeSalario = $cambioDeSalario;

        return $this;
    }

    /**
     * Get cambioDeSalario
     *
     * @return string 
     */
    public function getCambioDeSalario()
    {
        return $this->cambioDeSalario;
    }

    /**
     * Set trabajadoresDeEstipendio
     *
     * @param string $trabajadoresDeEstipendio
     * @return RhClavesTarjeta
     */
    public function setTrabajadoresDeEstipendio($trabajadoresDeEstipendio)
    {
        $this->trabajadoresDeEstipendio = $trabajadoresDeEstipendio;

        return $this;
    }

    /**
     * Get trabajadoresDeEstipendio
     *
     * @return string 
     */
    public function getTrabajadoresDeEstipendio()
    {
        return $this->trabajadoresDeEstipendio;
    }

    /**
     * Set interrupcionLaboral
     *
     * @param string $interrupcionLaboral
     * @return RhClavesTarjeta
     */
    public function setInterrupcionLaboral($interrupcionLaboral)
    {
        $this->interrupcionLaboral = $interrupcionLaboral;

        return $this;
    }

    /**
     * Get interrupcionLaboral
     *
     * @return string 
     */
    public function getInterrupcionLaboral()
    {
        return $this->interrupcionLaboral;
    }

    /**
     * Set rehabilitacionOPension
     *
     * @param string $rehabilitacionOPension
     * @return RhClavesTarjeta
     */
    public function setRehabilitacionOPension($rehabilitacionOPension)
    {
        $this->rehabilitacionOPension = $rehabilitacionOPension;

        return $this;
    }

    /**
     * Get rehabilitacionOPension
     *
     * @return string 
     */
    public function getRehabilitacionOPension()
    {
        return $this->rehabilitacionOPension;
    }

    /**
     * Set suspensionLaboral
     *
     * @param string $suspensionLaboral
     * @return RhClavesTarjeta
     */
    public function setSuspensionLaboral($suspensionLaboral)
    {
        $this->suspensionLaboral = $suspensionLaboral;

        return $this;
    }

    /**
     * Get suspensionLaboral
     *
     * @return string 
     */
    public function getSuspensionLaboral()
    {
        return $this->suspensionLaboral;
    }

    /**
     * Set maternidad
     *
     * @param string $maternidad
     * @return RhClavesTarjeta
     */
    public function setMaternidad($maternidad)
    {
        $this->maternidad = $maternidad;

        return $this;
    }

    /**
     * Get maternidad
     *
     * @return string 
     */
    public function getMaternidad()
    {
        return $this->maternidad;
    }

    /**
     * Set prestacionSocial
     *
     * @param string $prestacionSocial
     * @return RhClavesTarjeta
     */
    public function setPrestacionSocial($prestacionSocial)
    {
        $this->prestacionSocial = $prestacionSocial;

        return $this;
    }

    /**
     * Get prestacionSocial
     *
     * @return string 
     */
    public function getPrestacionSocial()
    {
        return $this->prestacionSocial;
    }

    /**
     * Set trabajadorMovilizado
     *
     * @param string $trabajadorMovilizado
     * @return RhClavesTarjeta
     */
    public function setTrabajadorMovilizado($trabajadorMovilizado)
    {
        $this->trabajadorMovilizado = $trabajadorMovilizado;

        return $this;
    }

    /**
     * Get trabajadorMovilizado
     *
     * @return string 
     */
    public function getTrabajadorMovilizado()
    {
        return $this->trabajadorMovilizado;
    }

    /**
     * Set primas
     *
     * @param string $primas
     * @return RhClavesTarjeta
     */
    public function setPrimas($primas)
    {
        $this->primas = $primas;

        return $this;
    }

    /**
     * Get primas
     *
     * @return string 
     */
    public function getPrimas()
    {
        return $this->primas;
    }

    /**
     * Set pagoPorRendimiento
     *
     * @param string $pagoPorRendimiento
     * @return RhClavesTarjeta
     */
    public function setPagoPorRendimiento($pagoPorRendimiento)
    {
        $this->pagoPorRendimiento = $pagoPorRendimiento;

        return $this;
    }

    /**
     * Get pagoPorRendimiento
     *
     * @return string 
     */
    public function getPagoPorRendimiento()
    {
        return $this->pagoPorRendimiento;
    }

    /**
     * Set subsidio
     *
     * @param string $subsidio
     * @return RhClavesTarjeta
     */
    public function setSubsidio($subsidio)
    {
        $this->subsidio = $subsidio;

        return $this;
    }

    /**
     * Get subsidio
     *
     * @return string 
     */
    public function getSubsidio()
    {
        return $this->subsidio;
    }

    /**
     * Set horasExtra
     *
     * @param string $horasExtra
     * @return RhClavesTarjeta
     */
    public function setHorasExtra($horasExtra)
    {
        $this->horasExtra = $horasExtra;

        return $this;
    }

    /**
     * Get horasExtra
     *
     * @return string 
     */
    public function getHorasExtra()
    {
        return $this->horasExtra;
    }

    /**
     * Set dobleTurno
     *
     * @param string $dobleTurno
     * @return RhClavesTarjeta
     */
    public function setDobleTurno($dobleTurno)
    {
        $this->dobleTurno = $dobleTurno;

        return $this;
    }

    /**
     * Get dobleTurno
     *
     * @return string 
     */
    public function getDobleTurno()
    {
        return $this->dobleTurno;
    }

    /**
     * Get idUser
     *
     * @return string 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set fechaOp
     *
     * @param \DateTime $fechaOp
     * @return RhClavesTarjeta
     */
    public function setFechaOp($fechaOp)
    {
        $this->fechaOp = $fechaOp;

        return $this;
    }

    /**
     * Get fechaOp
     *
     * @return \DateTime 
     */
    public function getFechaOp()
    {
        return $this->fechaOp;
    }

    /**
     * Set estimulacion
     *
     * @param string $estimulacion
     * @return RhClavesTarjeta
     */
    public function setEstimulacion($estimulacion)
    {
        $this->estimulacion = $estimulacion;

        return $this;
    }

    /**
     * Get estimulacion
     *
     * @return string 
     */
    public function getEstimulacion()
    {
        return $this->estimulacion;
    }

    /**
     * Set medidasSalariales
     *
     * @param string $medidasSalariales
     * @return RhClavesTarjeta
     */
    public function setMedidasSalariales($medidasSalariales)
    {
        $this->medidasSalariales = $medidasSalariales;

        return $this;
    }

    /**
     * Get medidasSalariales
     *
     * @return string 
     */
    public function getMedidasSalariales()
    {
        return $this->medidasSalariales;
    }

    /**
     * Set albergamiento
     *
     * @param string $albergamiento
     * @return RhClavesTarjeta
     */
    public function setAlbergamiento($albergamiento)
    {
        $this->albergamiento = $albergamiento;

        return $this;
    }

    /**
     * Get albergamiento
     *
     * @return string 
     */
    public function getAlbergamiento()
    {
        return $this->albergamiento;
    }

    /**
     * Set idoneidad
     *
     * @param string $idoneidad
     * @return RhClavesTarjeta
     */
    public function setIdoneidad($idoneidad)
    {
        $this->idoneidad = $idoneidad;

        return $this;
    }

    /**
     * Get idoneidad
     *
     * @return string 
     */
    public function getIdoneidad()
    {
        return $this->idoneidad;
    }

    /**
     * Set iet
     *
     * @param string $iet
     * @return RhClavesTarjeta
     */
    public function setIet($iet)
    {
        $this->iet = $iet;

        return $this;
    }

    /**
     * Get iet
     *
     * @return string 
     */
    public function getIet()
    {
        return $this->iet;
    }

    /**
     * Set ets
     *
     * @param string $ets
     * @return RhClavesTarjeta
     */
    public function setEts($ets)
    {
        $this->ets = $ets;

        return $this;
    }

    /**
     * Get ets
     *
     * @return string 
     */
    public function getEts()
    {
        return $this->ets;
    }

    /**
     * Set retribucionComplementaria
     *
     * @param string $retribucionComplementaria
     * @return RhClavesTarjeta
     */
    public function setRetribucionComplementaria($retribucionComplementaria)
    {
        $this->retribucionComplementaria = $retribucionComplementaria;

        return $this;
    }

    /**
     * Get retribucionComplementaria
     *
     * @return string 
     */
    public function getRetribucionComplementaria()
    {
        return $this->retribucionComplementaria;
    }
}
