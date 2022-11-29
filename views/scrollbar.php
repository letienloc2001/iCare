
<a class="scroll-bar" href="#">
       <i class="fas fa-arrow-up"></i>
</a>
<script>
        $(document).ready(function() {
            $(window).bind('scroll', function(){
                if($(this).scrollTop() > 350) {
                    
                    $(".scroll-bar").addClass("on");
                }
                
                else{
                    
                    $(".scroll-bar").removeClass("on");
                }
            })
        })
</script>