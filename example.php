<?php
/**
 * Created by PhpStorm.
 * User: Galicz Miklós
 * Date: 2014.01.24.
 * Time: 13:20
 */

session_start();

include 'classes/form.php';


    $form = new blackfyre\bootFormer\formHandler();

    $_SESSION['postBack']['textInput1'] = 'nincs';
    $_SESSION['postBack']['checkBoxes[]'] = 2;

    $_SESSION['postBack']['select1'] = 2;

    $form->setFormLayout(_BOOTFORMER_LAYOUT_NORMAL);

    $form->addInput('text','textInput1');
    $form->addInput('text','textInput2',array('label'=>'nincs'));
    $form->addInput('text','textInput3',array('label'=>'nincs','value'=>'no content'));
    $form->addInput('text','textInput4',array('label'=>'nincs','placeholder'=>'_PLACEHOLDER'));
    $form->addInput('text','textInput5',array('placeholder'=>'_PLACEHOLDER','leftCombo'=>'_LEFT','rightCombo'=>'_RIGHT'));

    $selectValues[1] = 1;
    $selectValues[2] = 2;
    $selectValues[3] = 3;
    $selectValues[4] = 4;

    $selectValues['names'] = array(
        5=>5,
        6=>6,
        7=>7,
    );

    $form->addInput('select','select1',array('value'=>$selectValues));
    $form->addInput('select','select2[]',array('value'=>$selectValues,'multiple'=>true));

    $form->addInput('textarea','textArea1');
    $form->addInput('textarea','textArea1',array('value'=>'_DEMO_CONTENT'));

    $form->addInput('checkbox','checkBox1',array('value'=>'_DEMO_CONTENT','label'=>'Check this label'));

    $form->addInput('radio','radioDemo',array('value'=>1,'label'=>'Radio option 1'));
    $form->addInput('radio','radioDemo',array('value'=>2,'label'=>'Radio option 2'));

    $inlineElements[] = array('value'=>'1','label'=>'1');
    $inlineElements[] = array('value'=>'2','label'=>'2');
    $inlineElements[] = array('value'=>'3','label'=>'3');

    $form->addInput('checkbox-inline','checkBoxes[]',array('value'=>$inlineElements));

    $form->addInput('radio-inline','radioOptions[]',array('value'=>$inlineElements));

    $form->addInput('button','btn1',array('class'=>'btn-default','value'=>'BUTTON'));
    $form->addInput('submit','btn2',array('value'=>'SUBMIT'));




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
            <?php echo $form->generateForm();



            ?>



        </div>
        <div class="col-xs-6">
            <pre>
<?php print_r($_SESSION) ?>
            </pre>

            <?php
            if (isset($_POST['submit-btn2'])) {
                echo '<hr>';
                var_dump($form->validator());
            }
            ?>

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
