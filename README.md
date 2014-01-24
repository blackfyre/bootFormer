bootFormer
==========

Why should frameworks have all the fun? Create bootstrap forms and validate them with php

Maybe it's not the best and easiest way to create forms, but at least this "little" piece of code comes with built-in server side validation and file upload management...

To use, simply include the form.php found in classes. I haven't tested the composer added version yet...

How to create a form?
---------------------

<!-- language: php -->

    $form = new blackfyre\bootFormer\formHandler();

    $form->setFormLayout(_BOOTFORMER_LAYOUT_NORMAL);

    $form->addInput('text','textInput1',array('required'=>true));
    $form->addInput('text','textInput2',array('required'=>true,'label'=>'nincs'));
    $form->addInput('text','textInput3',array('required'=>true,'label'=>'nincs','value'=>'no content'));
    $form->addInput('text','textInput4',array('required'=>true,'label'=>'nincs','placeholder'=>'_PLACEHOLDER'));
    $form->addInput('text','textInput5',array('required'=>true,'placeholder'=>'_PLACEHOLDER','leftCombo'=>'_LEFT','rightCombo'=>'_RIGHT'));

    $selectValues[] = 1;
    $selectValues[] = 2;
    $selectValues[] = 3;
    $selectValues[] = 4;

    $form->addInput('select','select1',array('value'=>$selectValues));
    $form->addInput('select','select2',array('value'=>$selectValues,'multiple'=>true));

    $form->addInput('textarea','textArea1');
    $form->addInput('textarea','textArea1',array('value'=>'_DEMO_CONTENT'));

    $form->addInput('button','btn1',array('class'=>'btn-default','value'=>'BUTTON'));
    $form->addInput('submit','btn2',array('value'=>'SUBMIT'));

    echo $form->generateForm();