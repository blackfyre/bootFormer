<?php
/**
 * Created by PhpStorm.
 * User: Galicz Miklós
 * Date: 2014.01.24.
 * Time: 13:20
 */

include 'classes/form.php';

function formExample() {
    $form = new blackfyre\bootFormer\formHandler();

    $_SESSION['postBack']['textInput1'] = 'nincs';

    $form->setFormLayout(_BOOTFORMER_LAYOUT_HORIZONTAL);

    $form->addInput('text','textInput1',array('required'=>true));
    $form->addInput('text','textInput2',array('required'=>true,'label'=>'nincs'));
    $form->addInput('text','textInput3',array('required'=>true,'label'=>'nincs','value'=>'no content'));
    $form->addInput('text','textInput4',array('required'=>true,'label'=>'nincs','placeholder'=>'_PLACEHOLDER'));

    return $form->generateForm();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>bootFormer</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.0.2/css/bootstrap.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Wrap all page content here -->

<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <?php echo formExample(); ?>
        </div>
        <div class="col-xs-6">
            <pre>
<?php print_r($_SESSION) ?>
            </pre>
        </div>
    </div>

</div>

<div id="footer">
    <div class="container">
        <p class="text-muted"><a href="http://blackworks.org">Blackfyre</a></p>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="bootstrap-3.0.2/js/bootstrap.js"></script>

</body>
</html>
