<?php
						  $errors = [];
						  $missing = [];
						  if (isset($_POST['send'])) {
								$expected = ['fname','lname', 'email', 'comments'];
								$required = ['fname','lname', 'email', 'comments'];
								$to = 'Paige Israel <paigeaisrael@gmail.com>';
								$subject = 'Feedback from Guest Book.';
								$headers = 'From: Paige Israel <paigeaisrael@gmail.com>';
								$authorized = '-fpaigeaisrael@gmail.com';
								require 'process_mail.php';
									 
								header('Location: thank-you.php');
								exit;
								
						  }
						  ?>
						  
						  
						  
						  <?php
    $page_title = 'Guest Book!';
    include ('../shared/header.html');
?>
						  
					 <div class="border center1">
					 <div class="header">
						  Guest Book
					 </div>
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
					 </div> <!-- [End border div] -->
					 
				
		  </div>  <!-- [End con