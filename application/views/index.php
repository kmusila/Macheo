<html>
	<head>

		<!-- -->
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css"/>

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/nivo-slider.css" type="text/css" media="screen" />
    <!--<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen" />-->

		<!-- Attach JavaScript files -->
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" charset="utf-8"></script>
		<script src="<?php echo base_url()?>js/jquery-ui-1.8.18.custom.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo base_url()?>js/jquery.nivo.slider.js"></script>
		<script src="<?php echo base_url()?>js/script.js" type="text/javascript"></script>

		<title>Macheo::Homepage</title>

	</head>

	<body>


<script language="javascript">

$(document).ready(function()
{
    $(".defaultText").focus(function(srcc)
    {
        if ($(this).val() == $(this)[0].title)
        {
            $(this).removeClass("defaultTextActive");
            $(this).val("");
        }
    });
    
    $(".defaultText").blur(function()
    {
        if ($(this).val() == "")
        {
            $(this).addClass("defaultTextActive");
            $(this).val($(this)[0].title);
        }
    });
    
    $(".defaultText").blur();        
});

</script>


		<header>
			<?php $this -> load -> view('banner'); ?>
			 
			</nav>
		</header>
		
		<section class="taskbar">
			<div id="menu-wrapper"> 
                  <ul>
	                 
	                 <li class="active"><a href="../c_front/index" title="Home"> Home </a></li>
                     
                     <li><a href="" title=""> Attendance </a>
    			        <ul class="submenu">
    			        	
				        	<li><a href="<?php echo base_url()?>c_front/mentor_attendance"> Mentor </a></li>
				            <li><a href="<?php echo base_url()?>c_front/mentee_attendance"> Mentee </a></li>
				        </ul>
                     </li>
					
					<li><a href="" title=""> Academics </a>
    					<ul class="submenu">
        					<li><a href="<?php echo base_url()?>c_front/subject"> Subjects </a></li>
            				<li><a href="<?php echo base_url()?>c_front/topic"> Topics </a></li>
							<li><a href="<?php echo base_url()?>c_front/grades"> Grades </a></li>
            			</ul>
       				</li>

  					<li><a href="" title=""> Schedule </a>
   				        <ul class="submenu">
        					<li><a href="<?php echo base_url()?>c_front/tutor"> Tutor </a></li>
            				<li><a href="<?php echo base_url()?>c_front/excursion"> Excursion </a></li>
							<li><a href="../c_front/training" title=""> Training '</a></li>
							<li><a href="../c_front/meeting" title=""> Meeting </a></li>
							<li><a href="../c_front/talk" title=""> Talk </a></li>
    					</ul>
       				</li>

    				<li><a href="" title=""> Reports </a>
        				<ul class="submenu">
	        			</ul>
       				</li>
		
        			
		   
            		<li><a href="../c_front/calendar" title=""> Calendar </a></li>
    				
    				<li><a href="../c_front/budget" title=""> Budget </a>
       					 <ul class="submenu"><!-- sub menu -->
        					<li><a href="../c_front/contribution" title=""> Contributions </a></li>
       					 </ul>
    				</li>
</ul>
 			<section class="search">
				<form>
					<input type="search" placeholder="Search Here..."/>
					<input type="button" name="btnsearch" value="Go"/>
				</form>
			</section> 
      </div>
   </section>

	
    <section class="left-sidebar">
		<ul>
		<li><a href="../c_front/mentoreg" class="alllinks">Mentors</a></li>
		<li><a href="../c_front/menteereg" class="alllinks">Mentees</a></li>
		</ul>
	</section>

	
	<section class="content">
		<!--slider-->
    	<div class="slider-wrapper">
    		<div id="slider" class="nivoSlider">
	      
  <img src="<?php echo base_url()?>images/DSC03403.jpg" alt="" />
    <img src="<?php echo base_url()?>images/DSC03398.jpg" alt="" />
      <img src="<?php echo base_url()?>images/DSC03457.jpg" alt="" />
        <img src="<?php echo base_url()?>images/DSC03509.jpg" alt="" />
          <img src="<?php echo base_url()?>images/DSC03533.jpg" alt="" />
	        <img src="<?php echo base_url()?>images/DSC03539.jpg" alt="" title="#htmlcaption" /></a>
	        <img src="<?php echo base_url()?>images/IMG_7971.jpg" alt="" title="This is an example of a caption" />
	        <img src="<?php echo base_url()?>images/IMG_7993.jpg" alt="" />
	        </div>
 		</div>
 		
 		
		
		 <script type="text/javascript">
 		   $(window).load(function() {
   		   $('#slider').nivoSlider();
   			 });
  		 </script>

	</section>
	
		<footer>
			
		</footer>
	
	</body>
	
</html>