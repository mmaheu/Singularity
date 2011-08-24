<!DOCTYPE html>
<html>
<head>
<title><?php echo $title_for_layout?></title>
    <link rel="stylesheet" type="text/css" media="all" href="http://192.168.1.115/singularity/css/hpmain.css" />
</head>

<body>

<div id="header">
		<img src="http://192.168.1.115/singularity/img/Singularity-logo.png" width="230" height="60" alt="" /> 	<h3></h3>
<?php echo $scripts_for_layout ?>
</div>

<div id="nav">

	<div id="menus">

		<ul><li class="current_page_item"><a href="/singularity">Home</a></li></ul>
	    <ul><li class="page_item page-item-24"><a href="/singularity/storages" title="Storage">Storage</a></li></ul>
	    <ul><li class="page_item page-item-24"><a href="/singularity/crms" title="CRM">CRM</a></li></ul>
	    <ul><li class="page_item page-item-24"><a href="/singularity/accounts" title="Intacct">Intacct</a></li></ul>
	    <ul><li class="page_item page-item-24"><a href="/singularity/davincis" title="Davinci">Davinci</a></li></ul>
   		<?php if($access->isLoggedin()): ?>
            <ul><li class="page_item page-item-24"><a href="/singularity/users/logout" title="Logout">Logout</a></li></ul>
        <?php endif; ?>
        <?php if(!$access->isLoggedin()): ?>
            <ul><li class="page_item page-item-24"><a href="/singularity/users/login" title="Login">Login</a></li></ul>
         <?php endif; ?>
    </div>

     <div>
     </div>

</div>

    <?php echo $this->Session->flash('auth'); ?>
	<div id="content">
        <?php echo $content_for_layout ?>
	</div>

</div>


</div>

<div id="wrapper">
	<div id="header2">

	<!--	<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a></h1>
		<h2><?php bloginfo('description');?></h2> -->
		<div class="clear"></div>
	</div>

<br/>
<br/>




</body>
</html>




