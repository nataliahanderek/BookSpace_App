const search = document.querySelector('input[placeholder="Search..."]');
const booksContainer = document.querySelector(".my-books");

search.addEventListener("keyup", function (event){

    if(event.key === "Enter") {
        event.preventDefault();

        const data = {search: this.value};

        fetch("/search", {
            method: "POST",
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify(data)
        }).then(function (response) {
            console.log(response.json());
            return response.json();
        }).then(function (books) {
            booksContainer.innerHTML = "";
            loadBooks(books);
        });
    }
});

function loadBooks(books) {
    console.log(JSON.stringify(books));
    books.forEach(book => {
        console.log(book);
        createBook(book);
    })
}

function createBook(book) {
    const template = document.querySelector("#book-template");
    const clone = template.content.cloneNode(true);
    /*const div = clone.querySelector("div");
    div.id = book.id;*/

    const bookcover = clone.querySelector("img");
    bookcover.src = '/public/img/uploads/${book.bookcover}';

    const title_eng = clone.querySelector("h2");
    title_eng.innerHTML = book.title_eng;

    const author_surname = clone.querySelector("h3");
    author_surname.innerHTML = book.author_surname;

    booksContainer.appendChild(clone);
}

function logout() {
    document.getElementById("logout").submit();
}