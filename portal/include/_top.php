<?php
require_once 'include/_tab.php';
require_once 'include/cl_module.php'; 
require_once 'include/_modulesX.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd ">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">
<title><?php echo $lan['name'] . (!empty($title) ? ' - ' . $title : ''); ?></title>
<link rel="shortcut icon" href="favicon.ico" />
<style type="text/css" media="all">
	<?php include_once $master['currentskin'].'x.css.php'; ?>
</style>
</head>
<body text="<?php echo $colors['text']; ?>" link="<?php echo $colors['text']; ?>" alink="<?php echo $colors['text']; ?>" vlink="<?php echo $colors['text']; ?>" bgcolor="<?php echo $colors['background']; ?>"<?php echo (!empty($images['background'])?' background="'.$master['currentskin'].$images['background'].'"':''); ?>>
<?php
require_once $master['currentskin'].'_top.php';