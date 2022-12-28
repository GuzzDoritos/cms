'use strict';

const interruptor = document.getElementById('interruptor');

interruptor.addEventListener('click', function() {
    document.body.classList.toggle('darktheme');
    document.body.classList.toggle('lighttheme');

    const className = document.body.className;
    if(className == "lighttheme") {
        this.textContent = "Dark";
    } else {
        this.textContent = "Light";
    }

    console.log("current theme: " + className);
});
