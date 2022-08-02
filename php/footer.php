<!--footer bottom---->
<footer>
        <label class="copyright">Copyright © 2019 V7 Valet Parking | <a href="tel:+971 00000000" title="Contact Us">+971 00 000 0000</a> | -- | <a href="RefundPrivacy.php" title="Refund Policy"> Refund &amp; privacy policy </a></label>
   
</footer>



<?php include'php/load_js.php'?>
<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 { 
  $.ajax({
   url:"php/fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.drop-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();

 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('0');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 10000);
 
});
</script>
<!-- Start of HubSpot Embed Code -->

<!-- End of HubSpot Embed Code -->