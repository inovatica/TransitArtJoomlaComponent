<?PHP

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
    
    public function __construct($config = array()){
        $this->params = $this->getParams();
        parent::__construct($config);
    }

    public function display($tpl = null) {
        parent::display($tpl);
    }
    
    /**
     * Return menu parameters if menu is active or component parameters where TransitArt menu item is not active
     * @return JRegistry
     */
    protected function getParams(){
        $menu = JFactory::getApplication()->getMenu()->getActive();
        if(!is_null($menu)){
            $params = $menu->params;
        }
        else{
            $params = JComponentHelper::getParams('com_transitart');
        }
        return $params;
    }


    protected function isConfigured() {
        return !empty($this->getApiKey()) && !empty($this->getState());
    }

    protected function getApiKey() {
        return $this->params->get('api_key');
    }

    protected function getState() {
        return $this->params->get('state');
    }

    protected function getLang() {
        $systemLangTag = JFactory::getLanguage()->getTag();
        return $systemLangTag === 'pl-PL' ? 'pl' : 'en';
    }

    protected function getCssUri() {
        $apiKey = $this->getApiKey();
        return 'http://transitart.io/wp-content/' . $apiKey . '/main.css';
    }

    protected function getJsUri() {
        $apiKey = $this->getApiKey();
        return 'http://transitart.io/wp-content/' . $apiKey . '/optimized-module.js';
    }

    protected function getLogoImagePath() {
        $uri = JURI::base();
        $uri .= 'components/com_transitart/media/img/logo.png';
        return $uri;
    }

    protected function getByTransitArtImagePath() {
        $uri = JURI::base();
        $uri .= 'components/com_transitart/media/img/by_transitart.png';
        return $uri;
    }

    protected function getPageUrl() {
        $uri = 'http://transitart.io/';
        $lang = JFactory::getLanguage()->getTag();
        if ($lang === 'pl-PL') {
            $uri .= 'pl/';
        } else {
            $uri .= 'en/';
        }
        return $uri;
    }

}
