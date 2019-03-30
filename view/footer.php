<footer class="footer">
    <div class="container-fluid">
        <nav>
            <ul>
                <li>
                    <a href="https://www.google.com/maps/place/Sena+Ternera/@10.3738577,-75.462697,17z/data=!3m1!4b1!4m12!1m6!3m5!1s0x8ef6269fd181cc07:0xa6016d8aaf8bf5bc!2sSena+Ternera!8m2!3d10.3738577!4d-75.4605083!3m4!1s0x8ef6269fd181cc07:0xa6016d8aaf8bf5bc!8m2!3d10.3738577!4d-75.4605083">
                        Centro Comercio y Servicios - SENA Ternera Km. 1 Vía Turbaco CTG
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
            <a href="https://www.creative-tim.com" target="_blank">ADSI Team</a>.
        </div>
    </div>
</footer>

<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/js/loader.js"></script>
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>
<script src="assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Noty.JS -->
<script src="node_modules/noty/lib/noty.js" type="text/javascript"></script>
<!-- Sweetaler.JS -->
<script src="node_modules/sweetalert/dist/sweetalert.min.js" type="text/javascript"></script>
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
<!-- Fullcalendar.js -->
<script src='assets/fullcalendar-4.0.1\packages\core\main.js'></script>
<script src='assets/fullcalendar-4.0.1\packages\daygrid\main.js'></script>
<script src='assets\fullcalendar-4.0.1\packages\list\main.js'></script>
<script src='assets\fullcalendar-4.0.1\packages\timegrid\main.js'></script>
<script src='assets\fullcalendar-4.0.1\packages\interaction\main.js'></script>
<script src='assets\fullcalendar-4.0.1\packages\bootstrap\main.js'></script>
<script>
    function passValue($value) {
        document.getElementById('_id').value = $value;

    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['dayGrid', 'timeGrid', 'list', 'interaction', 'bootstrap'],
            themeSystem: 'bootstrap',
            // timeZone:'UTC',
            events: [
                <?php foreach ($this->model->ListarActividad() as $r) : ?> {
                    id: <?= $r->id; ?>,
                    start: '<?= $r->date; ?>',
                    token: '<?= $r->token_id; ?>',
                    action: '<?= $r->exe_id; ?>',
                    title: '<?= $r->exe_name; ?>',
                },
                <?php endforeach; ?>
            ],
            dateClick: function(info) {
                document.getElementById('id').value = '';
                document.getElementById('date').value = '';
                document.getElementById('token_id').value = '';
                document.getElementById('action_id').value = '';
                document.getElementById('name').textContent = 'Creando Actividad';
                $('#myModal3').modal();
            },
            eventClick: function(info) {
                document.getElementById('id').value = info.event.id;
                document.getElementById('date').value = info.event.start;
                document.getElementById('token_id').value = info.event.id;
                document.getElementById('action_id').value = info.event.id;
                document.getElementById('name').textContent = info.event.title;
                $('#myModal3').modal();
            },
            contentHeight: 500,
            buttonText: {
                today: 'Hoy',
                month: 'M',
                week: 'S',
                day: 'D',
            },
            // titleFormat: {
            //     year: 'numeric',
            //     month: 'short',
            //     day: 'numeric'
            // },
            header: {
                left: 'dayGridMonth,timeGridWeek,timeGridDay',
                center: 'title',
                right: 'prev,today,next'
            },
            // plugins: ['timeGrid'],
            // plugins: ['list'],
            // defaultView: 'listWeek',
        });
        // calendar.changeView('timeGridWeek')
        calendar.setOption('locale', 'es');
        calendar.render();
    });
</script>

<?php 
if (isset($_COOKIE['auth'])) {
    if ($_COOKIE['auth']) {
        echo "
        <script>
        let log = document.getElementById('log');
        new Noty({
            type: 'success',
            layout: 'bottomRight',
            theme: 'metroui',
            text: '" . $_COOKIE['name'] . "Ha iniciado sesion satisfactoriamente',
            timeout: '4000',
            progressBar: true,
            closeWith: ['click'],
            killer: true        
        }).show();
        </script>";
        echo "
        <script>
            swal({
                title: ' Inicio de sesion Exit oso',
                icon : 'success',
            });
        </script>";
    }
}
?>
</body>

</html> 