 <?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
                        ->withServiceAccount('project-bdd-89099-firebase-adminsdk-7u25y-97d4cc5f74.json')
                        ->withDatabaseUri('https://project-bdd-89099-default-rtdb.firebaseio.cleacom/');

                        $database = $factory->createDatabase();

?>