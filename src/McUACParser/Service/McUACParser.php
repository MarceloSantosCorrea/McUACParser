<?php

namespace McUACParser\Service;

use UAParser\Parser;

class McUACParser
{

    private $uaFamily;
    private $uaMajor;
    private $uaMinor;
    private $uaPatch;
    private $uaName;
    private $uaVersion;
    private $osFamily;
    private $osMajor;
    private $osMinor;
    private $osPatch;
    private $osPatchMinor;
    private $osName;
    private $osVersion;
    private $deviceFamily;
    private $uaNameOsName;
    private $originalUserAgent;


    public function __construct()
    {
        $this->parserUserAgent();
    }

    public function parserUserAgent()
    {
        $parser = Parser::create();
        $result = $parser->parse( $_SERVER['HTTP_USER_AGENT'] );

        // Safari
        $this->uaFamily = $result->ua->family;
        // 6
        $this->uaMajor = $result->ua->major;
        // 0
        $this->uaMinor = $result->ua->minor;
        // 2
        $this->uaPatch = $result->ua->patch;
        // Safari 6.0.2
        $this->uaName = $result->ua->toString();
        // 6.0.2
        $this->uaVersion = $result->ua->toVersion();
        // Mac OS X
        $this->osFamily = $result->os->family;
        // 10
        $this->osMajor = $result->os->major;
        // 7
        $this->osMinor = $result->os->minor;
        // 5
        $this->osPatch = $result->os->patch;
        // [null]
        $this->osPatchMinor = $result->os->patchMinor;
        // Mac OS X 10.7.5
        $this->osName = $result->os->toString();
        // 10.7.5
        $this->osVersion = $result->os->toVersion();
        // Other
        $this->deviceFamily = $result->device->family;
        // Safari 6.0.2/Mac OS X 10.7.5
        $this->uaNameOsName = $result->toString();
        // Mozilla/5.0 (Macintosh; Intel Ma...
        $this->originalUserAgent = $result->originalUserAgent;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUaFamily()
    {
        return $this->uaFamily;
    }

    /**
     * @return mixed
     */
    public function getUaMajor()
    {
        return $this->uaMajor;
    }

    /**
     * @return mixed
     */
    public function getUaMinor()
    {
        return $this->uaMinor;
    }

    /**
     * @return mixed
     */
    public function getUaPatch()
    {
        return $this->uaPatch;
    }

    /**
     * @return mixed
     */
    public function getUaName()
    {
        return $this->uaName;
    }

    /**
     * @return mixed
     */
    public function getUaVersion()
    {
        return $this->uaVersion;
    }

    /**
     * @return mixed
     */
    public function getOsFamily()
    {
        return $this->osFamily;
    }

    /**
     * @return mixed
     */
    public function getOsMajor()
    {
        return $this->osMajor;
    }

    /**
     * @return mixed
     */
    public function getOsMinor()
    {
        return $this->osMinor;
    }

    /**
     * @return mixed
     */
    public function getOsPatch()
    {
        return $this->osPatch;
    }

    /**
     * @return mixed
     */
    public function getOsPatchMinor()
    {
        return $this->osPatchMinor;
    }

    /**
     * @return mixed
     */
    public function getOsName()
    {
        return $this->osName;
    }

    /**
     * @return mixed
     */
    public function getOsVersion()
    {
        return $this->osVersion;
    }

    /**
     * @return mixed
     */
    public function getDeviceFamily()
    {
        return $this->deviceFamily;
    }

    /**
     * @return mixed
     */
    public function getUaNameOsName()
    {
        return $this->uaNameOsName;
    }

    /**
     * @return mixed
     */
    public function getOriginalUserAgent()
    {
        return $this->originalUserAgent;
    }
}