$(window).on("load", function () {
  const elem = document.querySelector('.masonry');
  new Masonry(elem, {
    itemSelector: '.masonry-item',
    columnWidth: 200,
    gutter: 20,
    columnWidth: ".masonry-sizer",
    percentPosition: true
  });
  $(".btn-to-top").click(function() {
    $("html", "body").animate(
      {
        scrollTop: 0,
      },
      1500,
      "easeInOutExpo"
    );
  });
  AOS.init();

  const portfolioIsotope = $(".portfolio-container").isotope({
    itemSelector: ".portfolio-item",
  });

  $(".portfolio-filter li").click(function () {
    $(".portfolio-filter li").removeClass("filter-active");
    $(".portfolio-filter li").removeClass("text-white");
    $(this).addClass("filter-active");
    $(this).addClass("text-white");

    portfolioIsotope.isotope({
      filter: $(this).data("filter"),
    });
    AOS.init();
  });
});

