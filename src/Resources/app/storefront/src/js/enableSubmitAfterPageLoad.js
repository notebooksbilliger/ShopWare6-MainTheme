window.addEventListener('load', () => {
    document.querySelectorAll('form.buy-widget button.btn-buy').forEach(element =>
        element.removeAttribute('disabled'));
});
