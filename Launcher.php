<?php declare(strict_types=1);

require_once __DIR__ . '/Networks/TappxClass.php';
require_once __DIR__ . '/Networks/NetworkFactory.php';
require_once __DIR__ . '/Networks/NetworkContainer.php';

final class Launcher
{
    private $m_timeout;

    public function __construct($m_timeout)
    {
        $this->m_timeout = $m_timeout;
    }

    /**
     * @param string ...$networkName
     * @return NetworkResult[]
     * @throws MaxTimeExceededException
     */
    public function run(string ...$networkName): array
    {
        $start = microtime(true);
        $result = [];

        foreach ($networkName as $network) {

            $factory = new NetworkFactory(new NetworkContainer());
            $networkService = $factory->build($network);

            if ($this->checkMaxTime($start)) {
                throw new MaxTimeExceededException("TEST not valid, max time exceeded " . (string)$start);
            }

            try {
                $result[] = $networkService->retrieve($this->parseRequest());
            } catch (Exception $exception) {
                throw new $exception;
            }
        }

        return $result;
    }

    private function parseRequest() {
        $requestFile = file_get_contents("Request.txt");
        return json_decode($requestFile);
    }

    private function checkMaxTime($start)
    {
        return ((microtime(true) - $start) * 1000) > $this->m_timeout || is_null($this->m_timeout);
    }
}