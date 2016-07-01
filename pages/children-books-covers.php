<?php
    $page_title = 'Children&#39;s Books';
    include ('../shared/header.html');
?> 
    <div class="content">
		  
		  <style>
                body {
                    height: 100%;
                }
                .pager {
                    position: absolute;
                    bottom:30px;
                    left: 20px;
                }
                .page {
                    display: none;
                    height: 90%;
                    overflow: hidden;
                    margin-bottom: 10px;
                }
        </style>
		  
        <div id="page1" class="page" style="display: block;">
				<div class="book-series-summary">
					 <div class="header-novel">
						  <a href="BER-books.php"><span>M</span>r. <span>B</span>.<span>E</span>.<span>R</span>.</a>
					 </div>
					 <div class="small-header">
						  (Five Book Children's Series)
					 </div>
					 <div class="series-pic-center">
						  <a href="BER-books.php"><img src="../images/no-christmas-641x800.jpg" width="641" height="800" alt="The B.E.R. Who Couldn't Afford Christmas Image" /></a>
					 </div>
					 
				</div>  <!-- [end book series summary] -->
		  </div>  <!-- [end page 1] -->
            
		  <div id="page2" class="page">
				<div class="book-series-summary">
					 <div class="header-novel">
						  <span>T</span>he <span>M</span>onster <span>T</span>here <span>U</span>nder <span>M</span>y <span>B</span>ed
					 </div>
					 
					 <div class="series-pic-center">
						  <img src="../images/the-monster-there-613x800.jpg" width="613" height="800" alt="The Monster There Under My Bed Image" /></a>
					 </div>
				
					 <div class="text">
						  Copyright &copy; 1987 by <span class="vivaldi"><span>E</span>ric <span>K</span>och</span> &nbsp/&nbsp;All rights reserved.
					 </div>
				</div>  <!-- [end book series summary] -->  
		  </div>  <!-- [end page 2 -->
		  
		  <div id="page3" class="page">
				<div class="book-series-summary">
					 <div class="header-novel">
						  <span>T</span>he <span>O</span>nce <span>L</span>ittle <span>B</span>reeze 
					 </div>
					 
					 <div class="series-pic-center">
						  <img src="../images/the-once-little-breeze-610x800.jpg" width="610" height="800" alt="The Once Little Breeze Image" /></a>
					 </div>
				
					 <div class="text">
						  Copyright &copy; 1980 by <span class="vivaldi"><span>E</span>ric <span>K</span>och</span> &nbsp/&nbsp;All rights reserved.
					 </div>

				</div>  <!-- [end books-series-summary div] -->
		  </div>  <!-- [end page 3] -->
		  
		  <div id="page4" class="page">
				<div class="book-series-summary">
					 <div class="header-novel">
						  <span>C</span>uddle <span>P</span>uddle &amp; <span>T</span>hunder <span>T</span>hump 
					 </div>
					 <div class="series-pic-center">
						  <img src="../images/cuddle-puddle-912x700.jpg" width="912" height="700" alt="Cuddle Puddle &amp; Thunder Thump Image" /></a>
					 </div>
				
					 <div class="text">
						  Copyright &copy; 2013 by <span class="vivaldi"><span>E</span>ric <span>K</span>och</span> &nbsp/&nbsp;All rights reserved.
					 </div>
				</div>  <!-- [end books-series-summary div] -->
		  </div>  <!-- [end page 4] -->
		  
		  <div id="page5" class="page">
				<div class="book-series-summary">
					 <div class="header-novel">
						  <span>G</span>abriel, <span>E</span>lizabeth, <span>B</span>ali &amp; <span>T</span>he <span>P</span>ickle <span>F</span>actory
					 </div>
					 <div class="series-pic-center">
						  <img src="../images/bali-gabriel-eliz-pickle-928x700.jpg" width="928" height="700" alt="Gabriel, Elizabeth, Bali &amp; The Pickle Factory Image" /></a>
					 </div>
				
					 <div class="text">
						  Copyright &copy; 2014 by <span class="vivaldi"><span>E</span>ric <span>K</span>och</span> &nbsp/&nbsp;All rights reserved.
					 </div>
				</div>  <!-- [end books-series-summary div] -->
		  </div>  <!-- [end page 5] -->
		  
		  <div id="page6" class="page">
				<div class="book-series-summary">
					 <div class="header-novel">
						  <span>T</span>he <span>B</span>roken <span>U</span>nicorn 
					 </div>
					 <div class="series-pic-center">
						  <img src="../images/broken-unicorn-1040x700.jpg" width="1040" height="700" alt="The Broken Unicorn Image" /></a>
					 </div>
				
					 <div class="text">
						  Copyright &copy; 2014 by <span class="vivaldi"><span>E</span>ric <span>K</span>och</span> &nbsp/&nbsp;All rights reserved.
					 </div>
				</div>  <!-- [end books-series-summary div] -->
		  </div>  <!-- [end page 6] -->
     
	 <script type="text/javascript" src="../scripts/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="../scripts/jquery.simplePagination.js"></script>
    
    <script>
        $(function() {
            var currentPage = 1;
            $(".pager").pagination({
                items: 6,
                itemsOnPage: 1,
                cssStyle: 'light-theme',
                onPageClick: onPageClick
            });
            
            function onPageClick(pageNumber, event) {
                $("#page" + currentPage).hide();
                $("#page" + pageNumber).show();
                currentPage = pageNumber;
            }
        });
    </script>     
      
<div class="pager"></div>   
        
<?php
    include ('../shared/footer.html');            
?>         