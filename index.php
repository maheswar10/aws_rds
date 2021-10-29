<?php
    include('src/EDI/Parser.php');
    use EDI\Parser;
    $fn = "example.edi"; //it's a path!
    $p = new EDI\Parser($fn);
    if (count($p->errors()) > 0) {
        echo json_encode($p->errors());
        return;
    }
    echo json_encode($p->get());
    echo "thanos edi parser";
?>