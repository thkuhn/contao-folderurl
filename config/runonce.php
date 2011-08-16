<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Andreas Schempp 2011
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id$
 */


class FolderUrlRunonce extends Controller
{
	
	public function run()
	{
		$this->import('Database');
		
		if (!$this->Database->fieldExists('languageAlias', 'tl_page'))
		{
			$this->Database->query("ALTER TABLE tl_page ADD `languageAlias` varchar(8) NOT NULL default ''");
			$this->Database->prepare("UPDATe tl_page SET languageAlias=? WHERE type='root'")->execute($GLOBALS['TL_CONFIG']['languageAlias']);
		}
		
		if (!$this->Database->fieldExists('folderAlias', 'tl_page'))
		{
			$this->Database->query("ALTER TABLE tl_page ADD `folderAlias` char(1) NOT NULL default ''");
			$this->Database->prepare("UPDATe tl_page SET languageAlias=? WHERE type='root'")->execute(($GLOBALS['TL_CONFIG']['folderAlias'] ? '1' : ''));
		}
	}
}


$objFolderUrlRunonce = new FolderUrlRunonce();
$objFolderUrlRunonce->run();
