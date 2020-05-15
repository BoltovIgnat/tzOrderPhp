$(document).ready(function(){

    $('#id_0').datetimepicker({
        "format": "MM/DD/YYYY hh:mm:ss A",
    });
   
    
    $('.js-popup-open').on('click', function(){
        $('.mob-navigation.active').removeClass('active');
        $('.js-nav-burger.close').removeClass('close');
        closePopups();

        var popupName = $(this).data('popup');
        $('.overlay').addClass('active');
        $('#' + popupName).addClass('active');
        $('body').addClass('popup-opened');
        if( $(window).width() <= 480 ){
            $('html').scrollTop(0);
        }
    });
    $('.js-popup-close').on('click', function(){
        $('.overlay').removeClass('active');
        $(this).parents('.popup').removeClass('active');
        $('body').removeClass('popup-opened');
    });
	$('.overlay').on('click', function(e){
		if( !$(e.target).parents().addBack().is('.popup') ){
			$('.popup').removeClass('active');
            $('.overlay').removeClass('active');
			$('.js-review-delete').removeClass('active');
            $('body').removeClass('popup-opened');
        } 
        if ( !$(e.target).parents().addBack().is('.basket-popup') ){
            $('#basket-popup').removeClass('active');
            $('.overlay').removeClass('active');
            $('.header').removeClass('header-overlay');
        }
    });
    
    renderCart();
    var url  = window.location; 

    if (url.href.indexOf('order.php') > 0 || url.href.indexOf('basket.php') > 0 )
    {
        renderOrderCart();
    }

    $('.ibc-order').on('click', function(){
        
        let name = $( "#exampleInputName" ).val();
        let email = $( "#exampleInputEmail1" ).val();
        let telefon = $( "#exampleInputTelefon" ).val();
        let adress = $( "#inputAddress" ).val();
        let arr = $( "#id_start_datetime" ).val().split(' ');
        let date = arr[0];
        day = date.slice(3,5);
        month = date.slice(0,2);
        year = date.slice(6,11);
        date = year+'-'+month+'-'+day;
        let time = arr[1];
        var cartData = getCartData();
        let amount = 0;
        for (var i in cartData) {
            amount = amount + Number(cartData[i][1])*Number(cartData[i][2]);
        }
        var orderData = new FormData();
            
        orderData.append("name", name);
        orderData.append("email", email);
        orderData.append("telefon", telefon);
        orderData.append("adress", adress);
        orderData.append("date", date);
        orderData.append("time", time);
        orderData.append("amount", amount);

        httpPost('/sql/addOrder.php', orderData).then(
            idOrder => {
                console.log(idOrder);
                

                for (var i in cartData) {
                    let amount = Number(cartData[i][1])*Number(cartData[i][2]);
                    let name = cartData[i][0];
                    
                    let price = cartData[i][1];
                    let count = cartData[i][2];
                    
                    var orderRowData = new FormData();
                    orderRowData.append("name", name);
                    orderRowData.append("amount", amount);
                    orderRowData.append("price", price);
                    orderRowData.append("count", count);
                    orderRowData.append("idOrder", idOrder);
                    orderRowData.append("idproduct", i);
                    

                    httpPost('/sql/addOrderRow.php', orderRowData);
                } 
                removeCartData();   
            },
            error => console.log(`Rejected: ${error}`)
          );
        
        return false;
    });

    $('.to-basket').on('click', function(){
        this.disabled = true; // блокируем кнопку на время операции с корзиной
        var cartData = getCartData() || {}, // получаем данные корзины или создаём новый объект, если данных еще нет
            parentBox = $(this).parents(".products-item"), // родительский элемент кнопки "Добавить в корзину"
            itemId = parentBox.attr('ibc-id'), // ID товара
            itemTitle = parentBox.find(".products-item-title a").text().trim(), // название товара
            itemPrice = parentBox.find(".products-item-price").text().trim(), // стоимость товара
            itemImg = parentBox.find(".products-item-image img").attr('src');
        if(cartData.hasOwnProperty(itemId)){ // если такой товар уже в корзине, то добавляем +1 к его количеству
            cartData[itemId][2] += 1;
        } else { // если товара в корзине еще нет, то добавляем в объект
            cartData[itemId] = [itemTitle, itemPrice, 1, itemImg];
        }
        if(!setCartData(cartData)){ // Обновляем данные в LocalStorage
            this.disabled = false; // разблокируем кнопку после обновления LS
        }
        renderCart();
        return false;
    });
    
    
    $('.js-status-open').on('click', function(){
        $('#status-popup').toggleClass('active');
    });

    $('.js-catalog-open').on('click', function(){
        $('#catalog-popup').toggleClass('active');
    });

    $('.js-sorting-open').on('click', function(){
        $('#sorting-select').toggleClass('active');
    });

    $('.js-filter-open').on('click', function(){
        $('#filter-block').addClass('active');
        $('body').addClass('popup-opened');
        if( $(window).width() <= 900 ){
            $('html').scrollTop(0);
        }
    });
    $('.js-filter-close').on('click', function(){
        $('#filter-block').removeClass('active');
        $('body').removeClass('popup-opened');
    });

    $('.js-basket-open').on('click', function(){
        $('#basket-popup').toggleClass('active');
        $('.overlay').toggleClass('active');
        $('.header').toggleClass('header-overlay');
    });
    $('.js-basket-close').on('click', function(){
        $('#basket-popup').removeClass('active');
        $('.overlay').removeClass('active');
        $('.header').removeClass('header-overlay');
    });

    $('.js-plus').on('click', function() {
        $(this).siblings('.js-quantity').val(+$(this).siblings('.js-quantity').val() + 1);
    });
    $('.js-minus').on('click', function () {
        if ($(this).siblings('.js-quantity').val() > 1) {
            $(this).siblings('.js-quantity').val(+$(this).siblings('.js-quantity').val() - 1);
        }
    });

    $('.select').select2({
        minimumResultsForSearch: Infinity
    });

    $('.js-nav-burger').on('click', function(){
        $('.mob-navigation').toggleClass('active');
        $(this).toggleClass('close');
    });

    // cropText($('.card-small-title'), 50);
});

