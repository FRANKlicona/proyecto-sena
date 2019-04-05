<?php 
class Validacion {
    public function Validar($data){
        // print_r($data);
        // die('llega aqui');
        if ($data->submit =='') {
            // print_r($data);
            // die;
            
            if (isset($data->name)) {       
                trim($data->name);
                if (!empty($data->name)) {
                    if (!is_numeric($data->name)) {
                        if (strlen($data->name)>7) {
                        } else {
                            echo $msg_error[] = 'Este campo debe tener al menos 7 caracteres';
                            die;
                        }
                    } else {
                        echo $msg_error[] = 'Este campo no debe contener numeros';
                        die;
                    }
                } else {
                    echo $msg_error[] = 'Este campo esta vacio';
                    die;
                }
            }
            
            if (isset($data->dimension_id)) {
                if (!empty($data->dimension_id)) {
                    if (is_numeric($data->dimension_id)) {
                    } else {
                        $msg_error[] = 'Este campo no debe contener numeros';
                    }
                } else {
                    $msg_error[] = 'Este campo esta vacio';
                }
            }
            if (isset($data->token_id)) {
                if (!empty($data->token_id)) {
                    if (is_numeric($data->token_id)) {
                    } else {
                        $msg_error[] = 'Este campo no debe contener numeros';
                    }
                } else {
                    $msg_error[] = 'Este campo esta vacio';
                    die;
                }
            }
            if (isset($data->action_id)) {
                if (!empty($data->action_id)) {
                    if (is_numeric($data->action_id)) {
                    } else {
                        $msg_error[] = 'Este campo no debe contener numeros';
                    }
                } else {
                    $msg_error[] = 'Este campo esta vacio';
                }
            }
            if (isset($data->date)) {
                if (!empty($data->date)) {
                    if (($data->date)> date('Y-m-d')) {
                    } else {
                        echo $data->date.' - '.date('Y-m-d');
                        // die('   llega aqui');
                        $msg_error[] = 'Fecha antigua ';
                    }
                } else {
                    $msg_error[] = 'Este campo esta vacio';
                }
            }
            if (isset($data->cell)) {
                if (!empty($data->cell)) {
                    if (($data->cell)< time()) {
                    } else {
                        $msg_error[] = 'No se puede escoger fechas anteriores a '.time();
                    }
                } else {
                    $msg_error[] = 'Este campo esta vacio';
                }
            }
    
    
    
        }
        return($msg_error);
    }
}
?>