<?php

    // Init
    $sql = array();

    // Create Table in Database
    $sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'pos_fraction` (
                      `id_pos_fraction` int(10) NOT NULL AUTO_INCREMENT,
                      `image` longtext NOT NULL,
					  `width` int NOT NULL,
					  `height` int NOT NULL,
					  `active` int NOT NULL,
					  `kind_effect` int NOT NULL,
                      `porder` int NOT NULL,
                    PRIMARY KEY (`id_pos_fraction`)
                    ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';
					
	$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'pos_fraction_lang` (
		`id_pos_fraction` int(11) unsigned NOT NULL,
		`id_lang` int(11) unsigned NOT NULL,
		`title1` varchar(250) NOT NULL,
		`title2` varchar(250) NOT NULL,
		`link` varchar(250) NOT NULL DEFAULT "#",
		 `description` longtext NOT NULL,
		PRIMARY KEY (`id_pos_fraction`,`id_lang`)
	) ENGINE = ' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';


    $sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'pos_fraction_shop` (
		`id_pos_fraction` int(11) unsigned NOT NULL,
		`id_shop` int(11) unsigned NOT NULL,
		PRIMARY KEY (`id_pos_fraction`,`id_shop`)
	) ENGINE = ' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

   
     $doc = new DOMDocument();
    $file = _PS_MODULE_DIR_ . DS . 'posfraction' . DS . 'sql' . DS . 'slideshow.xml';
    $doc->load($file);
    $blocks = $doc->getElementsByTagName("slideshow");

    foreach ($blocks as $block) {
	
        $ids = $block->getElementsByTagName("id_pos_fraction");
        $id = $ids->item(0)->nodeValue;
      
		$widths = $block->getElementsByTagName("width");
		$width = $widths->item(0)->nodeValue;
		$heights = $block->getElementsByTagName("height");
        $height = $heights->item(0)->nodeValue;
		$kind_effects = $block->getElementsByTagName("kind_effect");
        $kind_effect = $kind_effects->item(0)->nodeValue;
        $porders = $block->getElementsByTagName("porder");
        $porder = $porders->item(0)->nodeValue;
		$actives = $block->getElementsByTagName("active");
        $active = $actives->item(0)->nodeValue;
        //  echo $id.'-'.$title.'-'.$description.'-'.$link.'-'.$porder; echo "<br>";
        $sql[] = "INSERT INTO `" . _DB_PREFIX_ . "pos_fraction` (`id_pos_fraction`, `width`,`height`, `kind_effect`, `porder`,`active`) 
           values('".$id."','".$width."','".$height."','".$kind_effect."','".$porder."','".$active."');"; 
    }
	
	$blocklangs = $doc->getElementsByTagName("slideshow_lang");

    foreach ($blocklangs as $blocklang) {
	
        $ids = $blocklang->getElementsByTagName("id_pos_fraction");
        $id = $ids->item(0)->nodeValue;
		$id_langs = $blocklang->getElementsByTagName("id_lang");
        $id_lang = $id_langs->item(0)->nodeValue;
        $titles = $blocklang->getElementsByTagName("title1");
        $title = $titles->item(0)->nodeValue;
		$title2s = $blocklang->getElementsByTagName("title2");
        $title2 = $title2s->item(0)->nodeValue;
        $links = $blocklang->getElementsByTagName("link");
        $link = $links->item(0)->nodeValue;
		$descriptions = $blocklang->getElementsByTagName("description");
        $description = $descriptions->item(0)->nodeValue;
		//  echo $id.'-'.$title.'-'.$description.'-'.$link.'-'.$porder; echo "<br>";
        $sql[] = "INSERT INTO `" . _DB_PREFIX_ . "pos_fraction_lang` (`id_pos_fraction`, `id_lang`,`title1`, `title2`, `link`,`description`) 
           values('".$id."','".$id_lang."','".$title."','".$title2."','".$link."','".$description."');"; 
    }

    $blockshops = $doc->getElementsByTagName("slideshow_shop");
    foreach ($blockshops as $blockshop) {
        $ids = $blockshop->getElementsByTagName("id_pos_fraction");
        $id = $ids->item(0)->nodeValue;
        $id_shops = $blockshop->getElementsByTagName("id_shop");
        $id_shop = $id_shops->item(0)->nodeValue;
        //echo $id.'-'.$id_shop;
        $sql[] = "INSERT INTO  `" . _DB_PREFIX_ . "pos_fraction_shop`(`id_pos_fraction`, `id_shop`) 
                VALUES('" . $id . "','" . $id_shop . "')";
    }
    