<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    

    <title>Daily Shop | Home</title>
    
    <!-- Font awesome -->

    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css" >

    <!-- Bootstrap -->
 

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >

    <!-- SmartMenus jQuery Bootstrap Addon CSS -->


    <link href="{{ asset('css/jquery.smartmenus.bootstrap.css') }}" rel="stylesheet" type="text/css" >

    <!-- Product view slider -->


    <link href="{{ asset('css/jquery.simpleLens.css') }}" rel="stylesheet" type="text/css" >

    <!-- slick slider -->

    <link href="{{ asset('css/slick.css') }}" rel="stylesheet" type="text/css" >

    <!-- price picker slider -->


    <link href="{{ asset('css/nouislider.css') }}" rel="stylesheet" type="text/css" >

    <!-- Theme color -->
    <link href="{{ asset('css/theme-color/default-theme.css') }}" rel="stylesheet" type="text/css" >

    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{ asset('css/sequence-theme.modern-slide-in.css') }}" rel="stylesheet" type="text/css" >

    <!-- Main style sheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body> 
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    @include('layouts.header_top')
    <!-- / header top  -->

    <!-- start header bottom  -->
    @include('layouts.header_botton')
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->


  <!-- menu -->
  @include('layouts.menu_top')
  <!-- / menu -->

  <!-- Start slider -->
  @include('home.slider_banner')
  <!-- / slider -->
  <!-- Start Promo section -->
  @include('home.promo_banner')
  <!-- / Promo section -->

  <!-- Products section -->
  @include('home.product_session')
  <!-- / Products section -->


  <!-- banner section -->

  @include('home.banner')

  <!-- popular section -->
  @include('home.popular_category')
  <!-- / popular section -->
  <!-- Support section -->
  @include('home.support')
  <!-- / Support section -->


  <!-- Testimonial -->
  @include('layouts.testimonial')
  <!-- / Testimonial -->

  <!-- Client Brand -->
  @include('layouts.client_brand')
  <!-- / Client Brand -->

  <!-- Subscribe section -->
  @include('layouts.subscribe')
  <!-- / Subscribe section -->

  <!-- footer -->  
   @include('layouts.footer')
  <!-- / footer -->

  <!-- Login Modal -->  
  @include('layouts.login_popup')

  <!-- / Login Modal -->  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
  <!-- SmartMenus jQuery plugin -->
  <script src="{{ URL::asset('js/jquery.smartmenus.js') }}"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script src="{{ URL::asset('js/jquery.smartmenus.bootstrap.js') }}"></script>
  <!-- To Slider JS -->
  <script src="{{ URL::asset('js/sequence.js') }}"></script>

  <script src="{{ URL::asset('js/sequence-theme.modern-slide-in.js') }}"></script>
  <!-- Product view slider -->
  <script src="{{ URL::asset('js/jquery.simpleGallery.js') }}"></script>

  <script src="{{ URL::asset('js/jquery.simpleLens.js') }}"></script>
  <!-- slick slider -->
  <script src="{{ URL::asset('js/slick.js') }}"></script>
  <!-- Price picker slider -->
  <script src="{{ URL::asset('js/nouislider.js') }}"></script>
  <!-- Custom js -->
  <script src="{{ URL::asset('js/custom.js') }}"></script>

  <script>



       



          function ProductbyGender(gender)
          {
            var _token = $("input[name=_token]").val();
          var gender = gender;
          $.ajax({
              url:"{{ url('product/filter/gender') }}",
              method:"GET",
              data:{gender:gender, _token:_token},
              dataType:"json",
              success:function(data)
              {
                //alert("success");
                var output = '<ul class="aa-product-catg">';
                if(data.length > 0)
                {
                for(var count = 0; count < data.length; count++)
                {
                    let url_image = 'images/products/'+data[count].file_path;
                    output += '<li>';
                    output += '<figure>';
                    output += '<a class="aa-product-img" href="#"><img src="'+url_image+'" alt="polo shirt img" with="250px" height="300px"></a>';
                    output += '<a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>';
                    output += '<figcaption>';
                    output += '<h4 class="aa-product-title"><a href="#">'+data[count].name+'</a></h4>';
                    output += '<span class="aa-product-price">'+data[count].price+'</span><span class="aa-product-price"><del>$65.50</del></span>';
                    output += '</figcaption>';
                    output += '<div class="aa-product-hvr-content">';
                    output += '<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>';
                    output += '<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>';
                    output += '<a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>';
                    output += '</div>';
                    output += ' <span class="aa-badge aa-sale" href="#">SALE!</span>';
                  // output += '<td>'+data[count].Country+'</td>';
                    output += '</li>';
                }
                }
                else
                {
                   output += '<li>';
                   output += '<p colspan="6">No Data Found</p>';
                   output += '<li>';
                }

                output += '</ul>';
                if(data.length > 0)
                {
                  output += '<a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>';
                }

                $('#'+gender).html(output);   
              }

          });

          }




          function ProductbyKind(kind)
          {
            var _token = $("input[name=_token]").val();
          var kind = kind;
          $.ajax({
              url:"{{ url('product/filter/kind') }}",
              method:"GET",
              data:{kind:kind, _token:_token},
              dataType:"json",
              success:function(data)
              {
                //alert("success");
                var output = '<ul class="aa-product-catg">';
                if(data.length > 0)
                {
                for(var count = 0; count < data.length; count++)
                {
                    let url_image = 'images/products/'+data[count].file_path;
                    output += '<li>';
                    output += '<figure>';
                    output += '<a class="aa-product-img" href="#"><img src="'+url_image+'" alt="polo shirt img" with="250px" height="300px"></a>';
                    output += '<a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>';
                    output += '<figcaption>';
                    output += '<h4 class="aa-product-title"><a href="#">'+data[count].name+'</a></h4>';
                    output += '<span class="aa-product-price">'+data[count].price+'</span><span class="aa-product-price"><del>$65.50</del></span>';
                    output += '</figcaption>';
                    output += '<div class="aa-product-hvr-content">';
                    output += '<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>';
                    output += '<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>';
                    output += '<a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>';
                    output += '</div>';
                    output += ' <span class="aa-badge aa-sale" href="#">SALE!</span>';
                  // output += '<td>'+data[count].Country+'</td>';
                    output += '</li>';
                }
                }
                else
                {
                   output += '<li>';
                   output += '<p colspan="6">No Data Found</p>';
                   output += '<li>';
                }

                output += '</ul>';
                if(data.length > 0)
                {
                  output += '<a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>';
                }

                $('#'+kind).html(output);   
              }

          });

          }


         
        if($('#kind_01').hasClass('active') )
        {
          ProductbyGender(gender='men');
        }





   

      $("#kind_02").on("click", function(){
         alert("success");
        // $('#women').html('<h1> Good evening! </h1>');
      });

      $("#kind_03").on("click", function(){
         alert("success");
      });

      $("#kind_04").on("click", function(){
         alert("success");
      });





        function addTodo() {
                    var task = $('#task').val();
                    let _url     = `/todos`;
                    let _token   = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: _url+'/create',
                        type: "POST",
                        dataType: 'html',
                        data: {
                        todo: task,
                        _token: _token
                        },
                    }).done(function(data) {
                        //alert("abababab");
                        let todo = JSON.parse(data);
                     
                        $('table tbody').append(`
                            <tr id="todo_${todo.id}">
                                <td>${todo.id}</td>
                                <td>${ todo.todo }</td>
                                <td>
                                    <a data-id="${ todo.id }" onclick="editTodo(${todo.id})" class="btn btn-info">Edit</a>
                                    <a data-id="${todo.id}" class="btn btn-danger" onclick="deleteTodo(${todo.id})">Delete</a>
                                </td>
                            </tr>
                        `);
                        $('#task').val('');
                        $('#addTodoModal').modal('hide');
                            //reload page
                          //  location.reload();
                    });
            }
   
    function deleteTodo(id) {
        let url = `/todos/${id}`;
        let token   = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: url,
            type: 'DELETE',
            data: {
            _token: token
            },
            success: function(response) {
                $("#todo_"+id).remove();
            }
        });
    }
    function editTodo(e) {
        var id  = $(e).data("id");
        var todo  = $("#todo_"+id+" td:nth-child(2)").html();
        $("#todo_id").val(id);
        $("#edittask").val(todo);
        $('#editTodoModal').modal('show');
    }
    function updateTodo() {
        var task = $('#edittask').val();
        var id = $('#todo_id').val();
        let _url     = `/todos/${id}`;
        let _token   = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: _url,
            type: "PUT",
            data: {
                todo: task,
                _token: _token
            },
            success: function(data) {
                    todo = data
                    $("#todo_"+id+" td:nth-child(2)").html(todo.todo);
                    $('#todo_id').val('');
                    $('#edittask').val('');
                    $('#editTodoModal').modal('hide');
            },
            error: function(response) {
                todo = response;
                $('#taskError').text(response.responseJSON.errors.todo);
            }
        });
    }
  
</script>

  </body>

@livewireScripts

</html>
