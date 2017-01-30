<?php
/**
 * @copyright
 * @var \Joomla\Registry\Registry $params
 * @var array $module
 */

defined('_JEXEC') or die;

$zaposleni     	 = $params->get('zaposleni');
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

require JModuleHelper::getLayoutPath('mod_zaposleni', $params->get('layout', 'default'));