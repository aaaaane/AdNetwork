<?php declare(strict_types=1);
require_once __DIR__ . './Launcher.php';
require_once __DIR__ . './ResultRepository.php';


ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

try {
    $timeout = 400;

    $launcher = new Launcher($timeout);
    $adNetworkResult = $launcher->run(NetworkContainer::ADNETWORK);

    $resultPersist = new ResultRepository("./Output/" . time() . ".json");
    $resultPersist->saveResult($adNetworkResult);

    echo PHP_EOL . PHP_EOL . "end" . PHP_EOL . PHP_EOL . PHP_EOL;
} catch (MaxTimeExceededException $p_ex) {

    $adNetworkResult = new NetworkResult(1, 1, 'Max time exceeded');
    $resultPersist = new ResultRepository("./Output/" . time() . ".json");
    $resultPersist->saveResult($adNetworkResult);

    echo PHP_EOL . PHP_EOL . $p_ex->getMessage() . PHP_EOL . PHP_EOL . PHP_EOL;
} catch (Exception $p_ex) {
    echo PHP_EOL . PHP_EOL . $p_ex->getMessage() . PHP_EOL . PHP_EOL . PHP_EOL;
}

exit(0);
