<?php
/**
 * @version    SVN: <svn_id>
 * @package    Com_Reports
 * @copyright  Copyright (C) 2005 - 2014. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * Shika is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// No direct access
defined('_JEXEC') or die;
jimport('joomla.application.component.controlleradmin');

// Load frontend venues model
JLoader::import('com_tjreports.controllers.reports', JPATH_SITE . '/components');
