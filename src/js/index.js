
let vid = document.getElementById("video");
if (vid) {
    vid.oncanplaythrough = function() {
        setTimeout(function(){
            vid.parentElement.classList.add('head__videoWrapper_ready');
        }, 800)
        
    };
}


require('./headerScroll')('body__container', ['.mainMenu', '.header'], 'scroll');

$('.sliderGroupLinks__item').click(function() {
    $(this).closest('.sliderGroupLinks').find('.sliderGroupLinks__item').removeClass('sliderGroupLinks__item_active');
    $(this).addClass('sliderGroupLinks__item_active');
});


$('.sliderBlock .arrows__arrow').click(function() {
    let __self = this
    let idSlideshow = $(this).closest('.sliderBlock').children('[uk-slideshow]').attr('id')
    let idSlider = $(this).closest('.sliderBlock').children('[uk-slider]').attr('id')
    let index
    let newIndex

    UIkit.util.on('#' + idSlideshow, 'itemshow', function () {
        index =  UIkit.slideshow('#' + idSlideshow).index

        $(__self).closest('.sliderBlock').find('.sliderGroupLinks__item').removeClass('sliderGroupLinks__item_active')
        $(__self).closest('.sliderBlock').find('.sliderGroupLinks__li:nth-child(' + (index + 1) + ') .sliderGroupLinks__item').addClass('sliderGroupLinks__item_active')   

        newIndex = $(__self).closest('.sliderBlock').find('.sliderGroupLinks__item').index($('.sliderGroupLinks__item_active'))

        if (newIndex < 1) {
            $('#' + idSlider + ' .sliderNav__arrow_left').addClass('uk-invisible')
        } else {
            $('#' + idSlider + ' .sliderNav__arrow_left').removeClass('uk-invisible')
        }
    
        console.log($('#' + idSlider + ' .sliderGroupLinks__item').length - 2 + ' == ' + (newIndex + 1))
    
        if ($('#' + idSlider + ' .sliderGroupLinks__item').length - 2 < newIndex) {
            $('#' + idSlider + ' .sliderNav__arrow_right').addClass('uk-invisible')
        } else {
            $('#' + idSlider + ' .sliderNav__arrow_right').removeClass('uk-invisible')
        }
    });
});

$('.sliderBlock .sliderNav__arrow_right').click(function() {
    let __self = this
    let idSlideshow = $(this).closest('.sliderBlock').children('[uk-slideshow]').attr('id')
    let idSlider = $(this).closest('.sliderBlock').children('[uk-slider]').attr('id')
    let index

    let newSliderIndex = UIkit.slider('#' + idSlider).index + 1
    UIkit.slider('#' + idSlider).show(newSliderIndex)

    let currentIndex = $('#' + idSlider + ' .sliderGroupLinks__item').index($('.sliderGroupLinks__item_active'))

    $(__self).closest('.sliderBlock').find('.sliderGroupLinks__item').removeClass('sliderGroupLinks__item_active')
    $(__self).closest('.sliderBlock').find('.sliderGroupLinks__li:nth-child(' + (currentIndex + 2) + ') .sliderGroupLinks__item').addClass('sliderGroupLinks__item_active')   

    let newIndex = $('#' + idSlider + ' .sliderGroupLinks__item').index($('.sliderGroupLinks__item_active'))

    if (newIndex < 1) {
        $('#' + idSlider + ' .sliderNav__arrow_left').addClass('uk-invisible')
    } else {
        $('#' + idSlider + ' .sliderNav__arrow_left').removeClass('uk-invisible')
    }

    if ($('#' + idSlider + ' .sliderGroupLinks__item').length - 1 == currentIndex + 1) {
        $('#' + idSlider + ' .sliderNav__arrow_right').addClass('uk-invisible')
    } else {
        $('#' + idSlider + ' .sliderNav__arrow_right').removeClass('uk-invisible')
    }

    UIkit.slideshow('#' + idSlideshow).show(newIndex)
});

