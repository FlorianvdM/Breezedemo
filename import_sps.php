<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$files = [
    'database/storedprocedures/praktijkmanagement/SP_GetAllUserroles.sql',
    'database/storedprocedures/praktijkmanagement/Sp_GetAllUsers.sql',
    'database/storedprocedures/praktijkmanagement/Sp_GetUserById.sql',
    'database/storedprocedures/praktijkmanagement/Sp_UpdateUser.sql',
    'database/storedprocedures/Sp_DeleteUser.sql',
];

foreach ($files as $file) {
    if (!file_exists($file)) continue;
    $content = file_get_contents($file);
    
    // Remove USE statement
    $content = preg_replace('/USE\s+[a-zA-Z0-9_]+;/i', '', $content);
    
    // Split on DELIMITER $$
    $parts = explode('DELIMITER $$', $content);
    
    if (count($parts) > 1) {
        $drop = trim($parts[0]);
        $create = trim(str_replace('DELIMITER ;', '', $parts[1]));
        $create = preg_replace('/\$\$$/', '', $create);
        
        if ($drop) {
            echo "Running: $drop\n";
            \Illuminate\Support\Facades\DB::unprepared($drop);
        }
        if ($create) {
            echo "Running CREATE PROCEDURE\n";
            \Illuminate\Support\Facades\DB::unprepared($create);
        }
    } else {
        \Illuminate\Support\Facades\DB::unprepared($content);
    }
    echo "Imported $file\n";
}

echo "Done.\n";
