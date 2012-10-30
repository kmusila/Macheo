<html>
	<head>

		<!-- -->
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"/>

		<!-- Attach JavaScript files -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" charset="utf-8"></script>
		<script src="<?php echo base_url()?>js/jquery-ui-1.8.18.custom.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>js/script.js" type="text/javascript"></script>
		<title>Macheo::Topics Page</title>

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
							<!--<section class="search">
					<form>
						<input type="search" placeholder="Search Here..."/
					</form>
				</section> -->
			</nav>
		</header>
		

		<section class="taskbar">
			<div id="menu-wrapper"> 
                  <ul>
	                 
	                 <li class="active"><a href="../c_front/index" title="Home"> Home </a></li>
                     
                     <li><a href="" title=""> Attendance </a>
    			        <ul class="submenu">
				        	<li><a href="../c_front/mentor_attendance" title=""> Mentor </a></li>
				            <li><a href="../c_front/mentee_attendance" title=""> Mentee </a></li>
				        </ul>
                     </li>
					
					<li><a href="" title=""> Academics </a>
    					<ul class="submenu">
        					<li><a href="../c_front/subject" title=""> Subjects </a></li>
            				<li><a href="../c_front/topic" title=""> Topics </a></li>
							<li><a href="../c_front/grades" title=""> Grades </a></li>
            			</ul>
       				</li>

  					<li><a href="" title=""> Schedule </a>
   				        <ul class="submenu">
        					<li><a href="../c_front/tutor" title=""> Tutor </a></li>
            				<li><a href="../c_front/excursion" title=""> Excursion </a></li>
							<li><a href="../c_front/training" title=""> Training </a></li>
							<li><a href="../c_front/meeting" title=""> Meeting </a></li>
							<li><a href="../c_front/talk" title=""> Talk </a></li>
    					</ul>
       				</li>

    				<li><a href="" title=""> Reports </a>
        				<ul class="submenu">
	        			</ul>
       				</li>
		
        			
		   
            		<li><a href="" title=""> Calendar </a></li>
    				
    				<li><a href="" title=""> Budget </a>
       					 <ul class="submenu"><!-- sub menu -->
        					<li><a href="" title=""> Contributions </a></li>
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
			
			<b><p>Welcome to Macheo e-mentoring System.</p></b>
			
		</section>
		<footer>
			
		</footer>
	
	</body>
</html>