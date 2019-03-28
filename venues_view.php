<div class="containr-right">
  <div class="header-logo">
    <img src="<?=base_url()?>public/img/paw.png">
  </div>
  <div class="col-sm-12">

    <div class="main-title">
      <div class="form-group mrgbtn15">
       
      </div>
    </div>
  </div>

  <div class="form-box-dash">
     <div class="col-sm-12">
          <button class="form-controls-btn titlebtn btn-update" style="float: right;">ADD A VENUE</button>
        </div>
    <div class="col-md-6">

      <?php

      if($venue_data)  {

        foreach ($venue_data as $key => $value) {
          ?>
          <div class="form-group">
            <div class="dealbox">
              <div class="adimg"> 
                <img src="<?php 

                if($value['display_image']=='')
                {
                  echo'';
                }
                elseif (strpos ($value['display_image'], 'http')!==false)
                {
                  echo $value['display_image'];
                }
                else
                {
                 echo base_url().'uploads/user_image/'. $value['display_image'];
               }
               ?>">
             </div>
             <div class="adtext">
              <div class="date-bx">
                <label >Name</label>
                <span class="date-to named"><?=$value['business_name']?></span>
                <label>Address</label>                
                <span class="date-to addressd"><?=$value['address']?></span>
                <label>Phone</label>                
                <span class="date-to landline_numberd"><?=$value['landline_number']?></span>
                <label>Website</label>                
                <span class="date-to web_addrd"><?=$value['web_addr']?></span>
                <a href="<?=base_url().'index.php/Venues/edit_venues/'.$value['venue_id']?>"  class="form-controls-btn-edit btn-update1">Edit Venue</a>
              </div>

                <!-- <a href="<?=base_url().'index.php/Deals/edit_delas/'.$value['deal_id']?>" class="dealedit">
                  <img src="<?=base_url().'public/img/pen@2x.png'?>"> -->
                </a>
              </div>
            </div>
          </div>
          <?php
        }
      } else {
        ?>
        
        <?php
      }
      ?>
    </div>

    <div class="col-md-6">



      <?php

      if($venue_data1)  {

        foreach ($venue_data1 as $key => $value) {
          ?>
          <div class="form-group">
            <div class="dealbox">
              <div class="adimg"> 
                <img src="<?php 

                if($value['display_image']=='')
                {
                  echo'';
                }
                elseif (strpos ($value['display_image'], 'http')!==false)
                {
                  echo $value['display_image'];
                }
                else
                {
                 echo base_url().'uploads/user_image/'. $value['display_image'];
               }
               ?>">
             </div>
             <div class="adtext">
              <div class="date-bx">
                <label >Name</label>
                <span class="date-to named"><?=$value['business_name']?></span>
                <label>Address</label>                
                <span class="date-to addressd"><?=$value['address']?></span>
                <label>Phone</label>                
                <span class="date-to landline_numberd"><?=$value['landline_number']?></span>
                <label>Website</label>                
                <span class="date-to web_addrd"><?=$value['web_addr']?></span>
                <a href="<?=base_url().'index.php/Venues/edit_venues/'.$value['venue_id']?>"  class="form-controls-btn-edit btn-update1">Edit Venue</a>
              </div>

                <!-- <a href="<?=base_url().'index.php/Deals/edit_delas/'.$value['deal_id']?>" class="dealedit">
                  <img src="<?=base_url().'public/img/pen@2x.png'?>"> -->
                </a>
              </div>
            </div>
          </div>
          <?php
        }
      } else {
        ?>
        
        <?php
      }
      ?>
    </div>
  </div>
</div>

<script type="text/javascript">
 $(function() {
  setTimeout(function() { 
    jQuery('.alert').hide();
  }, 2500);
});
</script>
<script type="text/javascript">
  $('.btn-update').click(function(){
   window.location.href= '<?=base_url('index.php/Venues/add_venues')?>';
 })
</script>
