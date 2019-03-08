<!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content">
      
      <div class="mad_section">
        
        <div class="container">
          
          <div class="row">
             
            <!-- Main content -->
            <div id="main" class="col-md-8">
              <?php 
                    
                     $count=count($blog);
                     if($blog){
                    
                    foreach($blog as $blog){?>
              <!-- Image post -->
              <div class="mad_blog_post">
                <figure>
                  <img src="<?php echo base_url(); ?>assets/images/769x500_img1.jpg" alt="">
                  <div class="mad_post_date">

                    <div class="date"><?php echo $blog->date; ?></h2></div>
                    
                  </div>
                </figure>
                <div class="mad_post_content clearfix">
                  <div class="mad_post_info">

                    <h2 class="title"><?php echo $blog->title; ?></h2>
                    <div class="mad_post_action">
                      <a href="#" class="admin"><?php echo $blog->name; ?></h2></a>
                      <a href="#" class="days"><?php echo $blog->date; ?></h2></a>
                     
                    </div>
                    <p><?php echo $blog->description; ?></h2></p>

                  </div>

                </div>

           
              </div>
               <?php } } ?>
              <!-- Slider post -->
              <div class="mad_blog_post">

                <!-- Carousel -->
                
                <div class="mad_post_content clearfix">
                  
                </div>
                
              </div>
       
                    
              <div class="mad_pagination_section">
                <a href="#" class="current">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">...</a>
                <a href="#" class="icon-left-open-1"></a>
                <a href="#" class="icon-right-open-1"></a>
              </div>

            </div>

            <!-- Sidebar -->
            <div id="sidebar" class="col-md-4">
              
              <!-- Search -->
              <div class="mad_widget widget_search">

                <form>
                  <input type="text" placeholder="Search">
                  <button type="button"></button>
                </form>

              </div>

          
              <!-- Recent Posts -->
              <div class="mad_widget widget_posts">

                <h5 class="widget_title">Recent posts</h5>
                <div class="mad_post_section">
                  <div class="mad_post_item">

                    <figure><a href="#"><img src="<?php echo base_url(); ?>assets/images/70x70_img1.jpg" alt=""></a></figure>
                    <div class="post_text_block">
                      <a href="#">Autoplay Image Slider Post Type</a>
                    </div>

                  </div>
                  <div class="mad_post_item">

                    <figure><a href="#"><img src="<?php echo base_url(); ?>assets/images/70x70_img2.jpg" alt=""></a></figure>
                    <div class="post_text_block">
                      <a href="#">Static Image Blog Post Type</a>
                    </div>
                    
                  </div>
                  <div class="mad_post_item">

                    <figure><a href="#"><img src="<?php echo base_url(); ?>assets/images/70x70_img3.jpg" alt=""></a></figure>
                    <div class="post_text_block">
                      <a href="#">Playble Audio Blog Post Type</a>
                    </div>
                    
                  </div>
                  <div class="mad_post_item">

                    <figure><a href="#"><img src="<?php echo base_url(); ?>assets/images/70x70_img4.jpg" alt=""></a></figure>
                    <div class="post_text_block">
                      <a href="#">Autoplay Video Blog Post Type</a>
                    </div>
                    
                  </div>
                </div>

              </div>

              <!-- Quote -->
              <div class="mad_widget widget_quote">

                <h5 class="widget_title">Quote</h5>
                <blockquote>
                  “Design is not just what it 
                  Looks like and Feels like. 
                  Design is how it Works.” 
                </blockquote>
                <div class="mad_blockquote_author"> - Steve Jobs</div>

              </div>

              <!-- Instagram -->
              <div class="mad_widget widget_instagram">

                <h5 class="widget_title">Instagram</h5>
                <ul data-instagram="6" data-instagram-username="mrgicucaus" class="instagram-feed"></ul>

              </div>

             

              <!-- Calendar -->
              <div class="mad_widget widget_calendar">

                <h5 class="widget_title">Calendar</h5>
                <table>
                  <thead>
                    <tr>
                      <!--titles for td-->
                      <th colspan="7">
                        March 2016
                      </th>
                    </tr>
                  </thead>
                  <tr>
                    <td>M</td>
                    <td>T</td>
                    <td>W</td>
                    <td>T</td>
                    <td>F</td>
                    <td>S</td>
                    <td>S</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td class="link"><a href="#">2</a></td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td class="link current"><a href="#">11</a></td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                  </tr>
                  <tr>
                    <td class="link"><a href="#">15</a></td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td>
                  </tr>
                  <tr>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td class="link"><a href="#">26</a></td>
                    <td>27</td>
                    <td>28</td>
                  </tr>
                  <tr>
                    <td class="link"><a href="#">29</a></td>
                    <td>30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </table>
                <a href="#" class="mad_calendar_month">« Nov</a>

              </div>

            </div>

          </div>
        </div>
      </div>

    </div>

                     
    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->