$(window).resize(function(){
    if( $(window).width() > 900 ){
        $('.mob-navigation').removeClass('active');
        $('.js-nav-burger').removeClass('close');
    }
});

function closePopups(){
    $('.overlay').removeClass('active');
    $('.popup').removeClass('active');
    $('body').removeClass('popup-opened');
    $('.overlay').removeClass('active');
    $('.header').removeClass('header-overlay');
    if( $('#basket-popup').length > 0 ){
        $('#basket-popup').removeClass('active');
    }
    if( $('.js-review-delete').length > 0 ){
        $('.js-review-delete').removeClass('active');
    }
    if( $('.status-popup').length > 0 ){
        $('.status-popup').removeClass('active');
    }
}

function getCartData(){
    return JSON.parse(localStorage.getItem('cart'));
}
// Записываем данные в LocalStorage
function setCartData(o){
    localStorage.setItem('cart', JSON.stringify(o));
    return false;
}

function renderCart(){

    var cartData = getCartData() || {};
    let countItems = Object.keys(cartData).length;
    let amount = 0;

    if (countItems == 0) {
        $(".basket-order-list").empty();
        $('.basket-btn').text(amount+'₽').prepend('<span class="basket-quantity">'+countItems+'</span>');
        $('.basket-popup-btn').text('Оформить заказ на сумму '+amount+'₽');
    }else{
        $(".basket-order-list").empty();
        for (var i in cartData) {
            amount = amount + Number(cartData[i][1])*Number(cartData[i][2]);
            $(".basket-order-list").prepend(`
            <div class="basket-order-item">
                <div class="boi-image" >
                    <img src="${cartData[i][3]}" alt="">
                </div>
                <div class="boi-text">
                    <div class="title">${cartData[i][0]}</div>
                    <div class="piece">${cartData[i][1]}; <span class="measure">4,5 кг</span></div>
                </div>
                <div class="boi-data">
                    <div class="boi-quantity">
                        <div class="buy-quantity">
                            <input class="value js-quantity" type="text" value="${cartData[i][2]}">
                            <span class="minus js-minus"></span>
                            <span class="plus js-plus"></span>
                        </div>
                        <div class="measure">шт</div>
                    </div>
                    <div class="boi-price">
                        ${Number(cartData[i][1])*Number(cartData[i][2])}
                    </div>
                    <div class="boi-delete"></div>
                </div>
            </div>`);

            console.log();
        }
        $('.basket-btn').text(amount+'₽').prepend('<span class="basket-quantity">'+countItems+'</span>');
        $('.basket-popup-btn').text('Оформить заказ на сумму '+amount+'₽');
        
    }
    console.log(cartData);
    return false;
}

function renderOrderCart(){

    var cartData = getCartData() || {};
    let countItems = Object.keys(cartData).length;
    let amount = 0;

    if (countItems == 0) {
        $(".basket-order-page-list").empty();
        /*$('.basket-btn').text(amount+'₽').prepend('<span class="basket-quantity">'+countItems+'</span>');
        $('.basket-popup-btn').text('Оформить заказ на сумму '+amount+'₽');*/
    }else{
        $(".basket-order-list").empty();
        for (var i in cartData) {
            amount = amount + Number(cartData[i][1])*Number(cartData[i][2]);
            $(".basket-order-page-list").prepend(`
            <div class="basket-order-item">
                <div class="boi-image" >
                    <img src="${cartData[i][3]}" alt="">
                </div>
                <div class="boi-text">
                    <div class="title">${cartData[i][0]}</div>
                    <div class="piece">${cartData[i][1]}; <span class="measure">4,5 кг</span></div>
                </div>
                <div class="boi-data">
                    <div class="boi-quantity">
                        <div class="buy-quantity">
                            <input class="value js-quantity" type="text" value="${cartData[i][2]}">
                            <span class="minus js-minus"></span>
                            <span class="plus js-plus"></span>
                        </div>
                        <div class="measure">шт</div>
                    </div>
                    <div class="boi-price">
                        ${Number(cartData[i][1])*Number(cartData[i][2])}
                    </div>
                    <div class="boi-delete"></div>
                </div>
            </div>`);

            console.log();
        }
        /*$('.basket-btn').text(amount+'₽').prepend('<span class="basket-quantity">'+countItems+'</span>');
        $('.basket-popup-btn').text('Оформить заказ на сумму '+amount+'₽');*/
        
    }
    console.log(cartData);
    return false;
}

function httpPost(url, formData) {

    return new Promise(function(resolve, reject) {
  
      var xhr = new XMLHttpRequest();
      xhr.open('POST', url, true);
  
      xhr.onload = function() {
        if (this.status == 200) {
          resolve(this.response);
        } else {
          var error = new Error(this.statusText);
          error.code = this.status;
          reject(error);
        }
      };
  
      xhr.onerror = function() {
        reject(new Error("Network Error"));
      };
  
      xhr.send(formData);
    });
  
}

function removeCartData(){
    localStorage.removeItem('cart');
    return false;
}
// function cropText(cropElement, size) {
//     var endCharacter = '...';   
//     cropElement.each(function(){
//         var text = $(this).html();
//         if ( $(this).html().length > size) {
//             text = text.substr(0, size);
//             $(this).html(text + endCharacter);
//         }
//     });
// };