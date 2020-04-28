<?php


class SspResponse
{
    private int $test;
    private ?string $errorText;
    private int $errorNum;
    private ?string $adText;

    /**
     * SspResponse constructor.
     * @param int $test
     * @param string|null $errorText
     * @param int $errorNum
     * @param string|null $adText
     */
    public function __construct(int $test, ?string $errorText, int $errorNum, ?string $adText)
    {
        $this->test = $test;
        $this->errorText = $errorText;
        $this->errorNum = $errorNum;
        $this->adText = $adText;
    }

    /**
     * @return int
     */
    public function getTest(): int
    {
        return $this->test;
    }

    /**
     * @return string|null
     */
    public function getErrorText(): ?string
    {
        return $this->errorText ?? '';
    }

    /**
     * @return int
     */
    public function getErrorNum(): int
    {
        return $this->errorNum;
    }

    /**
     * @return string|null
     */
    public function getAdText(): ?string
    {
        return $this->adText ?? '';
    }
}
