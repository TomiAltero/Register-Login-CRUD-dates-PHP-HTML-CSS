<?php
$strings = array('AbCd1zyZ9', 'foo!#$bar');
foreach ($strings as $testcase) {
    if (ctype_alnum($testcase)) {
        echo "$testcase consta de todas las letras o dígitos.\n";
        echo "<br>";
    } else {
        echo "$testcase no consta de todas las letras o dígitos.\n";
    }
}
?>