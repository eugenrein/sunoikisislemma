<?php 
    include_once('functions.php');
    include_once('header.php'); 
?>
<body>
    <nav class="dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-2 col-md-1">
                    <a href="index.php" class="nav-logo">
                        <img alt="robot" src="robot.png" width="100" class="img-responsive center-block">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-9 col-md-11">
                    <form action="load.php" method="post" id="searchform" class="row">
                        <div class="form-group col-sm-10">
                            <textarea name="lemmata" id="lemmata" class="form-control" rows="2"></textarea>
                        </div>
                        <div class="form-group col-sm-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="container-fluid" id="content">
        <?php load_data($_POST); ?>
    </div>

<?php include_once('footer.php'); ?>