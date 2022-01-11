const btnToggle = document.querySelector('.btn-toggle');

btnToggle.addEventListener('click', () => {
    const body = document.body;
    if(body.classList.contains('dark')){
        body.classList.add('light')
        body.classList.remove('dark')
        btnToggle.innerHTML = "dark"

    }else if(body.classList.container('light')){
    body.classList.add('dark')
        body.classList.remove('light')
        btnToggle.innerHTML = "light"
    }
})