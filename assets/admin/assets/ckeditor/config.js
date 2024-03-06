/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		{ name: 'colors' },
		{ name: 'about' }
	];

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';
	config.extraPlugins = "justify";
	config.extraPlugins = 'texttransform';
	config.extraPlugins = 'font';


	// Simplify the dialog windows.
	// config.removeDialogTabs = 'image:advanced;link:advanced';
	// config.easyimage_styles = {
	// 	full: {
	// 		// Changes just the class name, icon label remains unchanged.
	// 		attributes: {
	// 			'class': 'my-custom-full-class'
	// 		}
	// 	},
	// 	skipBorder: {
	// 		attributes: {
	// 			'class': 'skip-border'
	// 		},
	// 		group: 'borders',
	// 		label: 'Skip border'
	// 	},
	// 	thickBorder: {
	// 		attributes: {
	// 			'class': 'thick-border'
	// 		},
	// 		group: 'borders',
	// 		label: 'Thick border'
	// 	}
	// };
};