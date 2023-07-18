

<?php $__env->startSection('content'); ?>
<style type="text/css">
  .btn-secondary{
    background-color: transparent!important;
    margin: 5px;
  }

  .btn-excel:hover {
    color: #FFF!important;
    border-color: #28a745!important;
    background-color: #28a745!important;
    text-decoration: none;
  }

  .btn-pdf:hover {
    color: #FFF!important;
    border-color: #ffc107!important;
    background-color: #ffc107!important;
    text-decoration: none;
  }
</style>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo e(__('Data Rekening Bank')); ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-sm-12 col-md-8">
                       <?php if($message = Session::get('success')): ?>
                          <div class="alert alert-success" role="alert">
                            <?php echo e($message); ?>

                          </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <?php if($guard->level == 1): ?>
                          <a class="btn btn-outline-primary btn-block" href="<?php echo e(route('banks.create')); ?>">
                            <i class="fa fa-plus"></i>  Tambah Data Rekening Bank
                          </a>
                        <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row mt-3">
                      <div class="col-sm-12">
                        <div class="table-responsive">
                          <table id="tb_user" class="table table-bordered table-hover dataTable dtr-inline collapsed" aria-describedby="tb_user_info" width="100%">
                            <thead>
                              <tr>
                                <th class="sorting">No</th>
                                <th class="sorting">Nama Bank</th>
                                <th class="sorting">No Rekening</th>
                                <th class="sorting">Nama Pemilik</th>
                                <th>Action</th>
                              </tr> 
                            </thead>
                            <tbody>
                            </tbody> 
                          </table>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
<script src="<?php echo e(asset( 'assets/js/jquery-1.9.1.js')); ?>"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script type="text/javascript">
  $(document).ready(function () {   
    setTimeout(() => {
      //$('.alert').attr('style','display:none');
      $('.alert').hide(1000);
    }, 1000); // 👈️ time in milliseconds

    var isAdmin = <?php echo e($guard->level); ?>;
    var i=1;
    $('#tb_user').DataTable({
         /*"dom": 'Bfrtip',
                    "buttons": [
                        //'copyHtml5',
                        //'excelHtml5',
                        //'csvHtml5',
                        //'pdfHtml5',
                        {
                            "extend": 'pdf', 
                            "className": 'btn btn-outline-warning btn-pdf',
                            "text": '<i class=\'fa fa-file-pdf\'></i> Eport Pdf',
                            "titleAttr": 'PDF',
                            "exportOptions": {
                                columns: [ 0, 1, 2, 3, 4, 5, 6]
                            },
                            "action": newexportaction
                        },
                        {
                            "extend": 'excel',
                            "className": 'btn btn-outline-success btn-excel',
                            "text": '<i class=\'fa fa-file-excel\'></i> Export Excel',
                            "titleAttr": 'Excel',
                            "exportOptions": {
                                columns: [ 0, 1, 2, 3, 4, 5, 6]
                            },
                            "action": newexportaction
                        },
                    ],*/
        "autoWidth": false,
        "processing": true,
        "serverSide": true,
        ajax: "<?php echo e(route('banks')); ?>",
        responsive: {
          details: {
            type: 'column'
          }
        },
        columns: [
            //{data: 'id', render: function( data, type, row, meta ) {
            //  return i++;
            //},name: 'id'},
            {data: 'bank_id', name: 'bank_id'},
            {data: 'bank_name', name: 'bank_name'},
            {data: 'bank_num', name: 'bank_num'},
            {data: 'bank_own', name: 'bank_own'},
            {data: 'action', render: function ( data, type, row, meta ) {
              if(isAdmin == 1){
                return  '<div style="text-align: center">' + 
                          '<a class="Edit" href="banks/edit/'+row.bank_id+'" style="color:#007bff"><i class="fas fa-pen" title="Edit"></i></a> &nbsp; ' + 
                          '<a class="delete" href="banks/destroy/'+row.bank_id+'" onclick="return confirm(\'Apakah yakin akan menghapus rekening @'+row.bank_name+'\')" style="color:#dc3545"><i class="fas fa-trash" title="Hapus"></i></a> &nbsp; ' + 
                          '<a class="show" href="banks/show/'+row.bank_id+'" style="color:#17a2b8"><i class="fas fa-eye" title="Detail"></i></a> &nbsp;</div>';    
              }else{
                return '<div><i class="fas fa-pen" title="Edit"></i>&nbsp;<i class="fas fa-trash" title="Hapus"></i>&nbsp;<i class="fas fa-eye" title="Detail"></i></div>';
              }
            }, name: 'action', orderable: false, searchable: false},
        ],
        createdRow: function ( row, data, index ) {
                    $('td', row).eq(4).addClass('text-right');
                }
    });
     
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminlte.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pta_multiple\resources\views/banks/index.blade.php ENDPATH**/ ?>