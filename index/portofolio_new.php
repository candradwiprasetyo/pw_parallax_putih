
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
                for($i=1;$i<=12;$i++){
					$nama_por = array(
								'',
								'Amanah Fashion',
								'Amanah Fashion',
								'Elkabumi Caraka Daya',
								'Internet Taqwa',
								'POIN Online Purchase Order Inventory Online',
								'Sapar',
								'AIA Insurance',
								'Wimbi Store',
								'Daun Pandan Catering',
								'BPM',
								'Prima Mandiri Trans',
								'Agenda Kota'
								);
					$ket_por = array(
								'',
								'Online Store',
								'Online Store',
								'Company Profile',
								'Portal Website',
								'Purchase Order Inventory Online Purchase Order Inventory Online',
								'Portal Website',
								'Event Management',
								'Online Store',
								'Restaurant and Catering Website',
								'Portal Website',
								'Truck Management',
								'Portal Website'
								);
				?>
              	
				<figure class="effect-milo <?php if($i > 10){ echo " webdesign"; }else if($i > 5){ echo " webdevelopment"; }else{ echo " desktopapp"; }?>">
				<a  class="fancybox" href="images/portofolio_new/<?= $i ?>.jpg" data-fancybox-group="gallery"  title="Lorem ipsum dolor sit amet"><img src="images/portofolio_new/<?= $i ?>.jpg" alt="img<?= $i ?>"/>
					<figcaption>
						
                        <div class="portofolio_putih">
                        <div><strong><?= $nama_por[$i] ?></strong><br />
                        <span class="portofolio_putih_kecil"><?= $ket_por[$i] ?></span> </div>
                        
                        <div class="portofolio_kiri">&nbsp;</div>
                        <div class="portofolio_kanan">WEB DESIGN</div>
                       
						</div>
                        <span class="figure_date">13 Nov 2014</span>
						<p class="portofolio_icon">
                   
                        </p>
						
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