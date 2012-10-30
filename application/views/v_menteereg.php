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
		<title>Macheo::Mentee Registration</title>



<link href="<?php echo base_url()?>css/smart_wizard.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.smartWizard-2.0.min.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
    	// Smart Wizard     	
  		$('#wizard').smartWizard({transitionEffect:'slideleft',onLeaveStep:leaveAStepCallback,onFinish:onFinishCallback,enableFinishButton:true});

      function leaveAStepCallback(obj){
        var step_num= obj.attr('rel');
        return validateSteps(step_num);
      }
      
      function onFinishCallback(){
       if(validateAllSteps()){
        $('form').submit();
       }
      }
		});
	   
    function validateAllSteps(){
       var isStepValid = true;
       
       if(validateStep1() == false){
         isStepValid = false;
         $('#wizard').smartWizard('setError',{stepnum:1,iserror:true});         
       }else{
         $('#wizard').smartWizard('setError',{stepnum:1,iserror:false});
       }
       
       if(validateStep3() == false){
         isStepValid = false;
         $('#wizard').smartWizard('setError',{stepnum:3,iserror:true});         
       }else{
         $('#wizard').smartWizard('setError',{stepnum:3,iserror:false});
       }
       
       if(!isStepValid){
          $('#wizard').smartWizard('showMessage','Please correct the errors in the steps and continue');
       }
              
       return isStepValid;
    } 	
		
		
		function validateSteps(step){
		  var isStepValid = true;
      // validate step 1
      if(step == 1){
        if(validateStep1() == false ){
          isStepValid = false; 
          $('#wizard').smartWizard('showMessage','Please correct the errors in step'+step+ ' and click next.');
          $('#wizard').smartWizard('setError',{stepnum:step,iserror:true});         
        }else{
          $('#wizard').smartWizard('setError',{stepnum:step,iserror:false});
        }
      }
      
      // validate step3
      if(step == 3){
        if(validateStep3() == false ){
          isStepValid = false; 
          $('#wizard').smartWizard('showMessage','Please correct the errors in step'+step+ ' and click next.');
          $('#wizard').smartWizard('setError',{stepnum:step,iserror:true});         
        }else{
          $('#wizard').smartWizard('setError',{stepnum:step,iserror:false});
        }
      }
      
      return isStepValid;
    }
		
		function validateStep1(){
       var isValid = true; 
       // Validate Username
       var un = $('#username').val();
       if(!un && un.length <= 0){
         isValid = false;
         $('#msg_username').html('Please fill username').show();
       }else{
         $('#msg_username').html('').hide();
       }
       
       // validate password
       var pw = $('#password').val();
       if(!pw && pw.length <= 0){
         isValid = false;
         $('#msg_password').html('Please fill password').show();         
       }else{
         $('#msg_password').html('').hide();
       }
       
       // validate confirm password
       var cpw = $('#cpassword').val();
       if(!cpw && cpw.length <= 0){
         isValid = false;
         $('#msg_cpassword').html('Please fill confirm password').show();         
       }else{
         $('#msg_cpassword').html('').hide();
       }  
       
       // validate password match
       if(pw && pw.length > 0 && cpw && cpw.length > 0){
         if(pw != cpw){
           isValid = false;
           $('#msg_cpassword').html('Password mismatch').show();            
         }else{
           $('#msg_cpassword').html('').hide();
         }
       }
       return isValid;
    }
    
    function validateStep3(){
      var isValid = true;    
      //validate email  email
      var email = $('#email').val();
       if(email && email.length > 0){
         if(!isValidEmailAddress(email)){
           isValid = false;
           $('#msg_email').html('Email is invalid').show();           
         }else{
          $('#msg_email').html('').hide();
         }
       }else{
         isValid = false;
         $('#msg_email').html('Please enter email').show();
       }       
      return isValid;
    }
    
    // Email Validation
    function isValidEmailAddress(emailAddress) {
      var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
      return pattern.test(emailAddress);
    } 
		
		
</script>
		
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
			<div class="titleform" id="">
			     <h4> Mentee Registration</h4>
			</div>
		
		<form action="#" method="POST">
  <input type='hidden' name="issubmit" value="1">
