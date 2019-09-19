$(document).ready(function() {

    if( $('.menu-icon').is(':visible') ) {
        $('.menu-icon').on('click', function() {
            $('body').toggleClass('menu-active');
        });
    }

    if( $(".my-slider-nav .circle").length ) {
        $(".my-slider-nav .circle").click(function() {
            if( !$(this).hasClass('active') ) {
                var id = $(this).attr('title');
                $(".my-slider-nav .circle.active").removeClass('active');
                $(this).addClass('active');
                if( !$("#"+ id).hasClass('active') ) {
                    $(".my-slider .slide").removeClass("active");
                    $("#"+ id).addClass('active');
                }
            }
        });
    }

    if( $("#tabbed-widget").length ) {
        $(".tab-wrap a").click(function() {
            if( !$(this).hasClass('active') ) {
                var id = $(this).attr('data-href');
                $(".tab-wrap a.active").removeClass('active');
                $(this).addClass('active');
                if( !$(id).hasClass('active') ) {
                    $(".tab-body .tab").removeClass("active");
                    $(id).addClass('active');
                }
            }
        });

        $(".template .btn-link").click(function() {
            var imgSrc = $(this).attr('data-img');
            if(imgSrc) {
                $('.modal-content img').attr('src',imgSrc);
                $('body').addClass('modal-open');
                $("#modalBox").fadeIn('fast');
            }
        });

        $("#modalBox").click(function(event) {
            event.stopImmediatePropagation();
            var target = $(event.target);
            if( $(target).hasClass('modal-box') ) {
                $(".modal-content .btn-cross").trigger('click');
            }
        });
        
        $(".modal-content .btn-cross").click(function() {
            $("#modalBox").fadeOut('fast');
            $('body').removeClass('modal-open');
            setTimeout(function() {
                $('.modal-content img').attr('src','img/loader.gif');
            }, 500);
        })

        $(document).keydown(function(event) {
            var ESC = 27;
            var keycode = event.which || event.keyCode;
            if(keycode == ESC) {
                $(".modal-content .btn-cross").trigger('click');
            }
        })
    }

    $("#contact-form").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this);
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
                alert(data); // show response from the php script.
            }
        });


    });

});