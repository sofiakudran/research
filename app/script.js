function getRandomDiscount() {
    return Math.floor(Math.random() * (30 - 10 + 1)) + 10;
}

function showDiscountAlert() {
    let discount = getRandomDiscount();
    alert("Вам надано знижку " + discount + "%!");
}

function moveText() {
    let container = document.getElementsByClassName('slide')[0];
    let texts = document.getElementsByClassName('text');
    let containerWidth = container.offsetWidth;

    for (let i = 0; i < texts.length; i++) {
        let text = texts[i];
        let textWidth = text.offsetWidth;
        let textLeft = parseInt(text.style.left) || 0;

        textLeft--;

        if (textLeft <= -textWidth) {
            textLeft = containerWidth;
        }

        text.style.left = textLeft + 'px';
    }

    requestAnimationFrame(moveText);
}

moveText();