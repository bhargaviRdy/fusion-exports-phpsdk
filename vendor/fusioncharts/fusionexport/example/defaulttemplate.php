<?php

// Exporting a chart

require __DIR__ . '/../vendor/autoload.php';

// Use the sdk
use FusionExport\ExportManager;
use FusionExport\ExportConfig;

// Instantiate the ExportConfig class and add the required configurations
$exportConfig = new ExportConfig();
$exportConfig->set('chartConfig', realpath(__DIR__ . '/resources/multiple.json'));
$exportConfig->set('type', "png");

// Instantiate the ExportManager class
$exportManager = new ExportManager();

try {
    // Call the export() method with the export config
    $files = $exportManager->export($exportConfig, '.', true,false);
} catch (\Exception $err) {
    echo $err->getMessage();
    exit();
}

foreach ($files as $file) {
    echo $file . "\n";
}
