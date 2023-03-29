let $ = jQuery.noConflict();

(function() {

  var quotes = $(".quotes");
  var quoteIndex = -1;

  function showNextQuote() {
    ++quoteIndex;
    quotes.eq(quoteIndex % quotes.length)
      .fadeIn(450)
      .delay(450)
      .fadeOut(450, showNextQuote);
  }

  showNextQuote();

})
();