<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @license see /license.txt
 * @author autogenerated
 */
class QuizRelQuestion extends \CourseEntity
{
    /**
     * @return \Entity\Repository\QuizRelQuestionRepository
     */
     public static function repository(){
        return \Entity\Repository\QuizRelQuestionRepository::instance();
    }

    /**
     * @return \Entity\QuizRelQuestion
     */
     public static function create(){
        return new self();
    }

    /**
     * @var integer $c_id
     */
    protected $c_id;

    /**
     * @var integer $question_id
     */
    protected $question_id;

    /**
     * @var integer $exercice_id
     */
    protected $exercice_id;

    /**
     * @var integer $question_order
     */
    protected $question_order;


    /**
     * Set c_id
     *
     * @param integer $value
     * @return QuizRelQuestion
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
     * Set question_id
     *
     * @param integer $value
     * @return QuizRelQuestion
     */
    public function set_question_id($value)
    {
        $this->question_id = $value;
        return $this;
    }

    /**
     * Get question_id
     *
     * @return integer 
     */
    public function get_question_id()
    {
        return $this->question_id;
    }

    /**
     * Set exercice_id
     *
     * @param integer $value
     * @return QuizRelQuestion
     */
    public function set_exercice_id($value)
    {
        $this->exercice_id = $value;
        return $this;
    }

    /**
     * Get exercice_id
     *
     * @return integer 
     */
    public function get_exercice_id()
    {
        return $this->exercice_id;
    }

    /**
     * Set question_order
     *
     * @param integer $value
     * @return QuizRelQuestion
     */
    public function set_question_order($value)
    {
        $this->question_order = $value;
        return $this;
    }

    /**
     * Get question_order
     *
     * @return integer 
     */
    public function get_question_order()
    {
        return $this->question_order;
    }
}