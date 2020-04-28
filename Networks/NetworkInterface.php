<?php declare(strict_types=1);

interface NetworkInterface
{
    public function retrieve(string $requestFile): NetworkResult;
}