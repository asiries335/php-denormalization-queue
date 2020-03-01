<?php

#!/usr/bin/env php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Asiries335\DenormalizationQueue\UI\CLI\RunWorkerCommand;
use Asiries335\DenormalizationQueue\UI\CLI\AddJobCommand;

$application = new Application();

// ... register commands
$application->add(new RunWorkerCommand());
$application->add(new AddJobCommand());

$application->run();