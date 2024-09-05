<?php
wfLoadSkins( [
	'CologneBlue',
	'Modern',
	'MonoBook',
	'Timeless',
	'Vector',
] );

wfLoadExtensions( [
    'AbuseFilter',
    'AntiSpoof',
    'BetaFeatures',
    'CentralAuth',
    'CentralNotice',
    'CheckUser',
    'CreateWiki',
    'CookieWarning',
    'ConfirmEdit',
    'ConfirmEdit/Turnstile',
    //'ConfirmEdit/ReCaptchaNoCaptcha',
    'DataDump',
    //'DiscordNotifications',
    'DismissableSiteNotice',
    'Echo',
    //'EventBus',
    'EventLogging',
    //'EventStreamConfig',
    'GlobalBlocking',
    'GlobalCssJs',
    'GlobalPreferences',
    //'GlobalNewFiles',
    //'ImportDump',
    'Interwiki',
    'InterwikiDispatcher',
    //'IPInfo',
    'KyoikuPortalMagic',
    'LoginNotify',
    'ManageWiki',
    //'MatomoAnalytics',
    //'MessageCachePerformance',
    //'MirahezeMagic',
    //'MobileDetect',
    //'MultiPurge',
    'NativeSvgHandler',
    'Nuke',
    'OATHAuth',
    'OAuth',
    'ParserFunctions',
    //'ParserMigration',
    'QuickInstantCommons',
    'RemovePII',
    // 'ReportIncident',
    //'RottenLinks',
    'Scribunto',
    // 'SecureLinkFixer',
    'SpamBlacklist',
    // 'StopForumSpam',
    'TitleBlacklist',
    'TorBlock',
    //'WebAuthn',
    //'WikiDiscover',
    'WikiEditor',
    'cldr',
] );

$wgEventLoggingBaseUri = '/beacon/event';
$wgEventLoggingServiceUri = '/beacon/intake-analytics';
$wgEventLoggingStreamNames = false;

if ($wgDBname !== "massirowiki") {
    wfLoadExtension( 'WikiDiscover' );
}
