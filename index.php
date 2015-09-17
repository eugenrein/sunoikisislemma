<?php include_once('header.php'); ?>
<body class="dark">
    <div class="container-fluid" id="content">
        <div class="row">
            <img src="robot.png" width="300" class="img-responsive center-block">
        </div>
        <div class="row">
            <h2 class="text-center">Search: Lexicon Formarum Graecarum Treebankearum (LeFGraeT)</h1>
            <form action="load.php" method="post" class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-offset-2" id="searchform">
                <div class="form-group">
                    <textarea name="lemmata" id="lemmata" class="form-control" rows="5"></textarea>
                    <span class="help-block">Separate lemmata with newline.</span>
                </div>
                <div class="pull-right"><button type="submit" class="btn btn-primary">Submit</button></div>
            </form>
        </div>
    </div>

<?php include_once('footer.php'); ?>