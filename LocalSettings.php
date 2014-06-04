<?php

# This file was automatically generated by the MediaWiki installer.
# If you make manual changes, please keep track in case you need to
# recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.

# If you customize your file layout, set $IP to the directory that contains
# the other MediaWiki files. It will be used as a base to locate files.
if( defined( 'MW_INSTALL_PATH' ) ) {
	$IP = MW_INSTALL_PATH;
} else {
	$IP = dirname( __FILE__ );
}

$path = array( $IP, "$IP/includes", "$IP/languages" );
set_include_path( implode( PATH_SEPARATOR, $path ) . PATH_SEPARATOR . get_include_path() );

require_once( "includes/DefaultSettings.php" );
 
# If PHP's memory limit is very low, some operations may fail.
# ini_set( 'memory_limit', '20M' );

if ( $wgCommandLineMode ) {
	if ( isset( $_SERVER ) && array_key_exists( 'REQUEST_METHOD', $_SERVER ) ) {
		die( "This script must be run from the command line\n" );
	}
} elseif ( empty( $wgNoOutputBuffer ) ) {
	## Compress output if the browser supports it
	if( !ini_get( 'zlib.output_compression' ) ) @ob_start( 'ob_gzhandler' );
}

$wgSitename         = "UMass Transit";

$wgScriptPath       = "/wiki";
$wgScript           = "$wgScriptPath/index.php";
$wgRedirectScript   = "$wgScriptPath/redirect.php";

## For more information on customizing the URLs please see:
## http://meta.wikimedia.org/wiki/Eliminating_index.php_from_the_url
## If using PHP as a CGI module, the ?title= style usually must be used.
$wgArticlePath      = "$wgScript/$1";
# $wgArticlePath      = "$wgScript?title=$1";

$wgStylePath        = "$wgScriptPath/skins";
$wgStyleDirectory   = "$IP/skins";
$wgLogo             = "$wgStylePath/common/images/glenn.gif";

$wgAllowUserJs  = true;
$wgAllowUserCss = true;

$wgUploadPath       = "$wgScriptPath/images";
$wgUploadDirectory  = "$IP/images";

$wgEnableEmail      = true;
$wgEnableUserEmail  = true;

$wgEmergencyContact = "adam@admin.umass.edu";
$wgPasswordSender = "adam@admin.umass.edu";

## For a detailed description of the following switches see
## http://meta.wikimedia.org/Enotif and http://meta.wikimedia.org/Eauthent
## There are many more options for fine tuning available see
## /includes/DefaultSettings.php
## UPO means: this is also a user preference option
$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO
$wgEmailAuthentication = true;


# Schemas for Postgres
$wgDBmwschema       = "mediawiki";
$wgDBts2schema      = "public";

# Experimental charset support for MySQL 4.1/5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads       = true;
$wgUseImageResize      = true;
$wgSVGConverter        = 'rsvg';
# $wgUseImageMagick = true;
# $wgImageMagickConvertCommand = "/usr/bin/convert";

//Added to support additional file types - adam 2007.01.18
$wgFileExtensions = array( 'svg', 'png', 'gif', 'jpg', 'jpeg', 'pdf', 'doc', 'xls', 'odt', 'ods', 'ppt', 'odp', 'zip', 'sql');

//This is very trusting, but we're all friends here right?
$wgVerifyMimeType = false;
$wgStrictFileExtensions = false;	

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
# $wgHashedUploadDirectory = false;

## If you have the appropriate support software installed
## you can enable inline LaTeX equations:
$wgUseTeX           = false;
$wgMathPath         = "{$wgUploadPath}/math";
$wgMathDirectory    = "{$wgUploadDirectory}/math";
$wgTmpDirectory     = "{$wgUploadDirectory}/tmp";

$wgLocalInterwiki   = $wgSitename;

$wgLanguageCode = "en";

$wgProxyKey = "269702583f6b67e421ad17d913aed3396437676423408becf19bcda3cbc725e8";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook':
$wgDefaultSkin = 'monobook';

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
# $wgEnableCreativeCommonsRdf = true;
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";
# $wgRightsCode = ""; # Not yet used

$wgDiff3 = "";

# When you make changes to this configuration file, this will make
# sure that cached pages are cleared.
$configdate = gmdate( 'YmdHis', @filemtime( __FILE__ ) );
$wgCacheEpoch = max( $wgCacheEpoch, $configdate );

$wgLocalTZoffset = date("Z") / 60;

$wgRCMaxAge = 13 * 7 * 24 * 3600;

## What Namespaces to include in the search by default.  Note that this is also
## a user setting.  If you change this, use something like:
##    php userOptions.php --nowarn searchNs2 --old 0 --new 1
$wgNamespacesToBeSearchedDefault = array(
        NS_MAIN =>           true,
        NS_TALK =>           true,
        NS_USER =>           false,
        NS_USER_TALK =>      false,
        NS_PROJECT =>        false,
        NS_PROJECT_TALK =>   false,
        NS_IMAGE =>          true,
        NS_IMAGE_TALK =>     false,
        NS_MEDIAWIKI =>      false,
        NS_MEDIAWIKI_TALK => false,
        NS_TEMPLATE =>       false,
        NS_TEMPLATE_TALK =>  false,
        NS_HELP =>           false,
        NS_HELP_TALK =>      false,
        NS_CATEGORY =>       true,
        NS_CATEGORY_TALK =>  true
);

#----------------------------------------------------------------
#  Added Groups
#----------------------------------------------------------------

