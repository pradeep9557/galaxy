<?php echo view('header');
//print_r($categories);
?>
<section class="ptb-95">
      <div class="container-fluid">
        <div class="product-slider owl-slider">
          <div class="row m-0">
            <div class="product-slider-main position-r">
              <div class="owl-carousel pro_cat_slider" style="opacity: 0;">
              <?php 
                foreach($featured as $k=>$v){
                    ?>
                    <div class="rt-container <?php if($k==0) echo'slider-container';?>">
                  <div class="col-xs-12 col-md-12 p-l-r-0 imgMainWrapper">
                    <div class="imgWrapper">
                      <a href="http://addgalaxy.com/viewadddetail/electronics/testing_mobile/3778">
                        <img class="ad-img-s img-responsive pro-image-listview" src="<?php echo base_url($v['images']);?>" alt="">
                      </a>
                    </div>
                  </div> 
                  <div class="col-xs-12 col-md-12">
                    <a href="http://addgalaxy.com/viewadddetail/electronics/testing_mobile/3778">
                      <div class="product-item-details product-a">
                        <div class="row">
                          <div class="col-md-12 col-xs-12 p-mobile">
                            <div class="product-item-name slider-product-name" id="product-mobile-view" style="margin-bottom:0px">
                                <a href="http://addgalaxy.com/viewadddetail/electronics/testing_mobile/3778"><b><?php echo $v['title'];?></b></a>
                            </div><!-- end title -->
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                          </div>
                          <div class="col-md-5 col-xs-12">
                            <div class="price-box slider-price" id="price-phone">
                              <span class="price"><i class="fa fa-rupee"></i> <?php echo $v['price'];?></span>                          
                            </div>
                          </div>                      
                        </div>
                        <div class="row">
                          <div class="col-md-12 col-xs-12">
                            
                            <ul class="product-item-details-inner" id="product-inner">
                              <li> <i class="fa fa-th-large fa-fw hidden-xs"></i><span class="hidden-xs">
                                  <?php if(count($parentCategory)!=0){ ?> 
                                  <span class="padding_cats hidden-xs"><a href="http://addgalaxy.com/electronics/mobile/37#"><?php echo $parentCategory[0]['name'];?></a></span> /<span class="padding_cats hidden-xs"><a href="http://addgalaxy.com/electronics/mobile/37#"><?php echo $mainCategory[0]['name'];?></a></span>
                                 <?php }else{ ?> 
                                    <span class="padding_cats hidden-xs"><a href="http://addgalaxy.com/electronics/mobile/37#"><?php echo $mainCategory[0]['name'];?> </a></span>
                                 <?php } ?> 
                            </span> </li>  
                            </ul>
                          </div>                     
                        </div>
                        <div class="row">
                          <div class="col-md-12 col-xs-12">
                            <ul class="product-item-details-inner slider-date" id="product-inner">
                              <li> <i class="fa fa-clock-o fa-fw"></i><span><?php echo explode(" ",$v['date'])[0];?></span> </li> <!-- city name -->
                            </ul>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                    <?php
                }
              ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  Featured Products Slider Block End  -->
    <section class="pb-95" id="desktop-view">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-sm-4 mb-xs-30">
              <!--  Featured Products Slider Block End  -->
            <div class="sidebar-block gray-box">
              <div class="sidebar-box listing-box cat1 mb-40">
                <span class="opener plus"></span>
                <div class="main_title sidebar-title">
                    <h3><span>Categories:</span></h3>
                </div>
                <div class="sidebar-contant">
                  <!-- subcategory list start -->
                   <div class="panel-group" id="accordion">
                   <?php foreach($categories as $k9=>$v9){
                        ?>
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#2">
                                <i class="fa fa-caret-right"></i> 
                                    <a class="cat_list" href="<?php echo base_url('/category/view/'.$v9['id']);?>">
                                    <span style="<?php if($v9['current']==true){ echo 'color: #fd8539;';}?>padding-left:10px;"><?php echo $v9['name'];?><span>( <?php echo $v9['count'];?> )</span></span></a> 
                            </a>
                            </h4>
                        </div>
          <div id="2" class="panel-collapse collapse <?php if($v9['current']==true){ echo 'in';}?>">
            <div class="panel-body">
                <ul>
                    <?php foreach($v9['subCategory'] as $k10=>$v10){ 
                      if($v10['current']==true){
                        ?>
                        <li><span class="icon12"><i class="fa fa-angle-double-right"></i></span>  <a class="cat_list" href="../homes/5.html"><span style="color:#fd8539;padding-left:10px;"><?php echo $v10['name'];?>              <span>
                        <?php echo $v10['count'];?>             </span></span></a></li>
                        <?php
                      }else{
                      ?>
                    <li><span class="icon12"><i class="fa fa-angle-double-right"></i></span> <a class="cat-inac" href="<?php echo base_url('/subcategory/view/'.$v10['id']);?>"><?php echo $v10['name'];?><span><?php echo $v10['count'];?></span></a></li>
                    <?php }} ?>
                   </ul>
            </div>
          </div>
        </div>
                        <?php
                    } ?>   
