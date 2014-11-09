
 <section class="portfolio" id="portfolio">
      <div class="title text-center wow animated fadeInRight"><h1>My Latest <strong>Work</strong></h1></div>
      
      <div class="title text-center wow animated fadeInDown">
      <div class="container">
        <div class="portfoliofilter">
          <a href="javascript:void(0)" data-filter="*" class="current" style="outline:none;">
            <div class="def-btn filterbutton">All Categories</div>
          </a>
          <a href="javascript:void(0)" data-filter=".webdevelopment" style="outline:none;">
            <div class="def-btn filterbutton">Web Development</div>
          </a>
          <a href="javascript:void(0)" data-filter=".webdesign" style="outline:none;">
            <div class="def-btn filterbutton">Web Design</div> 
          </a>
          
           <a href="javascript:void(0)" data-filter=".desktopapp" style="outline:none;">
            <div class="def-btn filterbutton">Desktop App</div> 
          </a>
        </div><!--/.portfoliofilter -->
      </div><!--/.container -->
      </div>

      
      <div class="title text-center wow animated fadeInLeft">
   
<div class="grid"> <div class="portfoliocontent">
				<?php
                for($i=1;$i<=15;$i++){
				?>
              	
				<figure class="effect-zoe <?php if($i > 10){ echo " webdesign"; }else if($i > 5){ echo " webdevelopment"; }else{ echo " desktopapp"; }?>">
				<a  class="fancybox" href="images/portofolio/3_2.jpg" data-fancybox-group="gallery"  title="Lorem ipsum dolor sit amet"><img src="images/portofolio/<?= $i ?>_2.jpg" alt="img<?= $i ?>"/>
					<figcaption>
						<h2>See<span>More</span></h2>
						<span class="figure_date">13 Sep `14</span>
						<p>Sistem Informasi Perpasaran <strong>PD Pasar Surya</strong></p>
						
					</figcaption>	   
          	</a>
				</figure>           
                <?php
				}
			   ?>
			</div>
        </div>
            </div>
            </section>
            <div style="clear:both;"></div>