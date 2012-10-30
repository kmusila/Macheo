<html>
	<head>

		<!-- -->
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css"/>

		<!-- Attach JavaScript files -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" charset="utf-8"></script>
		<script src="<?php echo base_url()?>js/jquery-ui-1.8.18.custom.min.js" type="text/javascript"></script>

		<title>Macheo::Login</title>

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
		<section class="content">
			<form method="POST" action="">
  Username: <input type="text" name="username" size="15" /><br />
  Password: <input type="password" name="passwort" size="15" /><br />
  <div align="center">
    <p><input type="submit" value="Login" /></p>
  </div>
</form>
				
		</section>
		<footer>
			
		</footer>
	
	</body>
</html>