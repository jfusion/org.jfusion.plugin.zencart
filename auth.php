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

use JFusion\Plugin\Plugin_Auth;
use JFusion\User\Userinfo;

/**
 * JFusion Auth Class for zencart
 * For detailed descriptions on these functions please check Plugin_Auth
 *
 * @category   Plugins
 * @package    JFusion\Plugins
 * @subpackage zencart
 * @author     JFusion Team <webmaster@jfusion.org>
 * @copyright  2008 JFusion. All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link       http://www.jfusion.org
 */
class Auth extends Plugin_Auth
{
    /**
     * @param Userinfo $userinfo
     * @return string
     */
    function generateEncryptedPassword(Userinfo $userinfo)
    {
        if ($userinfo->password_salt) {
            return md5($userinfo->password_salt . $userinfo->password_clear);
        } else {
            return md5($userinfo->password_clear);
        }
    }
}