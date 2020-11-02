(function(winn, doc) {
    'use strict';

    function confirmDeleteBook(event) {
        event.preventDefault();
        if (confirm('Tem certeza quie deseja excluir produto ?')) {
            handleDeleteBook();
        } else {
            return false;
        }
    }
    
    if (doc.querySelector('.deleteProduct')) {
        let btnDelete = doc.querySelectorAll('.deleteProduct');
        for (let i = 0; i < btnDelete.length; i++) {
            btnDelete[i].addEventListener('click', confirmDeleteBook, false);
        }
    }

    function handleDeleteBook() {
        let token = doc.getElementsByName("_token")[0].value;
        let ajax = new XMLHttpRequest();
        ajax.open('DELETE', event.target.parentNode.href);
        ajax.setRequestHeader('X-CSRF-TOKEN', token);
        ajax.addEventListener('readystatechange', isReady, false);
        winn.location.href = 'market';
        ajax.send();
    }

    function isReady() {
        return this.readyState === 4 && this.status === 200;
    }

}) (window, document);