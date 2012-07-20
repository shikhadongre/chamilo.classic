<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @license see /license.txt
 * @author autogenerated
 */
class Lp extends \CourseEntity
{
    /**
     * @return \Entity\Repository\LpRepository
     */
     public static function repository(){
        return \Entity\Repository\LpRepository::instance();
    }

    /**
     * @return \Entity\Lp
     */
     public static function create(){
        return new self();
    }

    /**
     * @var integer $c_id
     */
    protected $c_id;

    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @var integer $lp_type
     */
    protected $lp_type;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var text $ref
     */
    protected $ref;

    /**
     * @var text $description
     */
    protected $description;

    /**
     * @var text $path
     */
    protected $path;

    /**
     * @var boolean $force_commit
     */
    protected $force_commit;

    /**
     * @var string $default_view_mod
     */
    protected $default_view_mod;

    /**
     * @var string $default_encoding
     */
    protected $default_encoding;

    /**
     * @var integer $display_order
     */
    protected $display_order;

    /**
     * @var text $content_maker
     */
    protected $content_maker;

    /**
     * @var string $content_local
     */
    protected $content_local;

    /**
     * @var text $content_license
     */
    protected $content_license;

    /**
     * @var boolean $prevent_reinit
     */
    protected $prevent_reinit;

    /**
     * @var text $js_lib
     */
    protected $js_lib;

    /**
     * @var boolean $debug
     */
    protected $debug;

    /**
     * @var string $theme
     */
    protected $theme;

    /**
     * @var string $preview_image
     */
    protected $preview_image;

    /**
     * @var string $author
     */
    protected $author;

    /**
     * @var integer $session_id
     */
    protected $session_id;

    /**
     * @var integer $prerequisite
     */
    protected $prerequisite;

    /**
     * @var boolean $hide_toc_frame
     */
    protected $hide_toc_frame;

    /**
     * @var boolean $seriousgame_mode
     */
    protected $seriousgame_mode;

    /**
     * @var integer $use_max_score
     */
    protected $use_max_score;

    /**
     * @var integer $autolunch
     */
    protected $autolunch;

    /**
     * @var datetime $created_on
     */
    protected $created_on;

    /**
     * @var datetime $modified_on
     */
    protected $modified_on;

    /**
     * @var datetime $publicated_on
     */
    protected $publicated_on;

    /**
     * @var datetime $expired_on
     */
    protected $expired_on;


