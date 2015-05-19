<?php
/**
 * ownCloud - conferencia
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Guilherme Gomes <birdsystem115@gmail.com>
 * @copyright Guilherme Gomes 2015
 */

namespace OCA\Conferencia\AppInfo;

\OCP\App::addNavigationEntry([
	// the string under which your app will be referenced in owncloud
	'id' => 'conferencia',

	// sorting weight for the navigation. The higher the number, the higher
	// will it be listed in the navigation
	'order' => 10,

	// the route that will be shown on startup
	'href' => \OCP\Util::linkToRoute('conferencia.page.index'),

	// the icon that will be shown in the navigation
	// this file needs to exist in img/
	'icon' => \OCP\Util::imagePath('conferencia', 'app.svg'),

	// the title of your application. This will be used in the
	// navigation or on the settings page of your app
	'name' => \OC_L10N::get('conferencia')->t('Conferencia')
]);