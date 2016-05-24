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

$string['video']            = 'Video';
$string['playlist']         = 'Playlist';
$string['videoRepo']        = 'Ensemble Videos';
$string['playlistRepo']     = 'Ensemble Playlists';
$string['pluginname']       = 'Ensemble Video repository';
$string['configplugin']     = 'Ensemble Video repository configuration';
$string['ensemble:view']    = 'Use Ensemble Video repository in file picker';
$string['ensembleURL']      = 'Ensemble URL';
$string['ensembleURLHelp']  = '<div>The URL for the application root of your Ensemble Video installation, e.g. "https://cloud.ensemblevideo.com" or "https://server.myschool.edu/ensemble"</div>';
$string['serviceUser']      = 'Service Account Username';
$string['serviceUserHelp']  = '<div>The Ensemble Video service account username. This account must have a "System Administrator" role within Ensemble.  Note: Do not include authentication domain here. Use the field below.</div>';
$string['servicePass']      = 'Service Account Password';
$string['servicePassHelp']  = '<div>The Ensemble Video service account password.</div>';
$string['authDomain']       = 'Ensemble Account Domain';
$string['authDomainHelp']   = '<div>(Optional) Authentication domain used when logging in to Ensemble Video.  Only used when a service account is configured above.  This should be set to the value selected in the "Domain" dropdown when authenticating to Ensemble Video, if required (otherwise leave this empty).</div>';
$string['type']             = 'Repository Type';
$string['typeHelp']         = '<div>The type of Ensemble Video content this repository makes available.</div>';
