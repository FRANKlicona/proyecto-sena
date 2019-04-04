<?php 
    if (isset($_REQUEST['submit'])) {
        if (isset($_REQUEST['name'])) {
            if (empty( $_REQUEST['name'])) {
                if (filter_var( $_REQUEST['name'])) {
                    # code...
                }
            }
        }
    }
?>