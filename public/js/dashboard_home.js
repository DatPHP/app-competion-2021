$(document).ready(function(){
    /*
    $('.button-left').click(function(){


        $('.sidebar').toggleClass('fliph');
        $('#allocate_dashboard').find('.col-3').removeClass('col-3').addClass('col-1');
        $('#allocate_dashboard').find('.col-9').removeClass('col-9').addClass('col-11');


        $('#allocate_dashboard').find('.col-1').removeClass('col-1').addClass('col-3');
        $('#allocate_dashboard').find('.col-11').removeClass('col-11').addClass('col-9');



    });
    */





    


        $('.button-left').on('click',function(){

          if($(this).attr('data-click-state') == 1) {

                $('.sidebar').addClass('fliph');
                $(this).attr('data-click-state', 0);

                $('#allocate_dashboard').find('.col-2').removeClass('col-2').addClass('col-1');
                $('#allocate_dashboard').find('.col-10').removeClass('col-10').addClass('col-11');
            }
          else {
                $('.sidebar').removeClass('fliph');
                $(this).attr('data-click-state', 1);

                $('#allocate_dashboard').find('.col-1').removeClass('col-1').addClass('col-2');
                $('#allocate_dashboard').find('.col-11').removeClass('col-11').addClass('col-10');
          }
        });



    



      
 });