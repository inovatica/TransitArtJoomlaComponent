<?php

<<<<<<< HEAD
/**
 * @package TransitArt
 * @version 1.0
 * @author Inovatica
 * @copyright (C) 2015- TransitArt
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/

=======
>>>>>>> ed3d1b3537dc943fab8d99a69a6dbc1c086f18f0
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class TransitArtViewDefault extends JViewLegacy {

    public function display($tpl = null) {
        $this->addToolBar();
        parent::display($tpl);
    }

    protected function addToolBar() {
        JToolBarHelper::title(JText::_('COM_TRANSITART_TITLE'), '../');
        JToolBarHelper::preferences('com_transitart');
    }

    protected function getLogoPath() {
        $uri = JURI::base();
        $uri .= 'components/com_transitart/media/img/logo.png';
        return $uri;
    }

    protected function getPageUrl() {
        $uri = 'http://transitart.io/';
        $lang = JFactory::getLanguage()->getTag();
        if ($lang === 'pl-PL') {
            $uri .= 'pl/';
        } 
        else {
            $uri .= 'en/';
        }
        return $uri;
    }

}
