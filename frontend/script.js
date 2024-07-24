fetch('http://inordic.alexweber.ru/api/goods/get.php').then((response) => {
    return response.json()
}).then((response) => {
    const root = document.querySelector('.product-list')
    response.forEach((good) => {
        root.innerHTML += `
            <li>
                <img src="./img/goods/${good.img}.png" alt="${good.title}">
                <h2>${good.title}</h2>
                <div class='button-container'>
                    <button>Купить</button>
                </div>
            </li>
        `
    })
})

