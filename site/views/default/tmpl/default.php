<<<<<<< HEAD
<?php
/**
 * @package TransitArt
 * @version 1.0
 * @author Inovatica
 * @copyright (C) 2015- TransitArt
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>

=======
>>>>>>> ed3d1b3537dc943fab8d99a69a6dbc1c086f18f0
<div id="transitart">
    
    <?php 
    if($this->isConfigured()): 
        $Document = JFactory::getDocument();
        $Document->addStyleSheet($this->getCssUri());
        $Document->addScript($this->getJsUri());
        ?>
        <div 
            id="poloko-module" 
            api-key="<?php echo $this->getApiKey() ?>" 
            page="<?php echo $this->getState() ?>" 
            lang="<?php echo $this->getLang() ?>">
            <div ui-view></div>
        </div>
        <a href="<?= $this->getPageUrl() ?>" class="transitart-link">
            <img src="<?= $this->getByTransitArtImagePath() ?>" />
        </a>
    <?php else : ?>
        <div class="transitart-logo">
            <img src="<?= $this->getLogoImagePath() ?>" />
            <div class="info">
                <?php echo JText::_('COM_TRANSITART_CONFIG_INFO') ?>
            </div>
        </div>
    <?php endif; ?>
    
</div>

