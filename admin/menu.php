<?php
/**
 * admin - menu
 *
 * @copyright	Geekwright, LLC http://geekwright.com
 * @license	GNU General Public License (GPL)
 * @since	1.0
 * @author	Richard Griffith richard@geekwright.com
 * @package	qr
 * @version	$Id$
 *
 **/

$adminmenu[1] = array(
	'title'	=> _MI_QRMODULE_HOME ,
	'link'	=> 'admin/index.php' ,
	'desc'	=> _MI_QRMODULE_HOME_DESC,
	'icon'	=> 'images/admin/home.png'
) ;

$adminmenu[] = array(
	'title'	=> _MI_QRMODULE_ABOUT ,
	'link'	=> 'admin/about.php' ,
	'desc'	=> _MI_QRMODULE_ABOUT_DESC,
	'icon'	=> 'images/admin/about.png'
) ;

$adminmenu[] = array(
	'title'	=> _MI_QRMODULE_LICENSE ,
	'link'	=> 'admin/license.php' ,
	'desc'	=> _MI_QRMODULE_LICENSE_DESC,
	'icon'	=> 'images/admin/license.png'
) ;

$adminmenu[] = array(
	'title'	=> _MI_QRMODULE_TROUBLESHOOT ,
	'link'	=> 'admin/troubleshoot.php' ,
	'desc'	=> _MI_QRMODULE_TROUBLESHOOT_DESC,
	'icon'	=> 'images/admin/troubleshoot.png'
) ;
?>
