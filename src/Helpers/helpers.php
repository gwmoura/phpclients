<?php

function mix($path)
{
    $manifestPath = __DIR__.'/../../public/mix-manifest.json';
    $manifests[$manifestPath] = json_decode(file_get_contents($manifestPath), true);
    $manifest = $manifests[$manifestPath];
    return $manifest[$path];
}
