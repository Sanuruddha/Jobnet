<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Portal 2</title>
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/custom.css">
        <script src="<?php echo base_url('js/jquery-3.1.1.js');?>" type="text/javascript"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Navigation -->
        <?php include 'navigation.php'; ?>
        <?php //include 'jumbotron.php'; ?>



        <div class="container-fluid">

            <!-- Left Column -->
            <?php include 'leftcolumn.php'; ?>
            <!--/Left Column-->


            <!-- Center Column -->
            <?php include 'centercolumn.php'; ?>
            <!--/Center Column-->


            <!-- Right Column -->
            <?php include 'rightcolumn.php'; ?>
            <!--/Right Column -->

        </div><!--/container-fluid-->
        <?php include 'footer.php'; ?>

        <script type = 'text/javascript' src = "<?php echo base_url();
        ?>js/jquery-1.11.3.min.js"></script>
        <script type = 'text/javascript' src = "<?php echo base_url();
        ?>js/bootstrap.min.js"></script>
        <script type = 'text/javascript' src = "<?php echo base_url();
        ?>js/ie10-viewport-bug-workaround.js"></script>
        <script type = 'text/javascript' src = "<?php echo base_url();
        ?>js/holder.min.js"></script>
        <script type = 'text/javascript' src = "<?php echo base_url();
        ?>js/custom.js"></script>


    </body>

</html>
