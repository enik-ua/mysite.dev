<?php

$br = '<br>';
$strPostMaxSize = ini_get('post_max_size');
If (preg_match('/(\d*)([MGBK])/i', $strPostMaxSize, $arrPostMaxSize)) {
    $intPostMaxSize = (int)$arrPostMaxSize[1];
    $strPostMaxSize = strtolower($arrPostMaxSize[2]);
    var_dump($arrPostMaxSize);
    switch ($strPostMaxSize){
        case 'g':
            $intPostMaxSize = $intPostMaxSize*1024;
        case 'm':
            $intPostMaxSize = $intPostMaxSize*1024;
        case 'k':
            $intPostMaxSize = $intPostMaxSize*1024;
    }
    echo "Размер заспроса {$intPostMaxSize} байт {$br}";
    
    
}
?>
