<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
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
 * @copyright  Andreas Schempp 2008-2010
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id$
 */


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = preg_replace('@(\bdisableAlias\b)@', '$1,folderAlias,languageAlias', $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']);
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = preg_replace('@(\ballowedTags\b)@', '$1,urlKeywords', $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']);


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['urlKeywords'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['urlKeywords'],
	'inputType'		=> 'text',
	'eval'			=> array('tl_class'=>'long'),
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['folderAlias'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['folderAlias'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['languageAlias'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['languageAlias'],
	'inputType'		=> 'radio',
	'default'		=> 'none',
	'options'		=> array('none', 'left', 'right'),
	'reference'		=> &$GLOBALS['TL_LANG']['tl_settings']['languageAlias_ref'],
	'eval'			=> array('tl_class'=>'w50'),
);