<!-- Tabs -->
  		<div id="wizard" class="swMain">
  			<ul>
  				<li><a href="#step-1">
                <label class="stepNumber">1</label>
                <span class="stepDesc">
                   Mentee Details<b r />
                   <small>Fill in mentee details</small>
                </span>
            </a></li>
  				<li><a href="#step-2">
                <label class="stepNumber">2</label>
                <span class="stepDesc">
                   Background Details<br />
                   <small>Fill in mentee background details</small>
                </span>
            </a></li>
  				<li><a href="#step-3">
                <label class="stepNumber">3</label>
                <span class="stepDesc">
                   Academic Details<br />
                   <small>Fill in mentee academic details</small>
                </span>
             </a></li>
  				<li><a href="#step-4">
                <label class="stepNumber">4</label>
                <span class="stepDesc">
                   Mentee Goal Details<br />
                   <small>Fill in mentee goals</small>
                </span>
            </a></li>
  			</ul>
  			<div id="step-1">	
            <h2 class="StepTitle">Step 1: Mentee Details</h2>
            <table cellspacing="3" cellpadding="3" align="center">
          			<tr>
                    	<td align="center" colspan="3">&nbsp;</td>
          			</tr>        
          			<tr>
                    	<td align="right">Surname :</td>
                    	<td align="left">
                    	  <input type="text" id="username" name="username" value="" class="txtBox">
                      </td>
                    	<td align="left"><span id="msg_username"></span>&nbsp;</td>
          			</tr>
          			
          			<tr>
                    	<td align="right">First Name :</td>
                    	<td align="left">
                    	  <input type="text" id="firstname" name="firstname" value="" class="txtBox">
                      </td>
                    	<td align="left"><span id="msg_firstname"></span>&nbsp;</td>
          			</tr>
          			
          			<tr>
                    	<td align="right">Other Name :</td>
                    	<td align="left">
                    	  <input type="text" id="othername" name="othername" value="" class="txtBox">
                      </td>
                    	<td align="left"><span id="msg_othername"></span>&nbsp;</td>
          			</tr>
          			
          			<tr>
                    	<td align="right">Sex:</td>
                    	<td align="left">
                    	 <select id="sex" name="sex" class="txtBox">
                          <option value="">-select-</option>
                          <option value="Female">Female</option>
                          <option value="Male">Male</option>                 
                        </select>
                      </td>
                    	<td align="left"><span id="msg_sex"></span>&nbsp;</td>
          			</tr> 
                <tr>
                    	<td align="right">Date of Birth :</td>
                    	<td align="left">
                    	  <input type="date" />
                      </td>
                    	<td align="left"><span id="msg_dob"></span>&nbsp;</td>
          			</tr>   
          			
          			 <tr>
                    	<td align="right">Date joined:</td>
                    	<td align="left">
                    	   <input type="date">
                      </td>
                    	<td align="left"><span id="msg_djoined"></span>&nbsp;</td>
          			</tr>   
          			 <tr>
                    	<td align="right">Mentee Photo :</td>
                    	<td align="left">
                    	  <input type="file" />
                      </td>
                    	<td align="left"><span id="msg_photo"></span>&nbsp;</td>
          			</tr>                               			
  			   </table>          			
        </div>
  			<div id="step-2">
            <h2 class="StepTitle">Step 2: Background Details</h2>	
            <table cellspacing="3" cellpadding="3" align="center">
          			<tr>
                    	<td align="center" colspan="3">&nbsp;</td>
          			</tr>        
          			<tr>
                    	<td align="right">Home Location:</td>
                    	<td align="left">
                    	  <input type="text" id="homelocation" name="homelocation" value="" class="txtBox">
                      </td>
                    	<td align="left"><span id="msg_homelocation"></span>&nbsp;</td>
          			</tr>
          			<tr>
                    	<td align="right">Status:</td>
                    	<td align="left">
                    	  
                    	 <select id="sex" name="" class="txtBox">
                          <option value="">-select-</option>
                          <option value="single">Single</option>
                          <option value="orphaned">Orphaned</option>
                          <option value="both">Both</option>                 
                        </select>
                      </td>
                    	<td align="left"><span id="msg_status"></span>&nbsp;</td>
          			</tr> 
          			<tr>
                    	<td align="right">Siblings:</td>
                    	<td align="left">
                        <input type="text" name="siblings" />
                      </td>
                    	<td align="left"><span id="msg_siblings"></span>&nbsp;</td>
          			</tr>   
          			<tr style="height: 20px"><td>Father's Details</td></tr> 
          			<tr>
                    	<td align="right">Name:</td>
                    	<td align="left">
                        <input type="text" name="fathersname" />
                      </td>
                    	<td align="left"><span id="msg_fathersname"></span>&nbsp;</td>
          			</tr>   
          			
          			<tr>
                    	<td align="right">Occupation:</td>
                    	<td align="left">
                        <input type="text" name="occupation" />
                      </td>
                    	<td align="left"><span id="msg_occupation"></span>&nbsp;</td>
          			</tr> 
          			<tr>
                    	<td align="right">Mobile Contact:</td>
                    	<td align="left">
                        <input type="text" name="mobilecontact" />
                      </td>
                    	<td align="left"><span id="msg_mobilecontact"></span>&nbsp;</td>
          			</tr>  
          			
          			
          			<tr style="height: 20px"><td>Mother's Details</td></tr> 
          			<tr>
                    	<td align="right">Name:</td>
                    	<td align="left">
                        <input type="text" name="mothersname" />
                      </td>
                    	<td align="left"><span id="msg_mothersname"></span>&nbsp;</td>
          			</tr>   
          			
          			<tr>
                    	<td align="right">Occupation:</td>
                    	<td align="left">
                        <input type="text" name="moccupation" />
                      </td>
                    	<td align="left"><span id="msg_moccupation"></span>&nbsp;</td>
          			</tr> 
          			<tr>
                    	<td align="right">Mobile Contact:</td>
                    	<td align="left">
                        <input type="text" name="mmobilecontact" />
                      </td>
                    	<td align="left"><span id="msg_mmobilecontact"></span>&nbsp;</td>
          			</tr>
          			
          			<tr style="height: 20px"><td>Guardian's Details</td></tr> 
          			<tr>
                    	<td align="right">Name:</td>
                    	<td align="left">
                        <input type="text" name="guardiansname" />
                      </td>
                    	<td align="left"><span id="msg_guardiansname"></span>&nbsp;</td>
          			</tr>   
          			
          			<tr>
                    	<td align="right">Occupation:</td>
                    	<td align="left">
                        <input type="text" name="goccupation" />
                      </td>
                    	<td align="left"><span id="msg_goccupation"></span>&nbsp;</td>
          			</tr> 
          			<tr>
                    	<td align="right">Mobile Contact:</td>
                    	<td align="left">
                        <input type="text" name="gmobilecontact" />
                      </td>
                    	<td align="left"><span id="msg_gmobilecontact"></span>&nbsp;</td>
          			</tr>
          			
          			                             			
  			   </table>        
        </div>                      
  			<div id="step-3">
            <h2 class="StepTitle">Step 3: Academic Details</h2>	
            <table cellspacing="3" cellpadding="3" align="center">
          			<tr>
                    	<td align="center" colspan="3">&nbsp;</td>
          			</tr>        
          			<tr>
                    	<td align="right">Institution :</td>
                    	<td align="left">
                    	 <select id="institution" name="" class="txtBox">
                          <option value="">-select-</option>
                          <option value="johnpaul2">John Paul ii</option>
                          <option value="newhorizon">New Horizon</option>
                                       
                        </select>
                      </td>
                    	<td align="left"><span id="msg_institution"></span>&nbsp;</td>
          			</tr>
          			<tr>
                    	<td align="right">Form:</td>
                    	<td align="left">
                    	  <select id="sForm" name="" class="txtBox">
                          <option value="">-select-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                                       
                        </select>
                      </td>
                    	<td align="left"><span id="msg_form"></span>&nbsp;</td>
          			</tr>          			
          			<tr>
                    	<td align="right">Subject need 1 :</td>
                    	<td align="left">
                            <select id="subjectneed" name="" class="txtBox">
                          <option value="">-select-</option>
                          <option value="Math">Math</option>
                          <option value="English">English</option>
                          <option value="Kiswahili">Kiswahili</option>
                          <option value="Biology">Biology</option>
                                       
                        </select>
                      </td>
                    	<td align="left"><span id="msg_subject"></span>&nbsp;</td>
          			</tr>                                   			
  			   </table>               				          
        </div>
  			<div id="step-4">
            <h2 class="StepTitle">Step 4: Other Details</h2>	
            <table cellspacing="3" cellpadding="3" align="center">
          			<tr>
                    	<td align="center" colspan="3">&nbsp;</td>
          			</tr>        
          			<tr>
                    	<td align="right">Academic Goals :</td>
                    	<td align="left">
                    	  <textarea rows="5" name="academicgoals" class="txtBox" ></textarea>
                      </td>
                    	<td align="left"><span id="msg_academicgoals"></span>&nbsp;</td>
          			</tr>          			
          			<tr>
                    	<td align="right">Social Goals:</td>
                    	<td align="left">
                            <textarea name="socialgoal" id="socialgoal" class="txtBox" rows="5"></textarea>
                      </td>
                    	<td align="left"><span id="msg_socialgoal"></span>&nbsp;</td>
          			</tr>  
          			
          			<tr>
                    	<td align="right">Additional Info:</td>
                    	<td align="left">
                            <textarea name="additionalinfo" id="additionalinfo" class="txtBox" rows="5"></textarea>
                      </td>
                    	<td align="left"><span id="msg_additionalinfo"></span>&nbsp;</td>
  			   </table>                 			
        </div>
  		</div>
<!-- End SmartWizard Content -->  		
</form> 
		</section>
		<footer>
			
		</footer>
	
	</body>
</html>