    /**
     * Set c_id
     *
     * @param integer $value
     * @return Lp
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
     * Set id
     *
     * @param integer $value
     * @return Lp
     */
    public function set_id($value)
    {
        $this->id = $value;
        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function get_id()
    {
        return $this->id;
    }

    /**
     * Set lp_type
     *
     * @param integer $value
     * @return Lp
     */
    public function set_lp_type($value)
    {
        $this->lp_type = $value;
        return $this;
    }

    /**
     * Get lp_type
     *
     * @return integer 
     */
    public function get_lp_type()
    {
        return $this->lp_type;
    }

    /**
     * Set name
     *
     * @param string $value
     * @return Lp
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * Set ref
     *
     * @param text $value
     * @return Lp
     */
    public function set_ref($value)
    {
        $this->ref = $value;
        return $this;
    }

    /**
     * Get ref
     *
     * @return text 
     */
    public function get_ref()
    {
        return $this->ref;
    }

    /**
     * Set description
     *
     * @param text $value
     * @return Lp
     */
    public function set_description($value)
    {
        $this->description = $value;
        return $this;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function get_description()
    {
        return $this->description;
    }

    /**
     * Set path
     *
     * @param text $value
     * @return Lp
     */
    public function set_path($value)
    {
        $this->path = $value;
        return $this;
    }

    /**
     * Get path
     *
     * @return text 
     */
    public function get_path()
    {
        return $this->path;
    }

    /**
     * Set force_commit
     *
     * @param boolean $value
     * @return Lp
     */
    public function set_force_commit($value)
    {
        $this->force_commit = $value;
        return $this;
    }

    /**
     * Get force_commit
     *
     * @return boolean 
     */
    public function get_force_commit()
    {
        return $this->force_commit;
    }

    /**
     * Set default_view_mod
     *
     * @param string $value
     * @return Lp
     */
    public function set_default_view_mod($value)
    {
        $this->default_view_mod = $value;
        return $this;
    }

    /**
     * Get default_view_mod
     *
     * @return string 
     */
    public function get_default_view_mod()
    {
        return $this->default_view_mod;
    }

    /**
     * Set default_encoding
     *
     * @param string $value
     * @return Lp
     */
    public function set_default_encoding($value)
    {
        $this->default_encoding = $value;
        return $this;
    }

    /**
     * Get default_encoding
     *
     * @return string 
     */
    public function get_default_encoding()
    {
        return $this->default_encoding;
    }

    /**
     * Set display_order
     *
     * @param integer $value
     * @return Lp
     */
    public function set_display_order($value)
    {
        $this->display_order = $value;
        return $this;
    }

    /**
     * Get display_order
     *
     * @return integer 
     */
    public function get_display_order()
    {
        return $this->display_order;
    }

    /**
     * Set content_maker
     *
     * @param text $value
     * @return Lp
     */
    public function set_content_maker($value)
    {
        $this->content_maker = $value;
        return $this;
    }

    /**
     * Get content_maker
     *
     * @return text 
     */
    public function get_content_maker()
    {
        return $this->content_maker;
    }

    /**
     * Set content_local
     *
     * @param string $value
     * @return Lp
     */
    public function set_content_local($value)
    {
        $this->content_local = $value;
        return $this;
    }

    /**
     * Get content_local
     *
     * @return string 
     */
    public function get_content_local()
    {
        return $this->content_local;
    }

    /**
     * Set content_license
     *
     * @param text $value
     * @return Lp
     */
    public function set_content_license($value)
    {
        $this->content_license = $value;
        return $this;
    }

    /**
     * Get content_license
     *
     * @return text 
     */
    public function get_content_license()
    {
        return $this->content_license;
    }

    /**
     * Set prevent_reinit
     *
     * @param boolean $value
     * @return Lp
     */
    public function set_prevent_reinit($value)
    {
        $this->prevent_reinit = $value;
        return $this;
    }

    /**
     * Get prevent_reinit
     *
     * @return boolean 
     */
    public function get_prevent_reinit()
    {
        return $this->prevent_reinit;
    }

    /**
     * Set js_lib
     *
     * @param text $value
     * @return Lp
     */
    public function set_js_lib($value)
    {
        $this->js_lib = $value;
        return $this;
    }

    /**
     * Get js_lib
     *
     * @return text 
     */
    public function get_js_lib()
    {
        return $this->js_lib;
    }

    /**
     * Set debug
     *
     * @param boolean $value
     * @return Lp
     */
    public function set_debug($value)
    {
        $this->debug = $value;
        return $this;
    }

    /**
     * Get debug
     *
     * @return boolean 
     */
    public function get_debug()
    {
        return $this->debug;
    }

    /**
     * Set theme
     *
     * @param string $value
     * @return Lp
     */
    public function set_theme($value)
    {
        $this->theme = $value;
        return $this;
    }

    /**
     * Get theme
     *
     * @return string 
     */
    public function get_theme()
    {
        return $this->theme;
    }

    /**
     * Set preview_image
     *
     * @param string $value
     * @return Lp
     */
    public function set_preview_image($value)
    {
        $this->preview_image = $value;
        return $this;
    }

    /**
     * Get preview_image
     *
     * @return string 
     */
    public function get_preview_image()
    {
        return $this->preview_image;
    }

    /**
     * Set author
     *
     * @param string $value
     * @return Lp
     */
    public function set_author($value)
    {
        $this->author = $value;
        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function get_author()
    {
        return $this->author;
    }

    /**
     * Set session_id
     *
     * @param integer $value
     * @return Lp
     */
    public function set_session_id($value)
    {
        $this->session_id = $value;
        return $this;
    }

    /**
     * Get session_id
     *
     * @return integer 
     */
    public function get_session_id()
    {
        return $this->session_id;
    }

    /**
     * Set prerequisite
     *
     * @param integer $value
     * @return Lp
     */
    public function set_prerequisite($value)
    {
        $this->prerequisite = $value;
        return $this;
    }

    /**
     * Get prerequisite
     *
     * @return integer 
     */
    public function get_prerequisite()
    {
        return $this->prerequisite;
    }

    /**
     * Set hide_toc_frame
     *
     * @param boolean $value
     * @return Lp
     */
    public function set_hide_toc_frame($value)
    {
        $this->hide_toc_frame = $value;
        return $this;
    }

    /**
     * Get hide_toc_frame
     *
     * @return boolean 
     */
    public function get_hide_toc_frame()
    {
        return $this->hide_toc_frame;
    }

    /**
     * Set seriousgame_mode
     *
     * @param boolean $value
     * @return Lp
     */
    public function set_seriousgame_mode($value)
    {
        $this->seriousgame_mode = $value;
        return $this;
    }

    /**
     * Get seriousgame_mode
     *
     * @return boolean 
     */
    public function get_seriousgame_mode()
    {
        return $this->seriousgame_mode;
    }

    /**
     * Set use_max_score
     *
     * @param integer $value
     * @return Lp
     */
    public function set_use_max_score($value)
    {
        $this->use_max_score = $value;
        return $this;
    }

    /**
     * Get use_max_score
     *
     * @return integer 
     */
    public function get_use_max_score()
    {
        return $this->use_max_score;
    }

    /**
     * Set autolunch
     *
     * @param integer $value
     * @return Lp
     */
    public function set_autolunch($value)
    {
        $this->autolunch = $value;
        return $this;
    }

    /**
     * Get autolunch
     *
     * @return integer 
     */
    public function get_autolunch()
    {
        return $this->autolunch;
    }

    /**
     * Set created_on
     *
     * @param datetime $value
     * @return Lp
     */
    public function set_created_on($value)
    {
        $this->created_on = $value;
        return $this;
    }

    /**
     * Get created_on
     *
     * @return datetime 
     */
    public function get_created_on()
    {
        return $this->created_on;
    }

    /**
     * Set modified_on
     *
     * @param datetime $value
     * @return Lp
     */
    public function set_modified_on($value)
    {
        $this->modified_on = $value;
        return $this;
    }

    /**
     * Get modified_on
     *
     * @return datetime 
     */
    public function get_modified_on()
    {
        return $this->modified_on;
    }

    /**
     * Set publicated_on
     *
     * @param datetime $value
     * @return Lp
     */
    public function set_publicated_on($value)
    {
        $this->publicated_on = $value;
        return $this;
    }

    /**
     * Get publicated_on
     *
     * @return datetime 
     */
    public function get_publicated_on()
    {
        return $this->publicated_on;
    }

    /**
     * Set expired_on
     *
     * @param datetime $value
     * @return Lp
     */
    public function set_expired_on($value)
    {
        $this->expired_on = $value;
        return $this;
    }

    /**
     * Get expired_on
     *
     * @return datetime 
     */
    public function get_expired_on()
    {
        return $this->expired_on;
    }
}