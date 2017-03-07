<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SystemTraceL2
 *
 * @ORM\Table(name="System_Trace_L2")
 * @ORM\Entity
 */
class SystemTraceL2
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="TableName", type="string", length=128, nullable=true)
     */
    private $tablename;

    /**
     * @var string
     *
     * @ORM\Column(name="Action", type="string", length=1, nullable=true)
     */
    private $action;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ActionDate", type="datetime", nullable=true)
     */
    private $actiondate;

    /**
     * @var string
     *
     * @ORM\Column(name="UserName", type="string", length=128, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="AppName", type="string", length=128, nullable=true)
     */
    private $appname;

    /**
     * @var string
     *
     * @ORM\Column(name="HostName", type="string", length=128, nullable=true)
     */
    private $hostname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Notificado", type="boolean", nullable=true)
     */
    private $notificado;



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
     * Set tablename
     *
     * @param string $tablename
     * @return SystemTraceL2
     */
    public function setTablename($tablename)
    {
        $this->tablename = $tablename;

        return $this;
    }

    /**
     * Get tablename
     *
     * @return string 
     */
    public function getTablename()
    {
        return $this->tablename;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return SystemTraceL2
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set actiondate
     *
     * @param \DateTime $actiondate
     * @return SystemTraceL2
     */
    public function setActiondate($actiondate)
    {
        $this->actiondate = $actiondate;

        return $this;
    }

    /**
     * Get actiondate
     *
     * @return \DateTime 
     */
    public function getActiondate()
    {
        return $this->actiondate;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return SystemTraceL2
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set appname
     *
     * @param string $appname
     * @return SystemTraceL2
     */
    public function setAppname($appname)
    {
        $this->appname = $appname;

        return $this;
    }

    /**
     * Get appname
     *
     * @return string 
     */
    public function getAppname()
    {
        return $this->appname;
    }

    /**
     * Set hostname
     *
     * @param string $hostname
     * @return SystemTraceL2
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * Get hostname
     *
     * @return string 
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Set notificado
     *
     * @param boolean $notificado
     * @return SystemTraceL2
     */
    public function setNotificado($notificado)
    {
        $this->notificado = $notificado;

        return $this;
    }

    /**
     * Get notificado
     *
     * @return boolean 
     */
    public function getNotificado()
    {
        return $this->notificado;
    }
}
