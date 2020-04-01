<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.LegacyMVC
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;

/**
 * Joomla! Legacy MVC plugin.
 *
 * @since  4.0
 */
class PlgSystemLegacyMVC extends CMSPlugin
{
	/**
	 * Register legacy MVC classes in the autoloader.
	 *
	 * @return  void
	 *
	 * @since   4.0
	 */
	public function onAfterInitialise()
	{
		JLoader::register('\JController', __DIR__ . '/src/controller/controller.php');
		JLoader::register('\JControllerBase', __DIR__ . '/src/controller/base.php');
		JLoader::register('\JModel', __DIR__ . '/src/model/model.php');
		JLoader::register('\JModelBase', __DIR__ . '/src/model/base.php');
		JLoader::register('\JModelDatabase', __DIR__ . '/src/model/database.php');
		JLoader::register('\JView', __DIR__ . '/src/view/view.php');
		JLoader::register('\JViewBase', __DIR__ . '/src/view/base.php');
		JLoader::register('\JViewHtml', __DIR__ . '/src/view/html.php');
	}
}
