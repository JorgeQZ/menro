

//menu fixed columna derecha *se hizo en js porque el jquery no se habia registrado bien, aún*
window.onload = () => {
    let mainWrapper = document.querySelector("#mainWrapper")
    let sidebar_content = document.getElementById("sidebarContent")
    let sidebar_content_inner = document.getElementById("sidebarContent_inner")
    window.onscroll = () => {
        if (mainWrapper) {
            if (Math.ceil(mainWrapper.getBoundingClientRect().bottom) <= window.innerHeight) {
                sidebar_content.classList.add('stickToBottom');
            } else {
                sidebar_content.classList.remove('stickToBottom');
            }

            sidebar_content_inner.clientTop = sidebar_content.clientTop

            console.log(Math.ceil(sidebar_content.clientTop));

        }
    }
};

//ya jala el jquery
jQuery(document).ready(function ($) {

    //Proyectos tabs
    jQuery('.option-item').on('click', function (e) {
        e.preventDefault();
        jQuery('.option-item').removeClass('active');
        jQuery(this).addClass('active');

        jQuery('.tab').removeClass('active').css({
            'opacity': 0
        });

        let tab_id = $(this).attr('data-button');
        jQuery('#' + tab_id).addClass('active').animate({
            'opacity': '1'
        }, 600);
        /*
                var aux =  jQuery(this).index();
                $('.wrapper .contenedor-edificaciones.active').hide();
                $('.wrapper .contenedor-edificaciones.active').removeClass("active");
                $('.wrapper .contenedor-edificaciones').eq(aux).fadeIn(300);
                $('.wrapper .contenedor-edificaciones').eq(aux).addClass("active");
        */
    });

    //botone render close
    $('.close-button').on('click', function (e) {
        $(this).parent().removeClass('animate__fadeInLeft').css({
            'display': 'none'
        });
    });

    
    // Botones del render
    let currentButton = '';
    $('.button-content').on('mouseenter', function (e) {
        e.stopPropagation();
        let width = screen.width;
        console.log(width);
        clickedButton = $(this).attr('id'); //pa saber cual boton se clickeó
        //linea de tiempo para editar las acciones de la figura
        child_shape_animation = anime.timeline({
            easing: 'linear',
            duration: 200
        });

        if (width < 1024) {
            $('.shape-mobile')
                .removeClass('animate__fadeInRight')
                .css({
                    'display': 'none'
                });

            $('#shape_mobile_' + clickedButton)
                .addClass('animate__fadeInRight')
                .css({
                    'display': 'block'
                });
        }
    });
    

    // /* Menú */
    $('.burguer').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        $(this).toggleClass('active');
        $('.wrapper .sidebar-content').toggleClass('active');
        $("body").toggleClass('dis');
    });

    //submit del contact form
    /*
    $('#wpcf7-f92-o1 .wpcf7-submit').on({
        mouseenter: function () {
            anime({
                targets: $('#wpcf7-f92-o1 .wpcf7-submit')[0],
                background: '#45b5e8',
                duration: 200,
                easing: 'easeInOutQuad'
            });
        },
        mouseleave: function () {
            $(this).attr('style', '');
        }
    });
    */

    // =====================================================
    //                    WAYPOINTS
    // =====================================================

    // GENERALES
    let animated_elements = $('.animate__todos');
    for (let i = 0; i < animated_elements.length; i++) {
        new Waypoint({
            element: $('.animate__todos')[i],
            handler: function () {
                $('.animate__todos').eq(i).addClass('animate__fadeInUp');
            },
            offset: '75%',
        })
    }

    let project_img = $('.project_img');
    for (let i = 0; i < project_img.length; i++) {
        new Waypoint({
            element: $('.project_img')[i],
            handler: function () {
                $('.project_img').eq(i).addClass('animate__fadeInLeft');
            },
            offset: '100%',
        })
    }

    let animated_elements_encabezados = $('.animate__encabezados');
    for (let i = 0; i < animated_elements_encabezados.length; i++) {
        new Waypoint({
            element: $('.animate__encabezados')[i],
            handler: function () {
                $('.animate__encabezados').eq(i).addClass('animate__fadeInUp');
            },
            offset: '100%',
        })
    }

    let nivel_tres = $('.nivel_3');
    for (let i = 0; i < nivel_tres.length; i++) {
        new Waypoint({
            element: $('.nivel_3')[i],
            handler: function () {
                $('.nivel_3').eq(i).addClass('animate__fadeInUp');
            },
            offset: '40%',
        })
    }

    let nivel_dos = $('.nivel_2');
    for (let i = 0; i < nivel_dos.length; i++) {
        new Waypoint({
            element: $('.nivel_2')[i],
            handler: function () {
                $('.nivel_2').eq(i).addClass('animate__fadeInUp');
            },
            offset: '60%',
        })
    }

    let nivel_uno = $('.nivel_1');
    for (let i = 0; i < nivel_uno.length; i++) {
        new Waypoint({
            element: $('.nivel_1')[i],
            handler: function () {
                $('.nivel_1').eq(i).addClass('animate__fadeInUp');
            },
            offset: '80%',
        })
    }

    let nivel_cimentacion = $('.nivel_cimentacion');
    for (let i = 0; i < nivel_cimentacion.length; i++) {
        new Waypoint({
            element: $('.nivel_cimentacion')[i],
            handler: function () {
                $('.nivel_cimentacion').eq(i).addClass('animate__fadeInUp');
            },
            offset: '100%',
        })
    }

    let image_render = $('.image-cont-img');
    for (let i = 0; i < image_render.length; i++) {
        new Waypoint({
            element: $('.image-cont-img')[i],
            handler: function () {
                $('.image-cont-img').eq(i).addClass('animate__fadeIn');
            },
            offset: '70%',
        })
    }

    let footer = $('.footer_animate');
    for (let i = 0; i < footer.length; i++) {
        new Waypoint({
            element: $('.footer_animate')[i],
            handler: function () {
                $('.footer_animate').eq(i).addClass('animate__fadeInUp');
            },
            offset: '100%',
        })
    }
});