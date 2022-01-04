//menu fixed columna derecha *se hizo en js porque el jquery no se habia registrado bien, aún*
window.onload = () => {
    let mainWrapper = document.querySelector("#mainWrapper")
    let sidebar_content = document.getElementById("sidebarContent")
    window.onscroll = () => {
        if (Math.ceil(mainWrapper.getBoundingClientRect().bottom) <= window.innerHeight) {
            sidebar_content.classList.add('stickToBottom');
        } else {
            sidebar_content.classList.remove('stickToBottom');
        }
    }
};


//ya jala el jquery
jQuery(document).ready(function ($) {

    // Botones del render
    let currentButton;
    $('.button-content').on('click', function (e) {
        e.stopPropagation()
        clickedButton = $(this)[0].className; //pa saber cual boton se clickeó

        //linea de tiempo para editar las acciones de la figura
        child_shape_animation = anime.timeline({
            easing: 'easeInCubic',
            duration: 700
        });


        if (currentButton != clickedButton) {
            //Reinicio los inline styles
            $('.shape, .shape .text,  .shape .text .title,  .shape .text .desc ').attr('style', '')

            let child_shape = $(this).find('.shape')[0]; //div lineas azules
            let text_div = $(child_shape).find('.text')[0];//div que contiene titulo y desc

            //esta madre son las lineas azules con la bolita
            child_shape_animation.add({
                targets: child_shape,
                opacity: 1,
            })

            child_shape_animation.add({
                targets: child_shape,
                width: 220,
                duration: 450

            })

            // Estas madres son el titulo y descripcion de los botones
            child_shape_animation.add({
                targets: $(text_div).find('.title')[0],
                easing: 'linear',
                delay: 500,
                keyframes: [
                    {
                        translateY: 20,
                        duration: 300
                    },
                    {
                        opacity: 1,
                        translateY: 0,
                        duration: 300,

                    }
                ],
            });

            child_shape_animation.add({
                targets: $(text_div).find('.desc')[0],
                easing: 'linear',
                delay: 200,
                keyframes: [
                    {
                        translateY: 20,
                        duration: 300
                    },
                    {
                        opacity: 1,
                        translateY: 0,
                        duration: 300,
                        delay: 100

                    }
                ],
            });

            //Variable auxiliar pa saber cual es el boton activo actual
            currentButton = clickedButton;
        }
    });

    //submit del contact form
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
});