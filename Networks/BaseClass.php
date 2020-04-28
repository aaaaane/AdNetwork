<?php declare(strict_types=1);
require_once __DIR__ . './SspResponse.php';

class BaseClass
{
    /**
     * @param string $apiUrl
     * @param SspRequest $sspRequest
     * @return SspResponse
     */
    public function request(string $apiUrl, SspRequest $sspRequest): SspResponse
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiUrl . $sspRequest->toUrlEncoded());
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($curl);

        $errorText = curl_error($curl);
        $errorNum = (curl_errno($curl) > 0) ? 1 : 0;
        curl_close($curl);

        return new SspResponse($sspRequest->getTest(), $errorText, $errorNum, $result);
    }
}