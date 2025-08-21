<?php if (!defined('FW')) die('Forbidden');

$manifest = array();

$manifest['name']        = __( 'Translations', 'fw' );
$manifest['slug']        = 'unysonplus-translations';
$manifest['description'] = __(
	'This extension lets you translate your website in any language or even add multiple languages for your users to change at their will from the front-end.',
	'fw'
);

$manifest['version']     = '1.0.11';
$manifest['display']     = true;
$manifest['standalone']  = true;

// Repository Info
$manifest['github_update'] = 'UnysonPlus/UnysonPlus-Translation-Extension';
$manifest['github_repo']   = 'https://github.com/UnysonPlus/UnysonPlus-Translation-Extension';
$manifest['github_branch'] = 'master';

// Author Info
$manifest['author']     = 'UnysonPlus';
$manifest['author_uri'] = 'https://www.lastimosa.com.ph/unysonplus';

// Meta
$manifest['license']      = 'GPL-2.0-or-later';
$manifest['text_domain']  = 'fw';
$manifest['requires_php'] = '7.4';
$manifest['requires_wp']  = '5.8';