//remove default anon priveleges
$wgGroupPermissions['*'    ]['createaccount']     = false;
$wgGroupPermissions['*'    ]['read']              = false;
$wgGroupPermissions['*'    ]['edit']              = false;
$wgGroupPermissions['*'    ]['createpage']        = false;
$wgGroupPermissions['*'    ]['createtalk']        = false;
$wgGroupPermissions['*'    ]['writeapi']          = false;
$wgGroupPermissions['*'    ]['editmyusercss']     = false;
$wgGroupPermissions['*'    ]['editmyuserjs']      = false;
$wgGroupPermissions['*'    ]['viewmywatchlist']   = false;
$wgGroupPermissions['*'    ]['editmywatchlist']   = false;
$wgGroupPermissions['*'    ]['viewmyprivateinfo'] = false;
$wgGroupPermissions['*'    ]['editmyprivateinfo'] = false;
$wgGroupPermissions['*'    ]['editmyoptions']     = false;

//But, allow them to see the login page
$wgWhitelistRead = array( "Main Page",
                          "Special:UserLogin",
                          "Special:UserLogout",
                          "Special:PasswordReset",
                          "MediaWiki:Common.css",
                          "MediaWiki:Monobook.css"
                        );

//remove default user priveleges
$wgGroupPermissions['user' ]['move']               = false;
$wgGroupPermissions['user' ]['move-subpages']      = false;
$wgGroupPermissions['user' ]['move-rootuserpages'] = false;
$wgGroupPermissions['user' ]['movefile']           = false;
$wgGroupPermissions['user' ]['read']               = false;
$wgGroupPermissions['user' ]['edit']               = false;
$wgGroupPermissions['user' ]['createpage']         = false;
$wgGroupPermissions['user' ]['createtalk']         = false;
$wgGroupPermissions['user' ]['writeapi']           = false;
$wgGroupPermissions['user' ]['upload']             = false;
$wgGroupPermissions['user' ]['reupload']           = false;
$wgGroupPermissions['user' ]['reupload-shared']    = false;
$wgGroupPermissions['user' ]['minoredit']          = false;
$wgGroupPermissions['user' ]['purge']              = false;
$wgGroupPermissions['user' ]['sendemail']          = false;


##############################################
# at this point no basic user has any rights #
# 'sysop' and 'bureaucrat' remain as default #
##############################################
//group of users who only have read access
$wgGroupPermissions['readers' ]['read']              = true;
$wgGroupPermissions['readers' ]['editmyusercss']     = true;
$wgGroupPermissions['readers' ]['editmyuserjs']      = true;
$wgGroupPermissions['readers' ]['viewmywatchlist']   = true;
$wgGroupPermissions['readers' ]['editmywatchlist']   = true;
$wgGroupPermissions['readers' ]['viewmyprivateinfo'] = true;
$wgGroupPermissions['readers' ]['editmyprivateinfo'] = true;
$wgGroupPermissions['readers' ]['editmyoptions']     = true;
$wgGroupPermissions['readers' ]['sendemail']         = true;

//group of users who have editing access
$wgGroupPermissions['editors'] = $wgGroupPermissions['readers'];
$wgGroupPermissions['editors' ]['move']               = true;
$wgGroupPermissions['editors' ]['move-subpages']      = true;
$wgGroupPermissions['editors' ]['move-rootuserpages'] = true;
$wgGroupPermissions['editors' ]['edit']               = true;
$wgGroupPermissions['editors' ]['createpage']         = true;
$wgGroupPermissions['editors' ]['createtalk']         = true;
$wgGroupPermissions['editors' ]['minoredit']          = true;

//groups of users who can upload
$wgGroupPermissions['uploaders' ]['upload']          = true;
$wgGroupPermissions['uploaders' ]['reupload']        = true;
$wgGroupPermissions['uploaders' ]['reupload-shared'] = true;

//create a special user group
$wgGroupPermissions['priveleged'] = array_merge( $wgGroupPermissions['editors'], $wgGroupPermissions['uploaders'] );
$wgGroupPermissions['priveleged' ]['writeapi']        = true;
$wgGroupPermissions['priveleged' ]['purge']           = true;

//removes talk page link for non-logged-in users
$wgShowIPinHeader = false; 

// #### Extensions: ####
//require_once("$IP/extensions/GeshiCodeTag.php"); //Syntax Highlighting extension, added by MM
require_once "$IP/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php";
require_once( "$IP/extensions/ReplaceText/ReplaceText.php" );

//Parser Functions - Mostly for the help, but other folks might use them
require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );
//require_once( "$IP/extensions/StringFunctions/StringFunctions.php" );

//Interwiki page
require_once("$IP/extensions/Interwiki/Interwiki.php");
$wgGroupPermissions['*']['interwiki'] = false;
$wgGroupPermissions['sysop']['interwiki'] = true;

//CategoryTree extension
$wgUseAjax = true;
require_once("{$IP}/extensions/CategoryTree/CategoryTree.php");
$wgCategoryTreeCategoryPageOptions['mode'] = 'pages';

//Dismissable Site Notice
require_once( "$IP/extensions/DismissableSiteNotice/DismissableSiteNotice.php" );

//Use Lucene search instead of the default
$wgSearchType = 'LuceneSearch';
$wgLuceneHost = 'localhost';
$wgLucenePort = 8123;
$wgLuceneSearchVersion = 2.1;
require_once("extensions/MWSearch/MWSearch.php");

//Enable Ajax search completion
$wgEnableMWSuggest = true;

include 'Sensitive.php';
?>
