<?php

<<<<<<< HEAD
/**
 * @package TransitArt
 * @version 1.0
 * @author Inovatica
 * @copyright (C) 2015- TransitArt
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * 
 */

=======
>>>>>>> ed3d1b3537dc943fab8d99a69a6dbc1c086f18f0
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

$controller = JControllerLegacy::getInstance('Transitart');

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
