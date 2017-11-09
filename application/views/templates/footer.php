

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
(function(){
	var ul=$("#navs"),li=$("#navs li"),i=li.length,n=i-1,r=170;
	ul.click(function(){
		$(this).toggleClass('active');
		if($(this).hasClass('active')){
			for(var a=0;a<i;a++){
				li.eq(a).css({
					'transition-delay':""+(50*a)+"ms",
					'-webkit-transition-delay':""+(50*a)+"ms",
					'left':(r*Math.cos(-180/n*a*(Math.PI/180))),
					'top':(-r*Math.sin(-180/n*a*(Math.PI/180)))
				});
			}
		}else{
			li.removeAttr('style');
		}
	});
})($);
$('.ver').hide();
           $('.v').hide();
        $('#mos').on('click',function(e){
            $('.ver').slideToggle('slow');
	    $('.v').slideToggle('slow');
            e.preventDefault();
            e.stopPropagation();
        });
        $('#si').on('click',function(e){
            $('.ver').hide();
	    $('.v').hide();
        });
        $('.ver').on('click',function(e){
            e.stopPropagation();
        });
	$('.v').on('click',function(e){
            e.stopPropagation();
        });
           $("html").click(function(){
         $(".ver").hide();
	$('.v').hide();
    });

	</script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/materialize.js"></script>

	<script type="text/javascript">$(".brand-logo").sideNav();</script>


</body>
</html>
