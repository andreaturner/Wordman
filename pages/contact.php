<?php
    $page_title = 'Contact';
    include ('../shared/header.html');
?>
	    
		<!-- How to contact me. -->
<br>
    
	<div class="content">
		  <div class="container">
				<div class="border left">  <!-- [Start border left] -->
					 <div class="small-header">
						  (253) 569-8426 <span>&bull;</span>  (253) 569-1888<br>  
						  Email: <a href="mailto:&#119;&#111;&#114;&#100;&#109;&#097;&#110;&#049;&#064;&#104;&#111;&#116;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;">
						  &#119;&#111;&#114;&#100;&#109;&#097;&#110;&#049;&#064;&#104;&#111;&#116;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;</a><br>  
					 </div>
			  
					 <div class="image-border">
						  <img src="../images/gibran-392x500-5.jpg" width="392px" height="500px" alt="Gibran Drawing" />
					 </div>
					 
					 <div class="smallest-header">
						  Pencil drawing of Khalil Gibran by Eric Koch<br>
						  Copyright &copy; 1975
					 </div>
				</div>  <!-- [End border left] -->
				
				<div class="border right">  <!-- [Start border right] -->
					 <div class="small-header">
						  Please Sign my Guest Book
					 </div>
					 <?php
						  $errors = [];
						  $missing = [];
						  if (isset($_POST['send'])) {
								$expected = ['fname','lname', 'email', 'comments'];
								$required = ['fname','lname', 'email', 'comments'];
								$to = 'Paige Israel <paigeaisrael@gmail.com>';
								$subject = 'Feedback from Guest Book.';
								// $headers = [];
								$headers = 'From: Paige Israel <paigeaisrael@gmail.com>';
								// $headers[] = 
								// $headers[] = 'Content-type: text/plain; charset=utf-8';
								$authorized = '-fpaigeaisrael@gmail.com';
								require 'process_mail.php';
								if ($mailSent) {
									 header('Location: thanks.php');
									 exit;
								}
						  }
						  ?>
		
					 <!-- [Create the form.] -->
					 <?php
						  if ($_POST && ($suspect || isset($errors['mailfail']))) :
					 ?>
				
						  <p class="warning">Sorry, we couldn't send your mail.</p>
					 
					 <?php
						  elseif ($errors || $missing) :
					 ?>
					 
						  <p class="warning">Please fix the item(s) indicated.</p>
					 
					 <?php
						  endif;
					 ?>
						  
						  <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
						  <p>
								
								<label class="label" for="fname">First Name:
									 
					 <?php
						  if ($missing && in_array('fname', $missing)) :
					 ?>
					 
						  <span class="warning">Please enter your first name</span>
						  
					 <?php
						  endif;
					 ?>
						  </label>
								<input type="text" name="fname" id="fname" size="20" maxlength="20">
					 <?php
						  if ($errors || $missing) {
								echo 'value="' . htmlentities($fname) . '"';
						  }
					 ?>
						  </p>
					 
						  <p>
						  <label class="label" for="lname">Last Name:
						  
					 <?php
						  if ($missing && in_array('lname', $missing)) :
					 ?>
					 
						  <span class="warning">Please enter your last name</span>
						  
					 <?php
						  endif;
					 ?>
						 
						  </label>
								<input type="text" name="lname" id="lname" size="20" maxlength="40">
						  
					 <?php
						  if ($errors || $missing) {
								echo 'value="' . htmlentities($lname) . '"';
						  }
					 ?>
						  </p>
						  
						  <p>
								<label class="label" for="email">Email:
						  
					 <?php
						  if ($missing && in_array('email', $missing)) :
					 ?>
						  </p>
					 <p>
					 <span class="warning">Please enter your email address</span>
					 
					 <?php
						  elseif (isset($errors['email'])) :
					 ?>
					  
						  <span class="warning">Invalid email address</span>
						  
					 <?php
						  endif;
					 ?>
								</label>
									 <input type="email" name="email" id="email" size="37" maxlength="60">
									
					 <?php
						  if ($errors || $missing) {
								echo 'value="' . htmlentities($email) . '"';
						  }
					 ?>
						  </p>
						  <p>
								<label class="label" for="comments">Comments:
								
						  <?php
								if ($missing && in_array('comments', $missing)) :
						  ?>
						  
								<span class="warning">You forgot to add any comments</span>
								
						  <?php
								endif;
						  ?>
								</label>
								
									 <textarea name="comments" id="comments" rows="22" cols="51"></textarea>
						  <?php
								if ($errors || $missing) {
									 echo htmlentities($comments);
								}
						  ?>
						  
						  </p>
						  
						  <p>
								<input type="submit" name="send" id="send" value="Submit" class="submit">
						  </p>
						  
						  </form>
    
					 
				</div>  <!-- [End border right] -->
		  </div>  <!-- [End container div] -->
		  
		  <div class="contact-text">
			  <span class="italic"><span class="large">&ldquo;I</span>n any act or effort toward communication there is the responsibility by all involved to
			  forgo rant or rage. Interaction demands a modicum of responsible thought; mutual respect which can only be presented within the caring of calm
			  intellectual discourse.</span>
		  </div>
		  
		  <div class="contact-text">
			  <span class="italic"><span class="large">D</span>ifference of opinion does not warrant or condone emotional outburst or the rhetoric of childish
			  tantrums that can only lead to mindless arguments!</span>
		  </div>
		  
		  <div class="contact-text">
			  <span class="italic"><span class="large">H</span>earts need only to quietly share and in so doing&#46;&#46;&#46; nourish the soul.&rdquo;</span>
		  </div>
		  
		  <div class="credit">
            <span>E</span>ric <span>K</span>och
        </div>
			
	 </div>  <!-- [end content div] -->
 
 <?php
    include ('../shared/footer.html');            
?>   
    


			
	    
   