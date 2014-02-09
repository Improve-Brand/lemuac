<?php
class Logo extends ObjectModel
{
 	/** @var string Name */
		public $title;
        public $description;
        public $image;
        public $link;
        public $porder;
        public $active;
	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'pos_logo',
		'multishop' => true,
		'multilang' => true,
		'primary' => 'id_pos_logo',
		'fields' => array(
                    'title' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName','lang' => true, 'required' => false, 'size' => 265),
                    'description' => array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isString', 'size' => 3999999999999),
                    'image' => array('type' => self::TYPE_STRING, 'lang' => false, 'validate' => 'isString', 'required' => false, 'size' => 3999999999),
                    'link' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName','lang' => true, 'required' => false, 'size' => 265),
                    'porder' =>           array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => false),
					'active' =>           array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => false),

                ),
	);
}