jQuery.fn.getTitle=function(){var i=jQuery("a.fancybox");jQuery.each(i,function(){var i=jQuery(this).children("img").attr("title");jQuery(this).attr("title",i)})};var thumbnails=jQuery("a:has(img)").not(".nolightbox").filter(function(){return/\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr("href"))}),posts=jQuery(".item-images");posts.each(function(){jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+posts.index(this)).getTitle()}),jQuery("a.fancybox").fancybox({helpers:{overlay:{locked:!1}}}),$(".main-slider").slick({dots:!1,infinite:!0,speed:300,slidesToShow:1,autoplay:!0,autoplaySpeed:7e3}),$(".partners-slider").slick({dots:!1,infinite:!0,speed:300,slidesToShow:4,slidesToScroll:1,autoplay:!0,autoplaySpeed:7e3});
//# sourceMappingURL=script-min.js.map