$('.sliderBlock .sliderNav__arrow_left').click(function() {
    let __self = this
    let idSlideshow = $(this).closest('.sliderBlock').children('[uk-slideshow]').attr('id')
    let idSlider = $(this).closest('.sliderBlock').children('[uk-slider]').attr('id')
    let index

    let newSliderIndex = UIkit.slider('#' + idSlider).index - 1
    UIkit.slider('#' + idSlider).show(newSliderIndex)

    let currentIndex = $('#' + idSlider + ' .sliderGroupLinks__item').index($('.sliderGroupLinks__item_active'))

    $(__self).closest('.sliderBlock').find('.sliderGroupLinks__item').removeClass('sliderGroupLinks__item_active')
    $(__self).closest('.sliderBlock').find('.sliderGroupLinks__li:nth-child(' + (currentIndex) + ') .sliderGroupLinks__item').addClass('sliderGroupLinks__item_active')   

    let newIndex = $('#' + idSlider + ' .sliderGroupLinks__item').index($('.sliderGroupLinks__item_active'))

    if (newIndex < 1) {
        $('#' + idSlider + ' .sliderNav__arrow_left').addClass('uk-invisible')
    } else {
        $('#' + idSlider + ' .sliderNav__arrow_left').removeClass('uk-invisible')
    }

    if ($('#' + idSlider + ' .sliderGroupLinks__item').length - 1 == currentIndex + 1) {
        $('#' + idSlider + ' .sliderNav__arrow_right').addClass('uk-invisible')
    } else {
        $('#' + idSlider + ' .sliderNav__arrow_right').removeClass('uk-invisible')
    }

    UIkit.slideshow('#' + idSlideshow).show(newIndex)
});

// $('.sliderBlock .arrows__arrow').click(function() {
//     let idSlider = $(this).closest('.sliderBlock').children('[uk-slider]').attr('id')

//     let newIndex = $('#' + idSlider + ' .sliderGroupLinks__item').index($('.sliderGroupLinks__item_active'))

//     if (newIndex < 1) {
//         $('#' + idSlider + ' .sliderNav__arrow_left').addClass('uk-invisible')
//     } else {
//         $('#' + idSlider + ' .sliderNav__arrow_left').removeClass('uk-invisible')
//     }

//     if ($('#' + idSlider + ' .sliderGroupLinks__item').length - 1 == currentIndex + 1) {
//         $('#' + idSlider + ' .sliderNav__arrow_right').addClass('uk-invisible')
//     } else {
//         $('#' + idSlider + ' .sliderNav__arrow_right').removeClass('uk-invisible')
//     }
// });

UIkit.util.on('.counter', 'inview', function () {
    $(this).children('.counter__circle').circleProgress({
		value: 1,
		  size: 230,
		  lineCap: 'round',
		  thickness: 25,
		  emptyFill: '#250E10',
		  fill: {
			color: '#EDA942'
		  }
	}).on('circle-animation-progress', function(event, progress) {
		  $(this).find('strong').html(Math.round(parseInt(this.dataset.progress, 10) * progress));
	});
});

$('.floor__hover-item').hover(
    function(e) {
        let elmAttr = $(e.target).attr('data-id-hover')
        let elmHoverBack = $(e.target).closest('.floor').find('[data-id-hover-back=' + elmAttr + ']')[0]
        $(elmHoverBack).addClass('floor__hover-back-item_hovered')
    },
    function(e) {
        $(e.target).closest('.floor').find('.floor__hover-back-item').removeClass('floor__hover-back-item_hovered')
    }
)

$('.floor__hover-item').click(function(e) {
    let elmAttr = $(e.target).attr('data-id-hover')
    let elmHoverBack = $(e.target).closest('.floor').find('[data-id-hover-back=' + elmAttr + ']')[0]

    $('.floor__hover-back-item').removeClass('floor__hover-back-item_active')
    $(elmHoverBack).addClass('floor__hover-back-item_active')

    $('.floorBlock__infoBlockContent').removeClass('floorBlock__infoBlockContent_active')
    $('.floorBlock__infoBlock #' + elmAttr).addClass('floorBlock__infoBlockContent_active')
})
