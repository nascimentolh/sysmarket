<?php
// Variaveis para controle do menu e do breadcrumb
$ativo = "categorieshome";
$tree = "";
$page_name = "Adicionar Categoria";
$breadcrumb = [
    [
        'title' => 'Dashboard',
        'url' => '/sysmarket'
    ],
    [
        'title' => 'Gerenciar Categorias',
        'url' =>    URL::getBase().'categorieshome'
    ],
    [
        'title' => 'Adicionar Categoria',
        'url' => ''
    ]    
];
include_once('./includes/_header.php');
?>

<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-body">
                <form action="">
                    
                </form>
            </div>
        </div>
    </div>
</div>

<!-- REQUIRED JS SCRIPTS -->
<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<!-- jQuery 3 -->
<script src="<?php echo URL::getBase(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo URL::getBase(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo URL::getBase(); ?>dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="<?php echo URL::getBase(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URL::getBase(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo URL::getBase(); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo URL::getBase(); ?>bower_components/fastclick/lib/fastclick.js"></script>

<?php include_once('./includes/_footer.php'); ?>