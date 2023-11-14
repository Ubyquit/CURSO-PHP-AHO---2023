<?php
function disponible($disponible){
    if($disponible === "Disponible"){
        return '<td><i class="bi bi-check-circle-fill" style="font-size: 1.3rem; color: #198754;"></i></td>';
    }else{
        return '<td><i class="bi bi-x-circle-fill" style="font-size: 1.3rem; color: #dc3545;"></i></td>';
    }
}
?>