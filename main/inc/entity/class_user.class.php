<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @license see /license.txt
 * @author autogenerated
 */
class ClassUser extends \Entity
{
    /**
     * @return \Entity\Repository\ClassUserRepository
     */
     public static function repository(){
        return \Entity\Repository\ClassUserRepository::instance();
    }

    /**
     * @return \Entity\ClassUser
     */
     public static function create(){
        return new self();
    }

    /**
     * @var integer $class_id
     */
    protected $class_id;

    /**
     * @var integer $user_id
     */
    protected $user_id;


    /**
     * Set class_id
     *
     * @param integer $value
     * @return ClassUser
     */
    public function set_class_id($value)
    {
        $this->class_id = $value;
        return $this;
    }

    /**
     * Get class_id
     *
     * @return integer 
     */
    public function get_class_id()
    {
        return $this->class_id;
    }

    /**
     * Set user_id
     *
     * @param integer $value
     * @return ClassUser
     */
    public function set_user_id($value)
    {
        $this->user_id = $value;
        return $this;
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function get_user_id()
    {
        return $this->user_id;
    }
}