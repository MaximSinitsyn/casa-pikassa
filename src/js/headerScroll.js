module.exports = (cont, el, cssClass, mod) => {
    let visibleHeader = (el, element) => {
        if (element.scrollTop > 20) {
            el.classList.add(cssClass);
        } else {
            el.classList.remove(cssClass);
        }
    };

    let container = document.getElementsByClassName(cont)[0];
    
    container.onscroll = function() {
        el.forEach(cl => {
            let elem = document.querySelector(cl);
    
            if (elem) {
                visibleHeader(elem, container);
            }
        })   
    };
};
