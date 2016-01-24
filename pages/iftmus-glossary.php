<?php
    $page_title = 'Iftmus Glossary';
    include ('../shared/header.html');
?>
	<div class="content">
		<div class="header">
			<span>I</span>ftmus <span>G</span>lossary
		</div>
		
		<div id="glossary">
        
        
        
<!-- jquery library -->
		<script src="../scripts/jquery-1.11.3.js"></script>
		
		<!-- jQuery UI libaray -->
		<script src="../scripts/jquery-ui/jquery-ui.min.js"></script>
		
		<script type="text/javascript">
			//shorthand version - everybody uses this one in real life
			$(function(){
				$( "#glossary" ).accordion({
					heightStyle: 'content',
					active: false,
					collapsible: true
				});
			});			
			
		</script>
		
			<div class="return-bottom">
				<a href="iftmus.php">Return to Iftmus Home Page</a>
			</div>
		
	
<?php
    include ('../shared/footer.html');            
?>