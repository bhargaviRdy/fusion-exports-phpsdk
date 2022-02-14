<?php
    // Import dependencies
    require 'vendor/autoload.php';
    use FusionExport\ExportManager;
    use FusionExport\ExportConfig;

    // Instantiate the ExportConfig class and add the required configurations
    $exportConfig = new ExportConfig();
    // Provide path of the chart configuration which we have defined above.    // You can also pass the same object as serialized JSON.
    $exportConfig->set('chartConfig', realpath('resources/chart-config-file.json'));

    // ATTENTION - Pass the path of the dashboard template
    $exportConfig->set('templateFilePath', realpath('resources/dashboard-template.html'));

    // Instantiate the ExportManager class
    $exportManager = new ExportManager();

    // Call the export() method with the exportConfig and the respective callbacks
    $exportManager->export($exportConfig, $outputDir = '.', $unzip = true);
?>