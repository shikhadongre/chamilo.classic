/*
 *	Dokeos - elearning and course management software
 *
 *	Copyright (c) 2008-2009 Dokeos SPRL
 *	Copyright (c) 2008-2009 Julio Montoya
 *	Copyright (c) 2008-2009 Juan Carlos Raña
 *	Copyright (c) 2008-2009 Ivan Tcholakov
 *
 *	For a full list of contributors, see "credits.txt".
 *	The full license can be read in "license.txt".
 *
 *	This program is free software; you can redistribute it and/or
 *	modify it under the terms of the GNU General Public License
 *	as published by the Free Software Foundation; either version 2
 *	of the License, or (at your option) any later version.
 *
 *	See the GNU General Public License for more details.
 *
 * Contact address: Dokeos, rue du Corbeau, 108, B-1030 Brussels, Belgium
 * Mail: info@dokeos.com
 */


/*
 * Custom editor configuration settings.
 *
 * Follow this link for more information:
 * http://docs.fckeditor.net/FCKeditor_2.x/Developers_Guide/Configuration/Configuration_Options
 *
 * Please, do not modify the file fckconfig.js in order to make upgrades easy.
 * Just create your desired settings in this file, myconfig.js.
 */

FCKConfig.EditorAreaCSS = FCKConfig.BasePath + '../../../../css/public_admin/course.css' ;
FCKConfig.DocType = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">' ;
FCKConfig.SkinPath = FCKConfig.BasePath + 'skins/silver/' ;

FCKConfig.ProtectedSource.Add( /<script[\s\S]*?\/script>/gi ) ;	// To protect <script> tags.

FCKConfig.AutoDetectLanguage = false ;
FCKConfig.DefaultLanguage = 'en' ;
FCKConfig.ContentLangDirection	= 'ltr' ;

FCKConfig.ContextMenu = ['Generic','Link','Anchor','Image','Flash','Select','Textarea','Checkbox','Radio','TextField','HiddenField','ImageButton','Button','BulletedList','NumberedList','Table','Form'] ;
FCKConfig.TemplatesXmlPath	= FCKConfig.EditorPath + 'fcktemplates.xml.php' ;

FCKConfig.DisableFFTableHandles = false ;

FCKConfig.SmileyWindowWidth = 450 ;
FCKConfig.SmileyWindowHeight = 250 ;


/*
 * Toolbar drop-down lists customizations.
 */

// Reduction of the format list.
FCKConfig.FontFormats	= 'p;h1;h2;h3;h4;h5' ;


/*
 * Plugins.
 */

// If you want to add a non-existing language code in some of the pligin
// declarations, it is mandatory a corresponding language file to be opened
// in the plugin's "lang" directory.
FCK.AvailableLanguages = 'en,af,ar,bg,bn,bs,ca,cs,da,de,el,en-au,en-ca,en-uk,eo,es,et,eu,fa,fi,fo,fr-ca,fr,gl,gu,he,hi,hr,hu,is,it,ja,km,ko,lt,lv,mn,ms,nb,nl,no,pl,pt-br,pt,ro,ru,sk,sl,sr-latn,sr,sv,th,tr,uk,vi,zh-cn,zh' ;

// The "customizations" plugin modifies some internal functionalities of the editor.
// It should be loaded before the other plugins.
FCKConfig.Plugins.Add('customizations', FCK.AvailableLanguages) ;

// These plugins improve table-operations.
FCKConfig.Plugins.Add('dragresizetable') ;
FCKConfig.Plugins.Add('tablecommands') ;

// Audio files insertion.
FCKConfig.Plugins.Add('audio', FCK.AvailableLanguages) ;

// This is the old dialog for insertion audio files.
// Probably this plugin will be removed at the next release.
// If you wish to use it, disable the "audio" plugin first.
//FCKConfig.Plugins.Add('MP3', FCK.AvailableLanguages) ;

// A specialised browser/editor for images.
if (!FCKConfig.PageConfig.AdvancedFileManager)
{
	// It is not needed in the advanced file manager mode.
	// The laanguage sub-system of the Image Manager is different.
	// There is no need available languages to be enumerated.
	FCKConfig.Plugins.Add('ImageManager') ;
}

// This is the old flash plugin. Now the editor has a built-in flash dialog.
// Probably this plugin will be removed at the next release.
//FCKConfig.Plugins.Add('Flash', 'en') ;

// Embeding video files.
FCKConfig.Plugins.Add('fckEmbedMovies', FCK.AvailableLanguages);

// flv video files insertion.
FCKConfig.Plugins.Add('flvPlayer', FCK.AvailableLanguages) ;

// Video streams insertion, YouTube service.
FCKConfig.Plugins.Add('youtube', FCK.AvailableLanguages) ;

// Digital maps insertion, GoogleMaps service.
FCKConfig.Plugins.Add('googlemaps', FCK.AvailableLanguages) ;
// This key is for http://localhost. You must get one for each server where you want to use the plugin,
// just get the key for free here after agreeing to the Terms of Use of the GoogleMaps API:
// http://www.google.com/apis/maps/signup.html. // If you leave an empty string then the toolbar icon won't be shown.
FCKConfig.GoogleMaps_Key = 'ABQIAAAAlXu5Pw6DFAUgqM2wQn01gxT2yXp_ZAY8_ufC3CFXhHIE1NvwkxSy5hTGQdsosYD3dz6faZHVrO-02A' ;

