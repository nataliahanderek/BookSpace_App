const addBookButton = document.querySelector(".add-remove-button");
const idDiv = document.querySelector(".add-or-remove");
const id = idDiv.getAttribute("id");

function addBookToBookshelf() {
    fetch(`/addbook/${id}`).then(function () {
        console.log("dziaa");
    })
}

addBookButton.addEventListener("click", addBookToBookshelf);