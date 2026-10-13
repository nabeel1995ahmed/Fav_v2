(() => {
  if (typeof jQuery === "undefined" || !jQuery.fn.slick) return;

  jQuery(function ($) {
    const $gallery = $(".ne-gallery-slider");
    if (!$gallery.length) return;

    $gallery.slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3200,
      dots: false,
      arrows: true,
      prevArrow:
        '<button type="button" class="ne-gallery-arrow ne-gallery-prev" aria-label="Previous"><i class="fal fa-angle-left"></i></button>',
      nextArrow:
        '<button type="button" class="ne-gallery-arrow ne-gallery-next" aria-label="Next"><i class="fal fa-angle-right"></i></button>',
      responsive: [
        {
          breakpoint: 1200,
          settings: { slidesToShow: 3 },
        },
        {
          breakpoint: 992,
          settings: { slidesToShow: 2 },
        },
        {
          breakpoint: 576,
          settings: { slidesToShow: 1 },
        },
      ],
    });
  });
})();
