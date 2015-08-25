<pre>
{
  "require": {
    "marcelo-correa/mcuacparser": "dev-master",
  }
}


in "config/application.config.php", include Modules:

    'modules'                 => [
        ...
        'McUACParser',
        ...
    ],


       $McUACParser = new McUACParser();
       print $McUACParser->getuaFamily();
       print $McUACParser->getuaMajor();
       print $McUACParser->getuaMinor();
       print $McUACParser->getuaPatch();
       print $McUACParser->getuaName();
       print $McUACParser->getuaVersion();
       print $McUACParser->getOsFamily();
       print $McUACParser->getOsMajor();
       print $McUACParser->getOsMinor();
       print $McUACParser->getOsPatch();
       print $McUACParser->getOsPatchMinor();
       print $McUACParser->getOsName();
       print $McUACParser->getOsVersion();
       print $McUACParser->getDeviceFamily();
       print $McUACParser->getUaNameOsName();
       print $McUACParser->getOriginalUserAgent();

</pre>
