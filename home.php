<style>
/* body {
  font-family: 'Brush Script MT', cursive;
} */


h1 {color:blue;}
/* p {color:blue;} */

</style>

<section id="bg-bus"  class="d-flex align-items-center"> 
    <div class="container">
      <?php if(!isset($_SESSION['login_id'])): ?>
      	<center><button class="btn btn-info btn-lg" type="button" id="book_now">Book The Bus Now</button></center>
      <?php else: ?>
        <!-- <p style="color:blue;">>Welcome TO Admin Bus Booking</p> -->
        <!-- <p style="font-size:50px;">I am big</p> -->

        <h1>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
        
        
        Welcome TO Admin <br>
        Bus Booking
      </h1>

        

      <?php endif; ?>
    </div>
  </section>
  <script>
  	$('#book_now').click(function(){
      uni_modal('Find Schedule','book_filter.php')
  })
  </script>