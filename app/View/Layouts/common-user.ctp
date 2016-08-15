<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Language" content="ja" />
<meta http-equiv="Content-Type" content=content="text/html; charset=UTF charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />  
<meta name="copyright" content="COPYRIGHT&copy;KANADEN CORPORATION." />
<meta name meta name keywords ="keywords" content content="カンマ区切りでSEO対策用キーワードを記述" />
<?php echo $this->Html->charset(); ?>
<title><?php echo $title_for_layout; ?></title>  
<?php echo $this->Html->meta('icon'); ?>
<?php echo $this->Html->css('common/reset'); ?>    
<?php echo $this->Html->css('common/common'); ?>
<?php echo $this->Html->css('common/header'); ?>   
<?php echo $this->Html->css('common/nav'); ?>
<?php echo $this->Html->css('common/footer'); ?>
<?php echo $this->Html->css('common/jquery.bxslider'); ?>
<?php echo $this->Html->script('jquery.bxslider.min'); ?>
<?php echo $scripts_for_layout; ?>   
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>   
<?php echo $this->element('customer/src'); ?>
</head>
<body id="pagehome">
    <div id="wrapper">
 
        <?php echo $this->element('common/header'); ?>
        
        <?php echo $this->element('common/contents'); ?>        
        
        <?php echo $this->element('common/footer'); ?>
        
    </div>    
</body>
</html>