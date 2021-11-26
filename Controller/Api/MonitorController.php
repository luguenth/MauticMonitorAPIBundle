<?php

namespace MauticPlugin\MauticMonitorAPIBundle\Controller\Api;

use Mautic\ApiBundle\Controller\CommonApiController;
use Mautic\CoreBundle\Helper\PhpVersionHelper;
use Mautic\CoreBundle\Templating\Helper\VersionHelper;
use Symfony\Component\HttpFoundation\Response;

class MonitorController extends CommonApiController
{
    public function getAllAction():Response
    {
        $result = [
            "phpVersion" => $this->getPhpVersion(),
            "mauticVersion" => $this->getMauticVersion(),
        ];
        return $this->json($result);
    }
    
    public function getPhpVersion()
    {
        return PhpVersionHelper::getCurrentSemver();        //return parent::render($version);
    }

    public function getMauticVersion()
    {
        return MAUTIC_VERSION ?? 'unknown';
    }
}