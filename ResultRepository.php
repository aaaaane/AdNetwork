<?php declare(strict_types=1);


class ResultRepository
{
    private string $fileName;

    /**
     * ResultRepository constructor.
     * @param string $fileName
     */
    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * @param array $adNetworkResults
     */
    public function saveResult(array $adNetworkResults): void
    {
        foreach ($adNetworkResults as $adNetworkResult) {
            $arrayAdNetwork = $adNetworkResult->toArray();
            $jsonAdNetwork = json_encode($arrayAdNetwork);
            file_put_contents($this->getFileName(), $jsonAdNetwork);
        }
    }
}
