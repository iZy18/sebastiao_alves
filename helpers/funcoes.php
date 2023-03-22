<?php
function getLivroID($id){
    return selectSQLUnico("SELECT * FROM livros WHERE id=$id");
}

function getLivroDestaque($id){
    return selectSQLUnico("SELECT destaque FROM livros WHERE id=$id");
}
?>