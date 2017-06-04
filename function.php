<?php

$salajaneparool = "SeeParoolOnSalajane";
$error;

function kontrolliParooli(){
    global $salajaneparool;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['password'])){
            if ($_POST['password'] === $salajaneparool){
                $salajanefail = fopen("salajased_paroolid.txt", "r");
                while (!feof($salajanefail)){
                    echo "<p>".fgets($salajanefail)."</p>";
                }
                fclose($salajanefail);
            }
            else
            {
                echo "Sisestatud parool on vale";
            }
        }
    }
}

?>