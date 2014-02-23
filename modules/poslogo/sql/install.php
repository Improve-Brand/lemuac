<?php

// Init
$sql = array();

// Create Table in Database
        $sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'pos_logo` (
				  `id_pos_logo` int(10) NOT NULL AUTO_INCREMENT,
		          `image` longtext NOT NULL,
				  `active` int NOT NULL,
                  `porder` int NOT NULL,
  		PRIMARY KEY (`id_pos_logo`)
		) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

	   $sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'pos_logo_lang` (
				`id_pos_logo` int(11) unsigned NOT NULL,
				`id_lang` int(11) unsigned NOT NULL,
				`title` varchar(250) NOT NULL,
				`link` varchar(250) NOT NULL DEFAULT "#",
				`description` longtext NOT NULL,
				PRIMARY KEY (`id_pos_logo`,`id_lang`)
			) ENGINE = ' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

				
        $sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'pos_logo_shop` (
                    `id_pos_logo` int(11) unsigned NOT NULL,
                    `id_shop` int(11) unsigned NOT NULL,
                    PRIMARY KEY (`id_pos_logo`,`id_shop`)
                ) ENGINE = ' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

    $doc = new DOMDocument();
    $file = _PS_MODULE_DIR_ . DS . 'poslogo' . DS . 'sql' . DS . 'logo.xml';
    $doc->load($file);
    $blocks = $doc->getElementsByTagName("logo");
    foreach ($blocks as $block) {
        $ids = $block->getElementsByTagName("id_pos_logo");
        $id = $ids->item(0)->nodeValue;
        $actives = $block->getElementsByTagName("active");
        $active = $actives->item(0)->nodeValue;
        $porders = $block->getElementsByTagName("porder");
        $porder = $porders->item(0)->nodeValue;
        //  echo $id.'-'.$title.'-'.$description.'-'.$link.'-'.$porder; echo "<br>";
        $sql[] = "INSERT INTO `" . _DB_PREFIX_ . "pos_logo` (`id_pos_logo`, `porder`,`active`) 
           VALUES('".$id."','".$porder."','".$active."');";
    }
	
	 $blocklangs = $doc->getElementsByTagName("logo_lang");
    foreach ($blocklangs as $blocklang) {
        $ids = $blocklang->getElementsByTagName("id_pos_logo");
        $id = $ids->item(0)->nodeValue;
		$id_langs = $blocklang->getElementsByTagName("id_lang");
        $id_lang = $id_langs->item(0)->nodeValue;  
        $titles = $blocklang->getElementsByTagName("title");
        $title = $titles->item(0)->nodeValue;
        $links = $blocklang->getElementsByTagName("link");
        $link = $links->item(0)->nodeValue;
        $descriptions = $blocklang->getElementsByTagName("description");
        $description = $descriptions->item(0)->nodeValue;
        //  echo $id.'-'.$title.'-'.$description.'-'.$link.'-'.$porder; echo "<br>";
        $sql[] = "INSERT INTO `" . _DB_PREFIX_ . "pos_logo_lang` (`id_pos_logo`,`id_lang`, `title`, `link`, `description`) 
           VALUES('".$id."','".$id_lang."','".$title."','".$link."','".$description."');";
    }

    $blockshops = $doc->getElementsByTagName("logo_shop");
    foreach ($blockshops as $blockshop) {
        $ids = $blockshop->getElementsByTagName("id_pos_logo");
        $id = $ids->item(0)->nodeValue;
        $id_shops = $blockshop->getElementsByTagName("id_shop");
        $id_shop = $id_shops->item(0)->nodeValue;
        //echo $id.'-'.$id_shop;
        $sql[] = "insert into `" . _DB_PREFIX_ . "pos_logo_shop`(`id_pos_logo`, `id_shop`) 
                VALUES('" . $id . "','" . $id_shop . "')";
    }