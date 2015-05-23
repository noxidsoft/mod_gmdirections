<?php
/**
 * @version      $Id$
 * @package      Google Map - Directions
 * @subpackage   mod_gmdirections
 * @copyright    Copyright (C) 2007-2013 Noxidsoft. All rights reserved.
 * @license      GNU General Public License <http://www.gnu.org/copyleft/gpl.html>
 * @author       Noxidsoft <admin@noxidsoft.com>
 */

defined('_JEXEC') or die;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_gmdirections', $params->get('layout', 'default'));