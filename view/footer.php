<footer class="footer">
    <div class="container-fluid">
        <nav>
            <ul>
                <li>
                    <a href="https://www.creative-tim.com">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="http://presentation.creative-tim.com">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
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
<!-- Push.JS -->
<script src="node-modules/noty/lib/noty.js" type="text/javascript"></script>
<?php 
if (isset($_SESSION['admin'])) {
    if ($_SESSION['admin']) {
        echo "<script>
    let log = document.getElementById('log');

    new Noty({
        type: 'success',
        layout: 'bottomRight',
        theme: 'metroui',
        text: 'Ha iniciado sesion satisfactoriamente',
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
<script>
window.reoald();
</script>
<!-- Chart JS -->
<script src="assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/demo/demo.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>
<!-- <script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script> -->
<!-- <script src="assets/js/jquery.select-bootstrap.js"></script> -->
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<script>
    function passValue($value) {
        document.getElementById('activity_id').value = $value;
        document.getElementById('_id').value = $value;

    }
</script>
<script>
    $(document).ready(function() {
        demo.initDashboardPageCharts();
        // Javascript method's body can be found in assets/js/demos.js
    });
</script>
<script src="node"></script>
<script>
    $('.date-picker').each(function() {
        $(this).datepicker({
            templates: {
                leftArrow: '<i class="now-ui-icons arrows-1_minimal-left"></i>',
                rightArrow: '<i class="now-ui-icons arrows-1_minimal-right"></i>'
            }
        }).on('show', function() {
            $('.datepicker').addClass('open');

            datepicker_color = $(this).data('datepicker-color');
            if (datepicker_color.length != 0) {
                $('.datepicker').addClass('datepicker-' + datepicker_color + '');
            }
        }).on('hide', function() {
            $('.datepicker').removeClass('open');
        });
    });
</script>
</body>

</html> 