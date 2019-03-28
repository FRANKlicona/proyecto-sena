<footer class="footer">
    <div class="container-fluid">
        <nav>
            <ul>
                <li>
                    <a href="https://www.google.com/maps/place/Sena+Ternera/@10.3738577,-75.462697,17z/data=!3m1!4b1!4m12!1m6!3m5!1s0x8ef6269fd181cc07:0xa6016d8aaf8bf5bc!2sSena+Ternera!8m2!3d10.3738577!4d-75.4605083!3m4!1s0x8ef6269fd181cc07:0xa6016d8aaf8bf5bc!8m2!3d10.3738577!4d-75.4605083">
                        Centro Comercio y Servicios - SENA Ternera Km. 1 Vía Turbaco CTG
                    </a>
                </li>
                <li>
                    <a href="http://presentation.creative-tim.com">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="http://cysbolivar.blogspot.com/">
                        Blog
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright" id="copyright">
            &copy;
            <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
        </div>
    </div>
</footer>

<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/js/loader.js"></script>
<script src="node_modules\fullcalendar\dist\locale\es.js"></script>
<script src="node_modules\fullcalendar\dist\fullcalendar.min.js"></script>
<script src="node_modules\moment\src\moment.js"></script>
<script>
    $(document).ready(function(){
        $('#Calendar').fullCalendar();
    });
</script>

<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>
<!-- <script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script> -->
<!-- <script src="assets/js/jquery.select-bootstrap.js"></script> -->
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
<script>
    function passValue($value) {
        document.getElementById('activity_id').value = $value;
        document.getElementById('_id').value = $value;

    }
</script>
<!-- Noty.JS -->
<script src="node_modules/noty/lib/noty.js" type="text/javascript"></script>
<script src="node_modules/sweetalert/dist/sweetalert.min.js" type="text/javascript"></script>
<script>
    swal({
        title: "Inicio de sesion Exitoso",
        icon: "success",
    });
</script>
<?php 
if (isset($_SESSION['auth'])) {
    if ($_SESSION['auth']) {
        echo "<script>
    let log = document.getElementById('log');

    new Noty({
        type: 'success',
        layout: 'bottomRight',
        theme: 'metroui',
        text: '" . $_SESSION['name'] . "Ha iniciado sesion satisfactoriamente',
        timeout: '4000',
        progressBar: true,
        closeWith: ['click'],
        killer: true        
    }).show();
</script>";
    } else {
        echo "<script>
    let log = document.getElementById('log');

    new Noty({
        type: 'error',
        layout: 'topCenter',
        theme: 'metroui',
        text: 'Susuario o contraseña no son correctos',
        timeout: '4000',
        progressBar: true,
        closeWith: ['click'],
        killer: true        
    }).show();
</script>";
    }
} ?>
</body>

</html> 