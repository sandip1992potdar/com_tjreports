<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Tjreports
 * @author     Parth Lawate <contact@techjoomla.com>
 * @copyright  2016 Parth Lawate
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_tjreports'))
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

if (!defined('DS'))
{
	define('DS', '/');
}

global $wrapperDiv;

/* define wrapper div*/
if (JVERSION < '3.0')
{
	define('COM_TJLMS_WRAPPER_DIV', 'techjoomla-bootstrap tjlms-wrapper  row-fluid');
}
else
{
	define('COM_TJLMS_WRAPPER_DIV', 'tjlms-wrapper row-fluid');
}

$document = JFactory::getDocument();
$document->addStyleSheet(JUri::root(true) . '/media/com_tjreports/css/font-awesome/css/font-awesome.min.css');

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Tjreports', JPATH_COMPONENT_ADMINISTRATOR);

$controller = JControllerLegacy::getInstance('Tjreports');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
