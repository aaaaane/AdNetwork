<?php declare(strict_types=1);

final class NetworkContainer {

    public const ADNETWORK = 'adnetwork';

    public function getNetworkNamespace(string $networkNamespace): string
    {
        $container = [
            NetworkContainer::ADNETWORK => 'TappxClass'
        ];

        return $container[$networkNamespace];
    }
}
