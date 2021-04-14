
    var autoplaySlider = $('#bestLists').lightSlider({
        auto:true,
        loop:true,
        pauseOnHover: true,
                responsive : [
            {
                breakpoint:800,
                settings: {
                    item:2,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:600,
                settings: {
                    item:1,
                    slideMove: 1,
                    controls: false,
                    pager: true,
                  }
            }
        ]
    });