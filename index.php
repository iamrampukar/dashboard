<?php include('includes/header.php'); ?>
        <?php include('includes/main_header.php'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php 
            // include('pages/home.php'); 
            // include('pages/category.php'); 
            // include('pages/modal_form.php'); 
            // include('pages/category_list.php'); 
            // include('pages/project_detail.php'); 
            // include('pages/404.php'); 
            // include('pages/500.php'); 
            // include('pages/contact.php'); 
            // include('pages/profile.php'); 
            include('pages/chart.php'); 
            ?>
        </div>
        <!-- /.content-wrapper -->
    <?php include('includes/footer.php'); ?>

     <?php //include('pages/recover_passwor.php'); ?>
    <?php //include('pages/forgot_password.php'); ?>
    <?php //include('pages/login.php'); ?>
    <?php //include('pages/register.php'); ?>
    <?php //include('pages/lockscreen.php'); ?>

    <script type="text/javascript">
        $.ajax({
            url: '/path/to/file',
            type: 'default GET (Other values: POST)',
            dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
            data: {param1: 'value1'},
        })
        .done(function() {
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        
    </script>