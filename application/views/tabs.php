<!doctype html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>jQuery UI Tabs - Default functionality</title>
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css"/>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" charset="utf-8"></script>
		<script src="<?php echo base_url()?>js/jquery-ui-1.8.18.custom.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo base_url()?>js/jquery.nivo.slider.js"></script>
		<script src="<?php echo base_url()?>js/script.js" type="text/javascript"></script>


<script>
	$('.received.title').click(function(){
alert('Clicked Received');
$('.tab.received').show();    
$('.tab.dispatched').hide();

});

$('.dispatched.title').click(function(){

$('.tab.dispatched').show();    
$('.tab.received').hide();

});
</script>
</head>
<body>
 

<div class="tab-title">
<div class="title received">Received</div>
<div class="title dispatched">Dispatched</div>
</div>
<div class="tab received">
Received TAB
    d
    d
    d
    d
    d
    d
    d
    d
    d
    d
    d
    d
    
</div>
<div class="tab dispatched" style="display:none">
Dispatched TAB
    h
    h
    h
    h
    hh
    h
    h
    h
    h
    h
    h
    h
    h
    h
    h
    h
    h
    
</div>

​
 
 
</body>
</html>