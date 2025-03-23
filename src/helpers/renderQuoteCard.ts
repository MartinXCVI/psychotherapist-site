export const renderQuoteCard = (quote: string, author: string) => {
  return `
    <blockquote class="blockquote text-center text-white">
      <p class="quote-text">${quote}</p>
      <p class="quote-author">—${author}</p>
    </blockquote>
  `
}