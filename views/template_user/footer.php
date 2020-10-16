  <!-- Main Footer -->
  <footer class="main-footer text-center">
      <!-- To the right -->
      <div class="d-none d-sm-inline">
          Copyright &copy SoftwareIncom <?= date('Y'); ?>
      </div>
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/'); ?>dist/js/adminlte.min.js"></script>
  <!-- DataTables -->
  <script src="<?= base_url('assets/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

  <script>
$(function() {
    $('#example1').DataTable({
        "responsive": true,
        "autoWidth": false,
    });
});

$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
})

$(document).ready(function() {
    $('#table').on('click', '.tambah', function() {
        var i = 0;
        var data =
            '<tr><td><select class="form-control custom-select" name="pendidikan[++i]" id="pendidikan"><option value="SD">SD</option><option value="SMP">SMP</option><option value="SMA">SMA</option><option value="SMK">SMK</option><option value="D1">D1</option><option value="D2">D2</option><option value="D3">D3</option><option value="S1">S1</option><option value="S2">S2</option><option value="S3">S3</option></select></td><td><input type="text" class="form-control" name="lembaga[++i]" id="lembaga"></td><td><input type="text" class="form-control" name="lulusan[++i]" id="lulusan"></td><td><input type="text" class="form-control" name="jurusan[++i]" id="jurusan"></td><td><button type="button" class="btn btn-sm btn-danger hapus">-</button></td></tr>';
        $("#tbody").append(data);
    });
    $('#table').on('click', '.hapus', function() {
        var rowIndex = $(this).closest('tr').prop('rowIndex');
        $('#table tr').filter(function() {
            return this.rowIndex === rowIndex;
        }).remove();
    });
});
  </script>

  </body>

  </html>