<?php
/**
 * Special page to direct the user to a random page in specified category
 *
 * @file
 * @ingroup Extensions
 * @author VasilievVV <vasilvv@gmail.com>, based on SpecialRandompage.php code
 * @license GPL-2.0-or-later
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	exit(1);
}

$wgExtensionCredits['specialpage'][] = [
	'path' => __FILE__,
	'name' => 'Random in category',
	'author' => [ 'VasilievVV', 'Sam Reed' ],
	'version' => '2.1.0',
	'url' => 'https://www.mediawiki.org/wiki/Extension:RandomInCategory',
	'descriptionmsg' => 'randomincategory-desc',
];

$dir = dirname(__FILE__) . '/';
$wgMessagesDirs['RandomInCategory'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['RandomInCategoryAlias'] = $dir . 'RandomInCategory.alias.php';

$wgSpecialPages['RandomPageInCategory'] = 'RandomPageInCategory';
$wgAutoloadClasses['RandomPageInCategory'] = $dir . 'RandomInCategory.body.php';
