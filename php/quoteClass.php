<?php

class QuoteCard {
  private $qoute;
  private $author;

  public function __construct($quote, $author) {
    
    $this -> $quote = $quote;
    $this -> $author = $author;
  }

  public function renderQuoteCard($quote, $author) {
    return "
      <blockquote class='blockquote text-center text-white'>
        <p class='quote-text'>{$this -> $quote}</p>
        <p class='quote-author'>—{$this -> $author}</p>
      </blockquote>
    ";
  }
}
