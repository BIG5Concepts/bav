#!/bin/env php
<?php
/**
 * BAV updater for the Bundesbank bank data file.
 *
 * @author Markus Malkusch <markus@malkusch.de>
 * @license GPL
 * @see DataBackend
 */

namespace malkusch\bav;

require_once __DIR__ . "/../autoloader/autoloader.php";

try {
    $databack = ConfigurationRegistry::getConfiguration()->getDatabackendContainer()->getDataBackend();

    $databack->update();
    echo "Bundesbank file downloaded.\n";

} catch (DataBackendException $error) {
    die("Installation failed: {$error->getMessage()}\n");

}