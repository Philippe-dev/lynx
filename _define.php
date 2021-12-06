<?php
/**
 * @brief Lynx Browser, a theme for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Themes
 *
 * @author Philippe aka amalgame
 *
 * @copyright Philippe philippe@dissitou.org
 * @copyright GPL-2.0
 */

if (!defined('DC_RC_PATH')) {
    return;
}

$this->registerModule(
    "Lynx Browser",									// Name
    "Imageless theme for Dotclear",					// Description
    "Philippe aka amalgame",						// Author
    '3.1',											// Version
    [												// Properties
        'requires'          => [['core', '2.16']],	// Dependencies
        'standalone_config' => true,
        'type'              => 'theme',
        'tplset' 			=> 'mustek'
    ]
);
