<?php
class Fractionslideshow extends ObjectModel
{
 	/** @var string Name */
		public $title1;
		public $title2;
        public $description;
        public $image;
        public $link;
		public $active;
        public $porder;
		public $width;
		public $height;
		public $kind_effect;

	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'pos_fraction',
		'multishop' => true,
		'multilang' => true,
		'primary' => 'id_pos_fraction',
		'fields' => array(
                    'title1' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName','lang' => true, 'required' => false, 'size' => 265),
					'title2' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName','lang' => true, 'required' => false, 'size' => 265),
					'link' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName','lang' => true, 'required' => false, 'size' => 265),
                    'description' => array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isString', 'size' => 3999999999999),
					
                    'image' => array('type' => self::TYPE_STRING, 'lang' => false, 'validate' => 'isString', 'required' => false, 'size' => 3999999999),
					'width' =>           array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => false),
					'height' =>           array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => false),
                    'active' =>           array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => false),
					'kind_effect' =>           array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => false),
                    'porder' =>           array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => false),
                ),
	);
}