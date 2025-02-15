const searchBar = document.getElementById('search-bar');
const books = document.querySelectorAll('.book');
const errorMessage = document.querySelector('.error-message');

searchBar.addEventListener('keyup', (e) => {
    const searchString = e.target.value.trim().toLowerCase();
    let foundBooks = false;
    
    books.forEach(book => {
        const title = book.getAttribute('data-title').toLowerCase();
        
        if (title.includes(searchString)) {
            book.style.display = '';
            foundBooks = true;
        } else {
            book.style.display = 'none';
        }
    });

    if (!foundBooks) {
        errorMessage.style.display = 'block';
    } else {
        errorMessage.style.display = 'none';
    }
});
