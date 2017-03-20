$( document ).ready(function() {
  
  $('.btn').each(function () {

    $(this).click(function (e) {

      var url = $(this).attr("href");

      e.preventDefault();

      $.magnificPopup.open({
        items: {
          src: $(this).attr('href'),
          type: 'iframe'
         }
      });
    });
  });

});
