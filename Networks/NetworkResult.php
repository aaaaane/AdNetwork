<?php declare(strict_types=1);


final class NetworkResult
{
    private int $test;
    private int $error;
    private ?string $errorReason;
    private ?string $ad;

    /**
     * NetworkResult constructor.
     * @param int $test
     * @param int $error
     * @param string|null $errorReason
     * @param string|null $ad
     */
    public function __construct(int $test, int $error, ?string $errorReason, ?string $ad = null)
    {
        $this->test = $test;
        $this->error = $error;
        $this->errorReason = $errorReason;
        $this->ad = $ad;
    }

    /**
     * @return int
     */
    public function getTest(): int
    {
        return $this->test;
    }

    /**
     * @return int
     */
    public function getError(): int
    {
        return $this->error;
    }

    /**
     * @return string|null
     */
    public function getErrorReason(): string
    {
        return $this->errorReason ?? '';
    }

    /**
     * @return string|null
     */
    public function getAd(): string
    {
        return $this->ad ?? '';
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $networkResultArray = [
            "test" => $this->getTest(),
            "error" => $this->getError(),
            "error-reason" => $this->getErrorReason(),
            "ad" => $this->getAd(),
        ];

        return $networkResultArray;
    }

}
