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

		<title>Macheo::Users</title>

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
			<ul>
				<li><a href="../c_front/mentoreg" class="alllinks">Attendance</a></li>
								<li><a href="../c_front/mentoreg" class="alllinks">Academics</a></li>
				<li><a href="../c_front/mentoreg" class="alllinks">Schedules</a></li>
				<li><a href="../c_front/mentoreg" class="alllinks">Reports</a></li>
			</ul>
		</section>
		<section class="left-sidebar">
				<ul>
					<li><a href="../c_front/mentoreg" class="alllinks">Mentors</a></li>
					<li><a href="../c_front/mentoreg" class="alllinks">Mentees</a></li>
				</ul>
			</section>
		<section class="content">
			
			<b><p>Welcome to Macheo e-mentoring System.</p></b>
			
		</section>
		<footer>
			
		</footer>
	
	</body>
</html>