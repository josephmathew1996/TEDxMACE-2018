


<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

<script src="https://use.fontawesome.com/2e19e49e8e.js"></script>
<script type="text/css">

</script>
<footer style="background-color:#262626;" class="z-depth-5 page-footer">
	
		<div align=center class="row">
			<div class=" sc col s12 m3">
				<h5 class=" white-text"> <b>Reach Us</b></h5>
				<p class=" grey-text text-lighten-4"><b>MACE<br>Kothamangalam-686691<br>7012523654<br>tedxmace@gmail.com</b></p>
  

			</div>
            <div  class=" sc col s12 m3">
                <a  href="https://www.google.co.in/maps/place/College+Ground+Mar+Athanasius+College/@10.0540146,76.6163225,17z/data=!3m1!4b1!4m5!3m4!1s0x3b07e6154a2133e5:0x2c26b2d532bb30ea!8m2!3d10.0540146!4d76.6185112" >  <h5 style="color:white; font-weight: 500;"><b>Locate Us <i style="color:#e53935;font-size:100%" class="material-icons">location_on</i></b></h5></a>
            <a   href="https://www.google.co.in/maps/place/College+Ground+Mar+Athanasius+College/@10.0540146,76.6163225,17z/data=!3m1!4b1!4m5!3m4!1s0x3b07e6154a2133e5:0x2c26b2d532bb30ea!8m2!3d10.0540146!4d76.6185112" > <img  style="margin-top:15px;border-radius:50%;height:40%;width:40%;" class="hoverable responsive-img z-depth-5 waves-effect waves-block waves-light" src="<?php echo base_url(); ?>images/map1.jpg">
      </a>
            </div>
			<div class=" sc col s12 m3">
				<div class="row">

					<h5 class="white-text"><b>Around The Web</b></h5>
                    <div style="">
					<ul  class="list">
						<div class="col s4 push-s2">
							<li><a href="http://facebook.com/tedxmace" class="waves-effect waves-light btn-floating social facebook blue">
									<i class="fa fa-facebook"></i></a></li></div>
							<div class="col s4 ">
								<li><a class="waves-effect waves-light btn-floating red"><i class="fa fa-youtube" aria-hidden="true"></i></a></li></div>
								<div class="col s4 pull-s2">
									<li><a  href="http://twitter.com/tedxmace" class="waves-effect waves-light btn-floating "><i class="fa fa-twitter" aria-hidden="true"></i></a></li></div>
					</ul></div> 
				</div>
			</div>
			<div class=" sc col s12 m3">
				<h5 class="white-text"> <b>About Us</b></h5>
				<p class="grey-text text-lighten-4"><b>TEDx MACE aims at building a TED like environment at MACE in order to bring new ideas and innovations to the fore.</b></p>


			</div>




	</div>
	
	<div style="background-color:black;" class="footer-copyright">
		<div class="sc container">
			This independent TEDx event is operated under license from <a href="http://ted.com" target="_blank" style="color:#d12323;">TED</a>
			Copyright &copy; TEDxMACE 2017. All Rights Reserved.
			
		</div>
	</div>
</footer>



<script type="text/javascript">

	$(document).ready(function(){
      $('.parallax').parallax();
    });
        
	
    (function( $ ) {

    $.fn.scrollReveal = function() {

        
        var windowHeight = $(window).height(),
            windowWidth = $(window).width(),
            initialScroll = $(window).scrollTop(),
            items = $('.sc'),
            scroll;

        items.each(function(){
            if($(this).offset().top >= windowHeight){
                $(this).addClass('sc--hidden');
            }
        });

    
        $(window).scroll(function (event) {
            //get the current scroll position
            scroll = $(window).scrollTop();
           
            items.each( function(){
                if($(this).offset().top <= (scroll + windowHeight)){
                    $(this).removeClass('sc--hidden');
                }
            });
        });

        return this;
    };
}( jQuery ));

$.fn.scrollReveal(); 

$('#staggered-test1').scroll(function() {
         
});

	var options = [
         {selector: "#image-test", offset:100, callback: function(a) {
    
        Materialize.fadeInImage($(a));
      } },

		{
			selector: "#staggered-test1" , offset:60, callback: function(a)
		{
			Materialize.showStaggeredList($(a));

		}
		},
		{
			selector: "#staggered-test2" , offset:70, callback: function(a)
		{ 
			Materialize.showStaggeredList($(a));

		}
		},
         {
			selector: "#staggered-test3" , offset:100, callback: function(a)
		{
			Materialize.showStaggeredList($(a));

		}
		},
         {
			selector: "#staggered-test4" , offset:100, callback: function(a)
		{
			Materialize.showStaggeredList($(a));

		}
		},
         {
			selector: "#staggered-test5" , offset:60, callback: function(a)
		{
			Materialize.showStaggeredList($(a));

		}
		},
        {
			selector: "#staggered-test6" , offset:60, callback: function(a)
		{
			Materialize.showStaggeredList($(a));

		}
		},
        {
			selector: "#staggered-test7" , offset:80, callback: function(a)
		{
			Materialize.showStaggeredList($(a));

		}
		},
        {
			selector: "#staggered-test8" , offset:80, callback: function(a)
		{
			Materialize.showStaggeredList($(a));

		}
		},
         {
			selector: "#staggered-test9" , offset:90, callback: function(a)
		{
			Materialize.showStaggeredList($(a));

		}
		},
         {
			selector: "#staggered-test10" , offset:90, callback: function(a)
		{
			Materialize.showStaggeredList($(a));

		}
		},
	
	];



	Materialize.scrollFire(options);





$(document).ready(function(){
       
        $(".button-collapse").sideNav();
        
    });




   




</script>
        

<script type="text/javascript">
	
 $(document).ready(function(){
      $('.parallax').parallax();
    });


    $(document).ready(function(){
         
        
        
        $('#btn_subs_ajax').click(function(){

            var email=$('#email_subs_ajax').val();
            var msg='<?php echo base_url(); ?>Ajax_controller/subscribe/'+encodeURIComponent(email);
            if(email.length>5)
                 {
            $.ajax({
                type: 'get',
                url: msg,

                success: function (result) {
                    
                    
                    
                     if(result==='Thanks! You are already a subscriber'||result==='Subscription Successful')
                    {
                         $('#email_subs_ajax').val('');
                    Materialize.toast(result, 1500);
                     $('html, body').animate({ scrollTop: 0 }, 'fast');
                     $('#email_subs_ajax').val('');

                }else 
                    Materialize.toast(result, 1500);
                    
                    
                  


                }




            });


                 }else Materialize.toast("Please enter  Email", 1500);



        });
    });
</script>
    <script type="text/javascript">



    $(document).ready(function(){
                     
    $('.carousel').carousel();
autoplay()   
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 4500);
}
     

    });

/***$(document).ready(function(){
    $('.materialboxed').materialbox();
  });****/

</script>

</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79651497-1', 'auto');
  ga('send', 'pageview');

</script>

</body></html>

