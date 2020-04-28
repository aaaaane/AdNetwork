<?php declare(strict_types=1);
require_once __DIR__ . '/BaseClass.php';
require_once __DIR__ . '/NetworkInterface.php';
require_once __DIR__ . '/NetworkResult.php';
require_once __DIR__ . '/SspRequest.php';

class TappxClass extends BaseClass implements NetworkInterface
{

    private const API_URL = "http://test-ssp.tappx.net/ssp/req.php";
    private const API_KEY = "pub-1234-android-1234";

    public function retrieve($requestFile): NetworkResult
    {
        $sspRequest = new SspRequest(
            self::API_KEY,
            "320x480",
            $requestFile->device->os,
            $requestFile->device->ip,
            "app",
            "com.tappx.example",
            "19a6c729-1e27-e936-84c1-122b2a9bbc8c",
            "2",
            $requestFile->device->ua,
            "23482834829",
            "400",
            $requestFile->device->geo->lat,
            $requestFile->device->geo->lon,
            $requestFile->imp[0]->secure,
            $requestFile->test
        );

        $sspResponse = $this->request(self::API_URL, $sspRequest);

        return new NetworkResult(
            $sspResponse->getTest(),
            $sspResponse->getErrorNum(),
            $sspResponse->getErrorText(),
            $sspResponse->getAdText()
        );
    }
}