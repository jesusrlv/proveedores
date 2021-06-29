<?
    

    $documentos1 = "SELECT * FROM docs WHERE id_ext = $id AND tipo_doc = 1";
    $resultado_documentos1 = $conn->query($documentos1);
    $row_documentos1 = $resultado_documentos1->fetch_assoc();

    $documentos2 = "SELECT * FROM docs WHERE id_ext = $id AND tipo_doc = 2";
    $resultado_documentos2 = $conn->query($documentos2);
    $row_documentos2 = $resultado_documentos2->fetch_assoc();

    $documentos3 = "SELECT * FROM docs WHERE id_ext = $id AND tipo_doc = 3";
    $resultado_documentos3 = $conn->query($documentos3);
    $row_documentos3 = $resultado_documentos3->fetch_assoc();

    $documentos4 = "SELECT * FROM docs WHERE id_ext = $id AND tipo_doc = 4";
    $resultado_documentos4 = $conn->query($documentos4);
    $row_documentos4 = $resultado_documentos4->fetch_assoc();

    $documentos5 = "SELECT * FROM docs WHERE id_ext = $id AND tipo_doc = 5";
    $resultado_documentos5 = $conn->query($documentos5);
    $row_documentos5 = $resultado_documentos5->fetch_assoc();

    $documentos6 = "SELECT * FROM docs WHERE id_ext = $id AND tipo_doc = 6";
    $resultado_documentos6 = $conn->query($documentos6);
    $row_documentos6 = $resultado_documentos6->fetch_assoc();

    $documentos7 = "SELECT * FROM docs WHERE id_ext = $id AND tipo_doc = 7";
    $resultado_documentos7 = $conn->query($documentos7);
    $row_documentos7 = $resultado_documentos7->fetch_assoc();

    $documentos8 = "SELECT * FROM docs WHERE id_ext = $id AND tipo_doc = 8";
    $resultado_documentos8 = $conn->query($documentos8);
    $row_documentos8 = $resultado_documentos8->fetch_assoc();

    

?>