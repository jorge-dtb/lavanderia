<?php
function print_array($array){
    echo "<pre>";    
    print_r($array);
    echo "</pre>";   
}
function base_urls(){

    echo ""; 
    //$_SERVER['SERVER_NAME'];
    /*echo $_SERVER['SERVER_NAME']." --- ";
        echo $_SERVER['REQUEST_URI'];*/
}
 
function sucursal($s){		      
    switch($s){
            case "1": $sucursal = "PS";    break;	            
    }
    return $sucursal;
}

function estatus_cliente($e){		      
    switch($e){
            case "1": $estatus = "registrado";          break; 
    }
    return $estatus;
}

function base_url(){
    return '/lavanderia';
}

function listoption_template($data,$items = 0){    
    $edit   = $data["edit_function"].'('.$data["id"].')';
    $delete = $data["delete_function"].'('.$data["id"].')';
    
    if($items != 0){
        $edit   = $data["edit_function"].'('.$data["id"].','.$data["id2"].')';        
    }    
        
    $icon = '<div class="my-auto line-h-1 h5 text-center">
                <a class="text-success openside" onclick="'.$edit.'">
                    <i class="icon-pencil"></i>
                </a>
                <a class="text-danger openside" onclick="'.$delete.'">
                    <i class="icon-trash"></i>
                </a>
            </div>';
    return $icon;
}

function generalstatus($type){
    switch($type){
        case "1": $status = "Activo"; break;
        case "0": $status = "Inactivo"; break;
    }
    return $status;
}

?>