</div>
                  <!-- subcategory list end -->
                
              </div>
              </div></div>
              <div class="sidebar-block gray-box">
              <div class="sidebar-box filter-sidebar mb-40">

                <span class="opener plus"></span>
                <div class="main_title sidebar-title">
                  <h3>Refine Search</h3>
                </div>
                <div class="sidebar-contant">
                  <form action="http://addgalaxy.com/home/filtersearch" method="post">
                       <input class="price-txt" name="price" type="hidden" id="amount" readonly="" value="₹0 - ₹10000">
                    
                    <input name="catgory_id" type="hidden" id="cat_id" value="9">
                     <input name="sub_category_cat_id" type="hidden" id="sub_cat_id" value="37">
                      <input type="hidden" value="0" name="fromRupees" class="fromRupees" min="0" max="50000000">
                     <input type="hidden" value="50000000" name="toRupees" class="toRupees" min="0" max="50000000">
				    
                    <div class="price-slider"><div class="row"><span>from
                     <input type="number" value="0" min="0" max="50000000">	to
                     <input type="number" value="50000000" min="0" max="50000000"></span></div>
                     <input value="0" min="0" max="50000000" step="500" type="range">
                     <input value="50000000" min="0" max="50000000" step="500" type="range"> 
                     <svg width="100%" height="24">
                      <line x1="4" y1="0" x2="300" y2="0" stroke="#212121" stroke-width="12" stroke-dasharray="1 28"></line>
                     </svg>
                    </div>
				                      
                    <div class ="filter-inner-box mb-20">
                      <div class="inner-title">Property Type</div>
                         <select name="property_type" class="form-control" id="property">
                             <option value="">Select Property Type </option>
                             <option value="house">House</option>
                             <option value="multistory apartment">Multistory Apartment</option>
                             <option value="builder floor">Builder Floor</option>
                             <option value="plot">Plot</option>
                             <option value="villa">villa</option>
                             <option value="penta house">Penta House</option>
                             <option value="studio apartment">Studio Apartment</option>
                             <option value="commercial office space">Commercial Office Space</option>
                             <option value="IT park office">IT Park Office</option>
                             <option value="commercial shop">Commercial Shop</option>
                             <option value="commercial showroom">Commercial Showroom</option>
                             <option value="commercial land">Commercial Land</option>
                             <option value="industrial building">Istrial Building</option>
                             <option value="industrial shed">Industrial Shed</option>
                             <option value="agricultural land">Agricultural Land</option>
                             <option value="farm house">Farm house</option>
                         </select>
                  </div>
                  <div class="filter-inner-box mb-20">
                        <div class="inner-title">Property for</div>
                      <label><input type="checkbox" name="property_for[]" value="'sell'">&nbsp; &nbsp; Sell</label>
                      <label><input type="checkbox" name="property_for[]" value="'rent'">&nbsp; &nbsp; Rent</label>
                      <label><input type="checkbox" name="property_for[]" value="'pg'">&nbsp; &nbsp; PG</label>
                  </div>
                  <div class ="filter-inner-box mb-20">
                      <div class="inner-title">Posted By</div>
                      <label><input type="checkbox" name="rs_posted_by[]" value="'owner'">&nbsp;&nbsp; Owner</label>
                      <label><input type="checkbox" name="rs_posted_by[]" value="'broker'">&nbsp;&nbsp; Broker</label>
                      <label><input type="checkbox" name="rs_posted_by[]" value="'builder'">&nbsp;&nbsp; Builder</label>
                      
                  </div>
                  <div class ="filter-inner-box mb-20" id="bedroom" style="display:none;">
                      <div class="inner-title">BHK</div>
                      <label><input type="checkbox" name="bhk[]" value="1">&nbsp;&nbsp; 1</label>
                      <label><input type="checkbox" name="bhk[]" value="2">&nbsp;&nbsp; 2</label>
                      <label><input type="checkbox" name="bhk[]" value="3">&nbsp;&nbsp; 3</label>
                      <label><input type="checkbox" name="bhk[]" value="4">&nbsp;&nbsp; 4</label>
                      <label><input type="checkbox" name="bhk[]" value="5">&nbsp;&nbsp; 5</label>
                  </div>
                  <div class ="filter-inner-box mb-20" id="kitchen" style="display:none;">
                      <div class="inner-title">Kitchen</div>
                      <label><input type="checkbox" name="kitchen[]" value="1">&nbsp;&nbsp; 1</label>
                      <label><input type="checkbox" name="kitchen[]" value="2">&nbsp;&nbsp; 2</label>
                      <label><input type="checkbox" name="kitchen[]" value="3">&nbsp;&nbsp; 3</label>
                      <label><input type="checkbox" name="kitchen[]" value="4">&nbsp;&nbsp; 4</label>
                      <label><input type="checkbox" name="kitchen[]" value="5">&nbsp;&nbsp; 5</label>
                  </div>
                  <div class ="filter-inner-box mb-20" id="furnished" style="display:none;">
                      <div class="inner-title">Furnished</div>
                      <label><input type="checkbox" name="furnished[]" value="'yes'">&nbsp;&nbsp; Full</label>
                      <label><input type="checkbox" name="furnished[]" value="'semi'">&nbsp;&nbsp; Semi</label>
                      <label><input type="checkbox" name="furnished[]" value="'no'">&nbsp;&nbsp; No</label>
                      
                  </div>
                  
                  
                                      <!-- Real Estate Filter End-->
                  <!-- Electronics filter start -->
                                      <!-- Electronics filter end -->
                  
                  <!-- Vehicle filter start -->
                                      <!-- Vehicle filter end -->
                  
                  <!-- Job filter start -->
                                      <!-- job filter end -->
                  
                  <!-- Electronics filter start -->
                                      <!-- Electronics filter end -->
                  <div class ="filter-inner-box mb-20">
                      <div class="inner-title">Images</div>
                        <input type="hidden" name="image" value="3" >
                      <label><input type="checkbox" name="image" value="1" class="image_check">&nbsp;&nbsp; With Image</label><br>
                      <label style="width: 120px"><input type="checkbox" name="image" value="0" class="image_check">&nbsp;&nbsp; Without Image</label><br>
                      <label><input type="checkbox" name="image" value="2" class="image_check">&nbsp;&nbsp; Both</label>
                      
                  </div>
                  <script>
                      $(".image_check").change(function()
                                {
                                    $(".image_check").prop('checked',false);
                                    $(this).prop('checked',true);
                                });
                      $(".screen_size").change(function()
                                {
                                    $(".screen_size").prop('checked',false);
                                    $(this).prop('checked',true);
                                });
                    </script>    
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-8" id="product-de">
            <div class="product-listing1">
              <div class="row" id="filterResult1">
                               <!--pagination div -->
              <div class="container1">
                <div class="col-md-12">
                  <div class="" style="overflow:hidden;">
                    <span>Total Ads - </span><span id="total_ads_count"><?php echo count($listing);?></span>
                     <?php foreach($listing as $k2=>$v2){
                         ?>
                            <div class="row freeadd">
                      <div class="col-xs-12 col-md-12">
                      <div class="" style="margin-bottom:10px">
                        <div class="rt-container">
                          <div class="col-xs-4 col-md-4 p-l-r-0 imgMainWrapper">
                            <div class="imgWrapper">
                              <?php 
                              if($v2['premium']=='1'){
                                  ?>
                                    <div class="badge">
                                        <span>Premium</span>
                                    </div>
                                  <?php
                              }
                              ?>  
                              
                                <a href="http://addgalaxy.com/viewadddetail/electronics/testing_mobile/3778">
                                    <img class="ad-img-s img-responsive pro-image-listview" src="<?php echo base_url($v2['images']);?>" alt="">
                                </a>
                            </div>
                        </div> 
                          <div class="col-xs-8 col-md-8">
                              <a href="http://addgalaxy.com/viewadddetail/electronics/testing_mobile/3778"><div class="product-item-details product-a">
                              <div class="row">
                                  <div class="col-md-12 col-xs-12 p-mobile">
                                      <div class="product-item-name" id="product-mobile-view" style="margin-bottom:0px">
                                          <a href="http://addgalaxy.com/viewadddetail/electronics/testing_mobile/3778"><b><?php echo $v2['title'];?></b></a>
                            </div><!-- end title -->
                                  </div>
                              </div>
                            <div class="row">
                                  <div class="col-md-12 col-xs-12">
                                  <p class="description"><?php echo $v2['description'];?></p><!-- description -->
                                  </div>
                              </div>
                            
                            <div class="row">
                                <div class="col-md-7">
                                  <div class="price-box" id="price-phone">
                                    <span class="price"><i class="fa fa-rupee"></i><?php echo $v2['price'];?></span>                          
                                  </div>
                                    <ul class="product-item-details-inner" id="product-inner">
                                      <li> <i class="fa fa-th-large fa-fw hidden-xs"></i><span class="hidden-xs"> <?php if(count($parentCategory)!=0){ ?> 
                                  <span class="padding_cats hidden-xs"><a href="http://addgalaxy.com/electronics/mobile/37#"><?php echo $parentCategory[0]['name'];?></a></span> /<span class="padding_cats hidden-xs"><a href="http://addgalaxy.com/electronics/mobile/37#"><?php echo $mainCategory[0]['name'];?></a></span>
                                 <?php }else{ ?> 
                                    <span class="padding_cats hidden-xs"><a href="http://addgalaxy.com/electronics/mobile/37#"><?php echo $mainCategory[0]['name'];?> </a></span>
                                 <?php } ?> </span> </li>  <!-- cat- title-->
                              </ul>
                                </div>
                              <div class="col-md-5 col-xs-12">
                                    <!-- price end -->
                                </div>                      </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <ul class="product-item-details-inner" id="product-inner">
                                      <li> <i class="fa fa-clock-o fa-fw"></i><span><?php echo explode(" ",$v2['date'])[0];?></span> </li> <!-- city name -->
                              </ul>
                                </div>
                            </div>
                          </div></a>
                          </div>
                        </div>
                        </div>
                      </div>
                      </div>
                         <?php
                     }   
                     ?>        
                    
                    
                    </div>
                </div>
              </div>
        <script> 
                $(document).ready(function(){
                  //$('#total_ads_count').text('9'); 
                  //$('.total_ads_countnew').text('9');
                });
                
                
