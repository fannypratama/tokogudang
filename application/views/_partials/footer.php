<!-- .right-sidebar -->
<div class="right-sidebar">
    <div class="slimscrollright">
        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
        <div class="r-panel-body">
            <ul>
                <li><b>Layout Options</b></li>
                <li>
                    <div class="checkbox checkbox-info">
                        <input id="checkbox1" type="checkbox" class="fxhdr">
                        <label for="checkbox1"> Fix Header </label>
                    </div>
                </li>
                <li>
                    <div class="checkbox checkbox-warning">
                        <input id="checkbox2" type="checkbox" checked="" class="fxsdr">
                        <label for="checkbox2"> Fix Sidebar </label>
                    </div>
                </li>
                <li>
                    <div class="checkbox checkbox-success">
                        <input id="checkbox4" type="checkbox" class="open-close">
                        <label for="checkbox4"> Toggle Sidebar </label>
                    </div>
                </li>
            </ul>
            <ul id="themecolors" class="m-t-20">
                <li><b>With Light sidebar</b></li>
                <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
                <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                <li><b>With Dark sidebar</b></li>
                <br />
                <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme working">7</a></li>
                <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
            </ul>
            <ul class="m-t-20 chatonline">
                <li><b>Chat option</b></li>
                <li>
                    <a href="javascript:void(0)"><img src="<?= base_url('assets/'); ?>plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="txt-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="<?= base_url('assets/'); ?>plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="<?= base_url('assets/'); ?>plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="<?= base_url('assets/'); ?>plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="<?= base_url('assets/'); ?>plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="<?= base_url('assets/'); ?>plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="<?= base_url('assets/'); ?>plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="<?= base_url('assets/'); ?>plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /.right-sidebar -->
</div>
<!-- /.container-fluid -->
</div>
<footer class="footer text-center"> <?= date('Y'); ?> &copy; Nakula Sadewa | Inventory </footer>
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="<?= base_url('assets/'); ?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url('assets/'); ?>bootstrap/dist/js/tether.min.js"></script>
<script src="<?= base_url('assets/'); ?>bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?= base_url('assets/'); ?>js/dnm.js"></script> 
<script src="<?= base_url('assets/'); ?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.PrintArea.js" type="text/JavaScript"></script>
    <script>
    $(document).ready(function() {
        $("#print").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.printableArea").printArea(options);
        });
    });
    </script>
<!--slimscroll JavaScript -->
<script src="<?= base_url('assets/'); ?>js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?= base_url('assets/'); ?>js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?= base_url('assets/'); ?>js/custom.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/tampil.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- Clock Plugin JavaScript -->
<script src="<?= base_url('assets/'); ?>plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js"></script>
<!-- Color Picker Plugin JavaScript -->
<script src="<?= base_url('assets/'); ?>plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
<!-- Date Picker Plugin JavaScript -->
   
<!-- Date range Plugin JavaScript -->
<script src="<?= base_url('assets/'); ?>plugins/bower_components/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script>
    <!-- start - This is for export functionality only 
    -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });
        // Used events
        var drEvent = $('#input-file-events').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });
        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });
        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });
        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>
    <script src="<?= base_url('assets/'); ?> js/jquery.PrintArea.js" type="text/JavaScript"></script>
    <script>
    $(document).ready(function() {
        $("#print").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.printableArea").printArea(options);
        });
    });
    </script>
<!-- end - This is for export functionality only -->
<script>
    // Clock pickers
    $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    $('.clockpicker').clockpicker({
        donetext: 'Done',
    }).find('input').change(function() {
        console.log(this.value);
    });
    $('#check-minutes').click(function(e) {
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show').clockpicker('toggleView', 'minutes');
    });
    if (/mobile/i.test(navigator.userAgent)) {
        $('input').prop('readOnly', true);
    }
    // Colorpicker
    $(".colorpicker").asColorPicker();
    $(".complex-colorpicker").asColorPicker({
        mode: 'complex'
    });
    $(".gradient-colorpicker").asColorPicker({
        mode: 'gradient'
    });
    // Date Picker
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });
    jQuery('#datepicker-inline').datepicker({
        todayHighlight: true
    });
    // Daterange picker
    $('.input-daterange-datepicker').daterangepicker({
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-daterange-timepicker').daterangepicker({
        timePicker: true,
        format: 'MM/DD/YYYY h:mm A',
        timePickerIncrement: 30,
        timePicker12Hour: true,
        timePickerSeconds: false,
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-limit-datepicker').daterangepicker({
        format: 'MM/DD/YYYY',
        minDate: '06/01/2015',
        maxDate: '06/30/2015',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse',
        dateLimit: {
            days: 6
        }
    });
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>
<!--Style Switcher -->
<script src="<?= base_url('assets/'); ?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>
</body>

</html> 