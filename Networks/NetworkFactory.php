<?php declare(strict_types=1);
require_once __DIR__ . './TappxClass.php';

final class NetworkFactory
{
    public function __construct(NetworkContainer $networkContainer)
    {
        $this->networkContainer = $networkContainer;
    }

    public function build(string $networkName): NetworkInterface
    {
        $className = $this->networkContainer->getNetworkNamespace($networkName);
        return new $className;
    }
}
