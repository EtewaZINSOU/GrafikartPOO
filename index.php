<?php
/**
 * Created by PhpStorm.
 * User: ALEXIS
 * Date: 14/05/15
 * Time: 12:28
 */
require_once('Form.php');
$form=new Form(array(
			'username'=>'Roger'
	  )
);

echo $form->input('username');
echo $form->input('password');
echo $form->submit();
