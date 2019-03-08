<!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->
 
    <div id="content">
      
      <div class="mad_section">
        
        <div class="container">
          
          <div class="row">
            <div class="col-sm-12">
              
              <div class="mad_flex_list">
                <div class="row">
                <?php
         if(is_array($gallery)){

          foreach($gallery as $image) {?>

                  <div class="col-sm-4">
                    
                    <div class="mad_gallery_item">
                    
                      <div class="mad_item_hover">
                        <figure>
                          <img src="<?php echo base_url(); ?>/image/<?php echo $image->img; ?>"  alt="<?php echo base_url(). $image->name;?>">
                        </figure>
                         <div class="item_overlay">
                          <div class="text_holder">
                            <a href="<?php echo base_url(); ?>/image/<?php echo $image->img; ?>" class="mad_icon_plus gallery" rel="category"></a>
                          </div>
                        </div>
                        
                      </div>
                     
                  
                    </div>

                  </div><?php } } ?>
                  
              </div>
          
               <div class="align_center">
                <div class="mad_pagination_section offset1">
                  <?php if (isset($links)) { ?>
                  <?php echo $links ?>
                   <?php } ?>
                </div>
              </div>
               </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->