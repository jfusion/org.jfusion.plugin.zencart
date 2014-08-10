<?php namespace JFusion\Plugins\wordpress;
/**
 * @category   Plugins
 * @package    JFusion\Plugins
 * @subpackage zencart
 * @author     JFusion Team <webmaster@jfusion.org>
 * @copyright  2008 JFusion. All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link       http://www.jfusion.org
 */

use JFusion\Plugin\Plugin_Front;

/**
 * JFusion Front Class for zencart
 * For detailed descriptions on these functions please check Plugin_Front
 *
 * @category   Plugins
 * @package    JFusion\Plugins
 * @subpackage zencart
 * @author     JFusion Team <webmaster@jfusion.org>
 * @copyright  2008 JFusion. All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link       http://www.jfusion.org
 */
class Front extends Plugin_Front
{
    /**
     * @return string
     */
    function getRegistrationURL()
    {
        return 'index.php?main_page=login';
    }

    /**
     * @return string
     */
    function getLostPasswordURL()
    {
        return 'index.php?main_page=password_forgotten';
    }

    /**
     * @return string
     */
    function getLostUsernameURL()
    {
        return 'index.php?main_page=password_forgotten';
    }
}