//                 $(document).ready(function(){
//                     if('9'>=100)
//                 {
//                   $('#total_ads_count').text('99+');  
//                 }
//                 else
// {
//                   $('#total_ads_count').text('9');  
// }
//                 });
        </script>
                           </div>

              <div class="col-md-6 col-sm-8" id="textImage" style="display:none">
                                    <div class="container">
                <div class="row">
                    <div class="">
                         <table class="table">
                            <thead>
                                <tr>
                                  <th><span id="ad_with_img_count">0 </span><span> Results for your search</span></th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                              
                                </tbody>
                            </table>   
                        </div>
                                                </div></div>
                        </div>
                        <script>
                            $("#ad_with_img_count").text('0 ')
                        </script>
                  

                 <div class="col-xs-12" id="text2Image" style="display:none">
                                        <div class="container">
                <div class="row">
                    <div class="">
                         <table class="table table-hover">
                            <thead>
                                <tr>
                                  <th><span id="ad_without_img_count">0 </span><span> Results for your search</span></th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                       </tbody>
                            </table>   
                        </div>
                                                </div></div>
                        </div>
                        <script>
                            $("#ad_without_img_count").text('0 ')
                        </script>
            </div>
          </div>

<!-- Right side Gallery-->
<div class="col-md-3 col-sm-3 mb-xs-30" id="right-side-gallery" style="padding-left: 0px;">
            <div class="sidebar-block right-side-color graybox1">
              <div class="rt-container" id="ads">
                <div class="row">
                  <div class="col-xs-12 col-md-12">
                    <img class="ad-img-s img-responsive pro-image-listview" src="./assets/images/default-image.png">
                  </div>
                  <div class="col-xs-12 col-md-12">
                    <span class="adstext">Testing</span>
                  </div>
                </div>
                
                      </div>
             
            </div>
          </div>
        </div>
        <!-- Right side gallery end -->
         

        </div>
      
    </section><iframe src="./assets/portal-v2.html" id="st_gdpr_iframe" title="GDPR Consent Management" style="width: 0px; height: 0px; position: absolute; left: -5000px;"></iframe>

    <style>
.states1 {
    color:#337ab7 !important;
}
.zoomstate{
    font-size:20px !important;
}
</style>
<?php echo view('footer');?>