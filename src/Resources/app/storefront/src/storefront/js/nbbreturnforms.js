const manufacturerSupportFormElementsCount = 3;
const productDetailsFormElementsCount = 5;
const manufacturerSupportFormClassName = 'manufacturer_support_form';
const productDetailsFormClassName = 'product_details_form';
const otherProductsKeyword = 'others';
const displayNone = 'd-none';

function showManufacturersSelect(divId) {
    document.getElementById(divId).classList.remove(displayNone);
}

function showProductsSelect(divId) {
    document.getElementsByClassName(divId)[0].classList.remove(displayNone);
}

function selectProductForm(element, displayProductDetails = false) {
    if (element.value === otherProductsKeyword || displayProductDetails === true) {
        elementsVisibility(productDetailsFormClassName, true, productDetailsFormElementsCount);
        document.getElementsByClassName(manufacturerSupportFormClassName).length > 0
            ? elementsVisibility(manufacturerSupportFormClassName, false, manufacturerSupportFormElementsCount)
            : null;
    } else {
        elementsVisibility(manufacturerSupportFormClassName, true, manufacturerSupportFormElementsCount);
        document.getElementsByClassName(productDetailsFormClassName).length > 0
            ? elementsVisibility(productDetailsFormClassName, false, productDetailsFormElementsCount)
            : null;
    }
}

function elementsVisibility(divClass, visible, elementsCount) {
    for (let i = 0; i < elementsCount; i++) {
        if (visible === true) {
            document.getElementsByClassName(divClass)[i].classList.remove(displayNone);
        } else {
            document.getElementsByClassName(divClass)[i].classList.add(displayNone);
        }
    }
}
