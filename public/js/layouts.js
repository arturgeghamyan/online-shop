$(document).ready(function () {
    const token = $('#token').val()
    $.ajax({
        url: '/show_wishlist',
        type: 'post',
        data: {
            _token: token
        },
        success: function (r) {
            r = JSON.parse(r)
            let totalPrice = 0
            let count = 0
            for (e in r) {
                totalPrice += r[e]['product'].price
                count++
                $(`<div class="single-cart clearfix">
             
                <div class="cart-info">
                    <h5><a>${r[e]['product'].name}</a></h5>
                    <p class="mb-0">Price : $ ${r[e]['product'].price}</p>
                    <span class="cart-delete"><a><button class="delete_wishlist"
                    data-id="${r[e]['product']['id']}"><i
                        class="zmdi zmdi-close"></i><button></a></span>
                    </div>
             </div>`).appendTo('.all-cart-product')
                $(".total-price").text(totalPrice + '$')
                $(".total-count").text(count)

            }
        }
    })
    $.ajax({
        url: '/show_cart',
        type: 'post',
        data: {
            _token: token
        },
        success: function (r) {
            r = JSON.parse(r)
        }
    })
})
