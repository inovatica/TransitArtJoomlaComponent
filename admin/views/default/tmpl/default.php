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
<div class="alert alert-info">
    <?php echo JText::_('COM_TRANSITART_CONFIG_INFO'); ?>
    <br/>
    <?php echo JText::sprintf('COM_TRANSITART_CONTACT', $this->getPageUrl()); ?>
</div>
<div style="margin: 10px 0;">
    <img src="<?= $this->getLogoPath() ?> " width="500px"/>
</div>