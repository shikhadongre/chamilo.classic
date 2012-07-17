<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @license see /license.txt
 * @author autogenerated
 */
class WikiConf extends \CourseEntity
{
    /**
     * @return \Entity\Repository\WikiConfRepository
     */
     public static function repository(){
        return \Entity\Repository\WikiConfRepository::instance();
    }

    /**
     * @return \Entity\WikiConf
     */
     public static function create(){
        return new self();
    }

    /**
     * @var integer $c_id
     */
    protected $c_id;

    /**
     * @var integer $page_id
     */
    protected $page_id;

    /**
     * @var text $task
     */
    protected $task;

    /**
     * @var text $feedback1
     */
    protected $feedback1;

    /**
     * @var text $feedback2
     */
    protected $feedback2;

    /**
     * @var text $feedback3
     */
    protected $feedback3;

    /**
     * @var string $fprogress1
     */
    protected $fprogress1;

    /**
     * @var string $fprogress2
     */
    protected $fprogress2;

    /**
     * @var string $fprogress3
     */
    protected $fprogress3;

    /**
     * @var integer $max_size
     */
    protected $max_size;

    /**
     * @var integer $max_text
     */
    protected $max_text;

    /**
     * @var integer $max_version
     */
    protected $max_version;

    /**
     * @var datetime $startdate_assig
     */
    protected $startdate_assig;

    /**
     * @var datetime $enddate_assig
     */
    protected $enddate_assig;

    /**
     * @var integer $delayedsubmit
     */
    protected $delayedsubmit;


    /**
     * Set c_id
     *
     * @param integer $value
     * @return WikiConf
     */
    public function set_c_id($value)
    {
        $this->c_id = $value;
        return $this;
    }

    /**
     * Get c_id
     *
     * @return integer 
     */
    public function get_c_id()
    {
        return $this->c_id;
    }

    /**
     * Set page_id
     *
     * @param integer $value
     * @return WikiConf
     */
    public function set_page_id($value)
    {
        $this->page_id = $value;
        return $this;
    }

    /**
     * Get page_id
     *
     * @return integer 
     */
    public function get_page_id()
    {
        return $this->page_id;
    }

    /**
     * Set task
     *
     * @param text $value
     * @return WikiConf
     */
    public function set_task($value)
    {
        $this->task = $value;
        return $this;
    }

    /**
     * Get task
     *
     * @return text 
     */
    public function get_task()
    {
        return $this->task;
    }

    /**
     * Set feedback1
     *
     * @param text $value
     * @return WikiConf
     */
    public function set_feedback1($value)
    {
        $this->feedback1 = $value;
        return $this;
    }

    /**
     * Get feedback1
     *
     * @return text 
     */
    public function get_feedback1()
    {
        return $this->feedback1;
    }

    /**
     * Set feedback2
     *
     * @param text $value
     * @return WikiConf
     */
    public function set_feedback2($value)
    {
        $this->feedback2 = $value;
        return $this;
    }

    /**
     * Get feedback2
     *
     * @return text 
     */
    public function get_feedback2()
    {
        return $this->feedback2;
    }

    /**
     * Set feedback3
     *
     * @param text $value
     * @return WikiConf
     */
    public function set_feedback3($value)
    {
        $this->feedback3 = $value;
        return $this;
    }

    /**
     * Get feedback3
     *
     * @return text 
     */
    public function get_feedback3()
    {
        return $this->feedback3;
    }

    /**
     * Set fprogress1
     *
     * @param string $value
     * @return WikiConf
     */
    public function set_fprogress1($value)
    {
        $this->fprogress1 = $value;
        return $this;
    }

    /**
     * Get fprogress1
     *
     * @return string 
     */
    public function get_fprogress1()
    {
        return $this->fprogress1;
    }

    /**
     * Set fprogress2
     *
     * @param string $value
     * @return WikiConf
     */
    public function set_fprogress2($value)
    {
        $this->fprogress2 = $value;
        return $this;
    }

    /**
     * Get fprogress2
     *
     * @return string 
     */
    public function get_fprogress2()
    {
        return $this->fprogress2;
    }

    /**
     * Set fprogress3
     *
     * @param string $value
     * @return WikiConf
     */
    public function set_fprogress3($value)
    {
        $this->fprogress3 = $value;
        return $this;
    }

    /**
     * Get fprogress3
     *
     * @return string 
     */
    public function get_fprogress3()
    {
        return $this->fprogress3;
    }

    /**
     * Set max_size
     *
     * @param integer $value
     * @return WikiConf
     */
    public function set_max_size($value)
    {
        $this->max_size = $value;
        return $this;
    }

    /**
     * Get max_size
     *
     * @return integer 
     */
    public function get_max_size()
    {
        return $this->max_size;
    }

    /**
     * Set max_text
     *
     * @param integer $value
     * @return WikiConf
     */
    public function set_max_text($value)
    {
        $this->max_text = $value;
        return $this;
    }

    /**
     * Get max_text
     *
     * @return integer 
     */
    public function get_max_text()
    {
        return $this->max_text;
    }

    /**
     * Set max_version
     *
     * @param integer $value
     * @return WikiConf
     */
    public function set_max_version($value)
    {
        $this->max_version = $value;
        return $this;
    }

    /**
     * Get max_version
     *
     * @return integer 
     */
    public function get_max_version()
    {
        return $this->max_version;
    }

    /**
     * Set startdate_assig
     *
     * @param datetime $value
     * @return WikiConf
     */
    public function set_startdate_assig($value)
    {
        $this->startdate_assig = $value;
        return $this;
    }

    /**
     * Get startdate_assig
     *
     * @return datetime 
     */
    public function get_startdate_assig()
    {
        return $this->startdate_assig;
    }

    /**
     * Set enddate_assig
     *
     * @param datetime $value
     * @return WikiConf
     */
    public function set_enddate_assig($value)
    {
        $this->enddate_assig = $value;
        return $this;
    }

    /**
     * Get enddate_assig
     *
     * @return datetime 
     */
    public function get_enddate_assig()
    {
        return $this->enddate_assig;
    }

    /**
     * Set delayedsubmit
     *
     * @param integer $value
     * @return WikiConf
     */
    public function set_delayedsubmit($value)
    {
        $this->delayedsubmit = $value;
        return $this;
    }

    /**
     * Get delayedsubmit
     *
     * @return integer 
     */
    public function get_delayedsubmit()
    {
        return $this->delayedsubmit;
    }
}