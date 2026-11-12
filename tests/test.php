<?php

$source = file_get_contents(__DIR__ . '/../src/index.php');

if ($source !== false && str_contains($source, 'DevOps CI/CD Platform')) {
    echo "TEST PASSED\n";
    exit(0);
}

fwrite(STDERR, "TEST FAILED\n");
exit(1);
