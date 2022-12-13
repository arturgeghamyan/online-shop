$(document).ready(function () {
    const token = $('#token').val()
    $(".delete_product").click(function () {
        let id = $(this).attr("id")
        $.ajax({
            url: '/delete/product',
            type: 'post',
            data: {
                _token: token,
                id: id
            },
        })
    });
    $(".edit_product").click(function () {
        let id = $(this).attr("data-id")
        let name = $('#name').val()
        let count = $('#count').val()
        let price = $('#price').val()
        let discription = $('#discription').val()
        $.ajax({
            url: '/edit/product',
            type: 'post',
            data: {
                _token: token,
                id: id,
                name: name,
                count: count,
                price: price,
                discription: discription
            },
        })
    })
    $(".add_cart").click(function () {
        let id = $(this).attr("data-id")
        let count = $(this).parents().find('.cart-plus-minus-box').val()
        $.ajax({
            url: '/add_cart',
            type: 'post',
            data: {
                _token: token,
                id: id,
                count: count
            },
        })
    })
    $(".add_wishlist").click(function () {
        let id = $(this).attr("data-id")
        $.ajax({
            url: '/add_wishlist',
            type: 'post',
            data: {
                _token: token,
                id: id
            },
        })
    })
    $(document).on('click', ".delete_cart", function () {
        let id = $(this).attr("data-id")
        $.ajax({
            url: '/delete/cart',
            type: 'post',
            data: {
                _token: token,
                id: id
            },
            success:function(r) {
                console.log(r)
            }
        })
    })
    $(document).on('click', ".delete_wishlist", function () {
        let id = $(this).attr("data-id")
        $.ajax({
            url: '/delete/wishlist',
            type: 'post',
            data: {
                _token: token,
                id: id
            },
            success:function(r) {
                console.log(r)
            }
        })
    })

    $(document).on('click', ".countup", function () {
        let id = $(this).attr("data-id")
        let count = $('.count'+id).val()
        let price = $('.pricess'+id).text()
        $.ajax({
            url: '/count/up',
            type: 'post',
            data: {
                _token: token,
                id:id,
                count: count
            },
            success:function(r) {
                let total = count * price
                $('.totaled'+r).empty()
                $('.totaled'+r).text(total)
            }
        })
    })

    $(document).on('click', ".countdown", function () {
        let id = $(this).attr("data-id")
        let count = $('.count'+id).val()
        let price = $('.pricess'+id).text()
        $.ajax({
            url: '/count/down',
            type: 'post',
            data: {
                _token: token,
                id:id,
                count: count
            },
            success:function(r) {
                let total = count * price
                $('.totaled'+r).empty()
                $('.totaled'+r).text(total)
            }
        })
    })

    $(document).on('change','.changecount', function () {
        console.log(11);
        let id = $(this).attr("data-id")
        let count = $(this).val()
        let price = $('.pricess'+id).text()
        console.log(id,count,price)
    })
});
