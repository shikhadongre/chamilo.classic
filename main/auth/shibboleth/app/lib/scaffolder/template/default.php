<?php

/**
 *
 * @copyright (c) 2012 University of Geneva
 * @license GNU General Public License - http://www.gnu.org/copyleft/gpl.html
 * @author Laurent Opprecht <laurent@opprecht.info>
 */

echo '<?php';
?>

/**
 * This file is autogenerated. Do not modifiy it.
 */

/**
 *
 * Model for table <?php echo $table_name ?> 
 *
 * @copyright (c) 2012 University of Geneva
 * @license GNU General Public License - http://www.gnu.org/copyleft/gpl.html
 * @author Laurent Opprecht <laurent@opprecht.info>
 */
class <?php echo $prefix . $class_name ?>

{

    /**
    * Store for <?php echo $class_name ?> objects. Interact with the database.
    *
    * @return <?php echo $class_name ?>Store 
    */
    public static function store()
    {
        static $result = false;
        if (empty($result))
        {
            $result = new <?php echo $class_name ?>Store();
        }
        return $result;
    }
        
    /**
     *
     * @return <?php echo $class_name ?> 
     */
    public static function create($data = null)
    {
        return self::store()->create_object($data);
    }   

<?php foreach($fields as $field){?>
    public $<?php echo $field->name; ?> = <?php echo $field->def ? $field->def : 'null'; ?>;    
<?php }?> 
    
    /**
     *
     * @return bool 
     */
    public function save()
    {
        return self::store()->save($this);
    }
    
}

/**
 * Store for <?php echo $class_name ?> objects. Interact with the database.
 *
 * @copyright (c) 2012 University of Geneva
 * @license GNU General Public License - http://www.gnu.org/copyleft/gpl.html
 * @author Laurent Opprecht <laurent@opprecht.info>
 */
class <?php echo $prefix . $class_name ?>Store extends Store
{

    /**
     *
     * @return <?php echo $class_name ?>Store 
     */
    public static function instance()
    {
        static $result = false;
        if (empty($result))
        {
            $result = new self();
        }
        return $result;
    }
    
    public function __construct()
    {
        parent::__construct('<?php echo $table_name;?>', '<?php echo $class_name;?>', '<?php echo $id_name;?>');
    }
    
    /**
     *
     * @return <?php echo $class_name ?> 
     */
    public function get($w)
    {
        $args = func_get_args();
        $f = array('parent', 'get');
        return call_user_func_array($f, $args);
    }    
    
    /**
     *
     * @return <?php echo $class_name ?> 
     */
    public function create_object($data)
    {
        return parent::create_object($data);
    }    
<?php foreach($keys as $key){?>
    
    /**
     *
     * @return <?php echo $class_name ?> 
     */
    public function get_by_<?php echo $key ?>($value)
    {
        return $this->get(array('<?php echo $key; ?>' => $value));
    }    
    
    /**
     *
     * @return bool 
     */
    public function <?php echo $key ?>_exists($value)
    {
        return $this->exist(array('<?php echo $key; ?>' => $value));
    }     
    
    /**
     *
     * @return bool 
     */
    public function delete_by_<?php echo $key ?>($value)
    {
        return $this->delete(array('<?php echo $key; ?>' => $value));
    }    
<?php }?>     
}