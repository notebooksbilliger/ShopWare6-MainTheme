window.addEventListener('load', (event) => {
    document.querySelectorAll('form.buy-widget button.btn-buy').forEach(element =>
        element.removeAttribute('disabled'));
});
