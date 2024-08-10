<?php 
  require './php/quoteClass.php';
  require './php/quotes.php';
?>

<div id="carouselExampleSlidesOnly" class="carousel slide quotes-carousel carousel-fade mb-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <?php
        $card1 = new QuoteCard($quotes[0][0], $quotes[0][1]); echo $card1 -> renderQuoteCard($quotes[0][0], $quotes[0][1])
      ?>
    </div>
    <div class="carousel-item">
      <?php
        $card2 = new QuoteCard($quotes[1][0], $quotes[1][1]); echo $card2 -> renderQuoteCard($quotes[1][0], $quotes[1][1])
      ?>
    </div>
    <div class="carousel-item">
      <?php
        $card3 = new QuoteCard($quotes[2][0], $quotes[2][1]); echo $card3 -> renderQuoteCard($quotes[2][0], $quotes[2][1])
      ?>
    </div>
    <div class="carousel-item">
      <?php
        $card4 = new QuoteCard($quotes[3][0], $quotes[3][1]); echo $card4 -> renderQuoteCard($quotes[3][0], $quotes[3][1])
      ?>
    </div>
    <div class="carousel-item">
      <?php
        $card5 = new QuoteCard($quotes[4][0], $quotes[4][1]); echo $card5 -> renderQuoteCard($quotes[4][0], $quotes[4][1])
      ?>
    </div>
    <div class="carousel-item">
      <?php
        $card6 = new QuoteCard($quotes[5][0], $quotes[5][1]); echo $card6 -> renderQuoteCard($quotes[5][0], $quotes[5][1])
      ?>
    </div>
    <div class="carousel-item">
      <?php
        $card7 = new QuoteCard($quotes[6][0], $quotes[6][1]); echo $card7 -> renderQuoteCard($quotes[6][0], $quotes[6][1])
      ?>
    </div>
    <div class="carousel-item">
      <?php
        $card8 = new QuoteCard($quotes[7][0], $quotes[7][1]); echo $card8 -> renderQuoteCard($quotes[7][0], $quotes[7][1])
      ?>
    </div>
    <div class="carousel-item">
      <?php
        $card9 = new QuoteCard($quotes[8][0], $quotes[8][1]); echo $card9 -> renderQuoteCard($quotes[8][0], $quotes[8][1])
      ?>
    </div>
    <div class="carousel-item">
      <?php
        $card10 = new QuoteCard($quotes[9][0], $quotes[9][1]); echo $card10 -> renderQuoteCard($quotes[9][0], $quotes[9][1])
      ?>
    </div>
  </div>
</div>