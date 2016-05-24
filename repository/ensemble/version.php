<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


/**
 * Ensemble Video repository plugin.
 *
 * @package    repository_ensemble
 * @copyright  2012 Liam Moran, Nathan Baxley, University of Illinois
 *             2013 Symphony Video, Inc.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// You are on the MOODLE_29_STABLE branch.  Do NOT update the version
// branching date rather update the release increment.
$plugin->version        = 2015060502;
$plugin->release        = '2.9 (Build: 2015060502)';
$plugin->maturity       = MATURITY_STABLE;
$plugin->requires       = 2014111000;
$plugin->component      = 'repository_ensemble';
$plugin->dependencies   = array('filter_ensemble' => 2015060500);
