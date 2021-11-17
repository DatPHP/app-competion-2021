// Định nghĩa một mảng các phần tử sẽ bỏ vào giỏ hàng

var shoppingCartItems = [];
$(document).ready(function () {
    // Kiểm tra nếu đã có sessionStorage["shopping-cart-items"] hay chưa?
    if (sessionStorage["shopping-cart-items"] != null) {
        shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"].toString());
    }

    // Hiển thị thông tin từ giỏ hàng
    if (shoppingCartItems.length > 0) {
        $("#empty-cart").hide();
        $("#exist-cart").show();

    }

    displayShoppingCartItems();
});

$(document).ready(function () {
    // // Kiểm tra nếu đã có sessionStorage["shopping-cart-items"] hay chưa?
    // if (sessionStorage["shopping-cart-items"] != null) {
    //     shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"].toString());
    // }

    $(document).ready(function () {
        // Kiểm tra nếu đã có sessionStorage["shopping-cart-items"] hay chưa?

        if (sessionStorage["shopping-cart-items"] != null) {
            sessionStorage["shopping-cart-items"] = JSON.stringify(shoppingCartItems);
            //  shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"].toString());
            displayShoppingCartItems();
        }


        // Hiển thị thông tin từ giỏ hàng

        // $("#empty-cart").hide();
        // $("#exist-cart").show();

        displayShoppingCartItems();
    });


    // Hiển thị thông tin từ giỏ hàng

    //  displayShoppingCartItems();
});


// Sự kiện click các button có class=".add-to-cart"
$(".add-to-cart").click(function () {
    var button = $(this); // Lấy đối tượng button mà người dùng click
    var id = button.attr("id"); // id của sản phẩm là id của button
    var name = button.attr("data-name"); // name của sản phẩm là thuộc tính data-name của button
    var price = button.attr("data-price"); // price của sản phẩm là thuộc tính data-price của button
    var quantity = 1; // Số lượng
    var item = {
        id: id,
        name: name,
        price: price,
        quantity: quantity
    };

    var exists = false;
    if (shoppingCartItems.length > 0) {
        // Nếu mặt hàng đã tồn tại trong giỏ hàng thì chỉ cần tăng số lượng mặt hàng đó trong giỏ hàng.
        $.each(shoppingCartItems, function (index, value) {

            if (value.id == item.id) {
                value.quantity++;
                exists = true;
                return false;
            }
        });
    }

    // Nếu mặt hàng chưa tồn tại trong giỏ hàng thì bổ sung vào mảng
    if (!exists) {
        shoppingCartItems.push(item);
    }

    // Lưu thông tin vào sessionStorage
    sessionStorage["shopping-cart-items"] = JSON.stringify(shoppingCartItems); // Chuyển thông tin mảng shoppingCartItems sang JSON trước khi lưu vào sessionStorage
    // Gọi hàm hiển thị giỏ hàng
    displayShoppingCartItems();
});

// Xóa hết giỏ hàng shoppingCartItems
$("#button-clear").click(function () {
    shoppingCartItems = [];
    sessionStorage["shopping-cart-items"] = JSON.stringify(shoppingCartItems);
    $("#table-products > tbody").html("");
    $(".dropdowncart").html(" ");
    displayShoppingCartItems();
});




// Xóa tung san pham cua  giỏ hàng shoppingCartItems
$(document).on('click',"button[name='button-clear-item[]']", function(){
    shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"].toString());
    shoppingCartItems.splice($(this).val(), 1);
    sessionStorage["shopping-cart-items"] = JSON.stringify(shoppingCartItems);
    displayShoppingCartItems();
});


// Hiển thị giỏ hàng ra table
function displayShoppingCartItems() {

    // Chuyển thông tin từ JSON trong sessionStorage sang mảng shoppingCartItems.

  // shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"].toString()); 

    console.log(sessionStorage["shopping-cart-items"]);

    /*
    shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"]); 
    if (shoppingCartItems.length > 0) {
        $("#table-products > tbody").html("");
        // Duyệt qua mảng shoppingCartItems để append từng item dòng vào table
        var subTotal = 0;
        // var bien="";
        var bien = 0;
        $.each(shoppingCartItems, function (index, item) {
            var htmlString = "";
            var itemTotal = item.price * item.quantity;
            subTotal = subTotal + itemTotal;
            htmlString += "<tr>";
            // htmlString += "<td>" + item.id + "</td>";
            htmlString += "<td style='width:150px'><b>" + item.name + "</b></td>";
            //  htmlString += "<td style='text-align: right'>" + item.price + "</td>";
            htmlString += "<td  style='width:40px;margin:5px;text-align: right'>" + " x "+item.quantity+"</td>";
            htmlString += "<td style='text-align: right;width: 80px'>" + itemTotal + "</td>";
            htmlString += "<td style='text-align: left; width: 40px'>" +" <button class=\" btn btn-danger\" name=\"button-clear-item[]\"  value='" + index + "'> <i class=\"fa fa-trash\"></i> </button></td>";

            htmlString += "</tr>";
            $("#table-products > tbody:last").append(htmlString);
            bien = bien +1;

        });

        $(".dropdowncart").html( bien +" items" );

        $("#table-products > tbody:last").append("<tr><td colspan='4'><p  class=\"list-group-item \" > <b>Total:</b> " + subTotal + " vnd"+"</p></td><tr>");

        $("#empty-cart").hide();
        $("#exist-cart").show();
    } else {
        $("#empty-cart").show();
        $("#exist-cart").hide();
        $(".dropdowncart").html(" ");

    }

    */ 
}

$("#logout").click().click(function () {
    shoppingCartItems = [];
    sessionStorage["shopping-cart-items"] = JSON.stringify(shoppingCartItems);
    $("#table-products > tbody").html("");
    $(".dropdowncart").html(" ");
    displayShoppingCartItems();
    $.ajax({
        url: 'http://localhost:8000/logout',
        type: 'post',
        dataType: "json",
        success : function (){
            location.reload(true);
        }
    })
});


$("#dash-board").click().click(function () {
    location.href = 'http://localhost:8000/admin';
});