// Mathematical formulas insertion.
// In order the "mimetex" plugin to work prpoperly, preliminary changes
// in your server configuration have to be done. See the installation guide.
FCKConfig.Plugins.Add('mimetex', FCK.AvailableLanguages) ;

// Wiki-formatted links insertion.
FCKConfig.Plugins.Add('wikilink', FCK.AvailableLanguages) ;

// A dialog for assigning hyperlinks to specified image areas.
FCKConfig.Plugins.Add('imgmap', FCK.AvailableLanguages);


/*
 * Settings for browsing the server.
 */

// For all acceptable types of resources (files).

// true/false to enable/disable the browser.
FCKConfig.LinkBrowser = true ;

// Browser window sizes.
FCKConfig.LinkBrowserWindowWidth	= 782 ;
FCKConfig.LinkBrowserWindowHeight	= 490 ;

// For images.

// true/false to enable/disable the browser.
FCKConfig.ImageBrowser = true ;

// Browser window sizes.
FCKConfig.ImageBrowserWindowWidth   = 782 ;
FCKConfig.ImageBrowserWindowHeight  = 490 ;

// Upload path for the Image manager. Leave it empty.
FCKConfig.IMUploadPath = '' ;

// For flash objects.

// true/false to enable/disable the browser.
FCKConfig.FlashBrowser = true ;

// Browser window sizes.
FCKConfig.FlashBrowserWindowWidth   = 782 ;
FCKConfig.FlashBrowserWindowHeight  = 490 ;

// For audio files.

// true/false to enable/disable the browser.
FCKConfig.MP3Browser = true ;

// Browser window sizes.
FCKConfig.MP3BrowserWindowWidth     = 782 ;
FCKConfig.MP3BrowserWindowHeight    = 490 ;

// For video files.

// true/false to enable/disable the browser.
FCKConfig.VideoBrowser = true ;

// Browser window sizes.
FCKConfig.VideoBrowserWindowWidth   = 782 ;
FCKConfig.VideoBrowserWindowHeight  = 490 ;

// For video (flv) files.

// true/false to enable/disable the browser.
FCKConfig.MediaBrowser = true ;

// Browser window sizes.
FCKConfig.MediaBrowserWindowWidth   = 782 ;
FCKConfig.MediaBrowserWindowHeight  = 490 ;


/*
 * Settings for direct uploads on the server, without using browsers.
 * Some of the editor's dialogs have quick-upload tabs for this purpose.
 */

// For all acceptable types of resources (files).

// true/false to enable/disable the quick-upload tab.
FCKConfig.LinkUpload = true ;

// To be moved in the php-integration file.
FCKConfig.LinkUploadAllowedExtensions	= ".(7z|aiff|asf|avi|bmp|csv|doc|fla|flv|gif|gz|gzip|jpeg|jpg|mid|mov|mp3|mp4|mpc|mpeg|mpg|ods|odt|pdf|png|ppt|pxd|qt|ram|rar|rm|rmi|rmvb|rtf|sdc|sitd|swf|sxc|sxw|tar|tgz|tif|tiff|txt|vsd|wav|wma|wmv|xls|xml|zip)$" ;			// empty for all
FCKConfig.LinkUploadDeniedExtensions	= "" ;

// For images.

// true/false to enable/disable the quick-upload tab.
FCKConfig.ImageUpload = true ;

// To be moved in the php-integration file.
FCKConfig.ImageUploadAllowedExtensions	= ".(jpg|gif|jpeg|png|bmp)$" ;
FCKConfig.ImageUploadDeniedExtensions	= "" ;

// For flash objects.

// true/false to enable/disable the quick-upload tab.
FCKConfig.FlashUpload = true ;

// To be moved in the php-integration file.
FCKConfig.FlashUploadAllowedExtensions	= ".(swf)$" ;
FCKConfig.FlashUploadDeniedExtensions	= "" ;

// For audio files.

// true/false to enable/disable the quick-upload tab.
FCKConfig.MP3Upload = true ;

// To be moved in the php-integration file.
FCKConfig.MP3UploadAllowedExtensions	= ".(mp3)$" ;
FCKConfig.MP3UploadDeniedExtensions	= "" ;

// For video files.

// true/false to enable/disable the quick-upload tab.
FCKConfig.VideoUpload = true ;

// To be moved in the php-integration file.
FCKConfig.VideoUploadAllowedExtensions	= ".(mpg|mpeg|mp4|avi|wmv|mov|asf)$" ;
FCKConfig.VideoUploadDeniedExtensions	= "" ;

// For video (flv) files.

// true/false to enable/disable the quick-upload tab.
FCKConfig.MediaUpload = true ;

// To be moved in the php-integration file.
FCKConfig.MediaUploadAllowedExtensions	= ".(flv)$" ;
FCKConfig.MediaUploadDeniedExtensions	= "" ;


/*
 * Alternative settings for the advanced file manager mode.
 */

// If you wish to alter some of the settings above and to make them
// specific for the advanced file manager mode, you may do this within
// the following "if" block.
if (FCKConfig.PageConfig.AdvancedFileManager)
{
	FCKConfig.LinkUpload = false ;
	FCKConfig.ImageUpload = false ;
	FCKConfig.MP3Upload = false ;
	//FCKConfig.FlashUpload = false ; //See plugin
}


/*
 * Other settings.
 */

// TODO: This setting seems obsolete. To be checked for removal.
FCKConfig.UserStatus = 'teacher' ;
