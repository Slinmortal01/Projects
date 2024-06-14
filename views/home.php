<?php

use Project\Entity\Product;

define('PAGE_TITLE', 'Create Product');

require_once __DIR__ . '/header.php';

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
 /* Importação de fontes */
@import url('https://fonts.googleapis.com/css2?family=Alike+Angular&family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');
@import url('https://unpkg.com/modern-normalize');

/* Estilos gerais */
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    font-family: 'Istok Web', Arial, sans-serif;
}

a, a:visited {
    text-decoration: none;
    color: inherit;
}

footer {
    background-color: #2641CB;
    color: white;
    text-align: center;
    padding: 10px;
    width: 100%;
    margin-top: auto;
}

/* Estilos para home.php */
.main-home {
    flex: 1;
    padding: 20px;
    min-width: 20vh;
}

.home-title-container {
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

.home-title-container img {
    height: 10px;
    width: 70vh;
}

.home-title-container span {
    padding: 0 20px;
}

.home-form {
    font-family: 'Inria Sans', Arial, sans-serif;
    padding: 30px 40px;
    margin: 10px 50px;
    background-color: rgba(238, 238, 238, 0.705);
    border-radius: 8px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 8px;
}

.home-form label {
    margin-bottom: 2px;
    color: black;
}

.home-form input, .home-form textarea {
    width: 100%;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.home-form .home-enviar button {
    padding: 10px 15rem;
    border: none;
    background-color: #2641CB;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

.home-product-category-division {
    margin-top: 20px;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
}

.home-product-category-division img {
    height: 10px;
    width: 70vh;
}

.home-product-category-division span {
    padding: 0 20px;
}

.home-product-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    margin-top: 20px;
}

.home-product-card {
    background-color: #F4F1F1;
    border: 1px solid #cccccc17;
    border-radius: 8px;
    padding: 15px;
    width: 290px;
    min-height: 400px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.home-product-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
}

.home-productTitle-container {
    font-family: 'Inria Sans', Arial, sans-serif;
}

.home-productTitle-container .starImg {
    width: 20px;
    height: 20px;
}

.home-stars-container {
    display: flex;
    gap: 5px;
}

.home-product-card h3 {
    font-size: 1.2em;
    margin: 0;
}

.home-product-card p {
    margin: 5px 0;
    color: #555;
}

.home-price-container p {
    color: black;
    font-size: 30px;
    font-family: 'Alike Angular', Arial, sans-serif;
}

/* Media Queries for home.php */
@media (max-width: 1024px) {
    .home-form {
        grid-template-columns: 1fr;
        margin: 20px;
    }
    .home-form .home-enviar button {
        padding: 10px 5rem;
    }
}

@media (max-width: 768px) {
    .home-title-container img, .home-product-category-division img {
        width: 50vh;
    }
    .home-product-card {
        max-width: 290px;
    }
    .home-form {
        padding: 0;
        margin: 0;
    }
}

@media (max-width: 480px) {
    .home-title-container img, .home-product-category-division img {
        width: 30vh;
    }
    .home-form .home-enviar button {
        padding: 10px 3rem;
    }
    .home-price-container p {
        font-size: 1.5em;
    }
}

@media (max-width: 320px) {
    .home-title-container img, .home-product-category-division img {
        width: 20vh;
    }
    .home-form {
        margin: 10px;
        padding: 20px;
        grid-template-columns: 1fr;
    }
    .home-form .home-enviar button {
        padding: 10px 2rem;
    }
}

/* Estilos para login.php */
.main-login {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30vh;
    padding: 8vh 0;
    background-image: url('../images/fundo_pag_cadastro.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.login-image-container {
    display: flex;
    justify-content: center;
}

.login-image-container img {
    width: 60vh;
}

.login-register-container {
    background-color: #2641CB;
    padding: 15px 50px 25px 50px;
    border-radius: 15px;
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-size: 20px;
}

.login-register-container h1 {
    font-size: 40px;
    padding-bottom: 40px;
}

.login-register-container form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    max-width: 400px;
    width: 100%;
}

.login-register-container label {
    margin-bottom: 5px;
}

.login-register-container input[type="email"],
.login-register-container input[type="password"] {
    padding: 10px;
    border-radius: 3px;
    border: 1px solid #ccc;
    width: 100%;
}

.login-remember span {
    display: flex;
}

.login-register-container .login-remember {
    display: flex;
    align-items: center;
    gap: 5px;
}

.login-register-container button {
    padding: 10px;
    border: none;
    border-radius: 3px;
    background-color: #ffffff;
    color: #2641CB;
    cursor: pointer;
    width: 100%;
}

.login-register-container a {
    color: white;
    text-decoration: none;
    margin-top: 10px;
}

.login-orOptions {
    padding: 15px 0;
    display: flex;
    align-items: center;
}

.login-orOptions img {
    height: 10px;
    width: 13vh;
    filter: invert(100%) brightness(200%);
}

.login-orOptions span {
    padding: 0 20px;
}

.login-options {
    display: flex;
    justify-content: space-between;
    gap: 60px;
}

.login-options img {
    width: 35px;
}

.login-options div {
    background-color: #ffffff;
    display: flex;
    align-items: center;
    padding-right: 20px;
    font-size: 20px;
    font-weight: bold;
    border-radius: 2px;
}

.login-options span {
    color: #2641CB;
    text-align: center;
    margin-left: 10px;
}

.login-options a {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 5px 0;
}

/* Media Queries para login.php */
@media (max-width: 1336px) {
    .login-image-container {
        display: none;
    }
}

@media (max-width: 480px) {
    .login-register-container form {
        width: 90%;
    }
}

@media (max-width: 460px) {
    .login-register-container {
        padding: 15px 30px 25px 30px;
    }
}

@media (max-width: 400px) {
    .login-register-container {
        padding: 15px 10px 25px 10px;
        font-size: 17px;
    }
    .login-register-container h1 {
        font-size: 30px;
    }
}

@media (max-width: 322px) {
    .login-register-container {
        padding: 15px 5px 23px 5px;
        font-size: 10px;
        border-radius: 0px;
    }
    .login-register-container form {
            width: 80%;
    }
    .login-options div {
        padding: 0;
        margin: 0;
    }
}

.main-register {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    flex-grow: 1;
    padding: 8vh 0;
    background-image: url('../images/fundo_pag_cadastro.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.register-form {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #2641CB;
    padding: 20px 70px;
    border-radius: 10px;
    color: #ffffff;
    max-width: 60vh;
    width: 100%;
    font-size: 18px;
}

.register-form h1 {
    padding-bottom: 20px;
}

.register-form label, .register-form input, .register-form button {
    text-decoration: none;
}

.register-form label {
    display: block;
}

.register-form input, .register-form button {
    display: block;
}

.register-form input[type="radio"] {
    display: inline-block;
}

.register-form .register-form-row {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    width: 100%;
    gap: 20px;
}

.register-form label {
    margin-bottom: 3px;
}

.register-form .register-form-row-name {
    display: flex;
    flex-direction: column;
    margin-bottom: 10px;
    width: 100%;
}

.register-form .register-form-row #name,
.register-form .register-form-row #uf,
.register-form .register-form-row #district,
.register-form .register-form-row #complement,
.register-form .register-form-row #number,
.register-form .register-form-row div {
    width: 100%;
}

.register-form .register-form-row-radio {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    width: 100%;
    gap: 5px;
}

.register-form .register-form-row-radio label {
    padding-right: 15px;
}

.register-form button {
    font-size: 20px;
    font-weight: bold;
    color: #2641CB;
    padding: 6px 30px;
    border: 1px solid #ffffff;
    border-radius: 8px;
    cursor: pointer;
    width: 100%;
    max-width: 300px;
}

.register-form img {
    height: 10px;
    width: 100%;
    filter: invert(100%) brightness(200%);
}

/* Media Queries para register.php */
@media (max-width: 768px) {
    .register-form {
        padding: 20px 30px;
        max-width: 90vw;
    }
    .register-form .register-form-row div {
        width: 100%;
    }
    .register-form button {
        max-width: 100%;
    }
}

@media (max-width: 480px) {
    .register-form {
        padding: 15px 20px;
        max-width: 95vw;
    }
    .register-form .register-form-row {
        flex-direction: column;
        align-items: flex-start;
        gap: 5px;
    }
    .register-form .register-form-row div {
        width: 100%;
    }
    .register-form button {
        max-width: 100%;
    }
}

/* Estilos para catalogue.php */
.main-catalogue {
    flex: 1;
    min-width: 20vh;
    margin: 20px 70px;
}

.catalogue-banner-container {
    width: 100%;
    display: flex;
    justify-content: center;
    margin: 20px;
}

.catalogue-banner-container img {
    width: 110vh;
    height: auto;
}

.catalogue-product-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    margin: 70px 80px 20px 80px;
}

.catalogue-product-card {
    background-color: #F4F1F1;
    border: 1px solid #cccccc17;
    border-radius: 8px;
    padding: 15px;
    width: 290px;
    min-height: 400px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.catalogue-product-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
}

.catalogue-productTitle-container {
    font-family: 'Inria Sans', Arial, sans-serif;
}

.catalogue-productTitle-container .starImg {
    width: 20px;
    height: 20px;
}

.catalogue-stars-container {
    display: flex;
    gap: 5px;
}

.catalogue-product-card h3 {
    font-size: 1.2em;
    margin: 0;
}

.catalogue-product-card p {
    margin: 5px 0;
    color: #555;
}

.catalogue-price-container p {
    color: black;
    font-size: 30px;
    font-family: 'Alike Angular', Arial, sans-serif;
}

.purchaseAction {
  display: flex;
  gap: 95px;
  align-items: center;
}

.purchaseBtn img {
  width: 37px;
  height: 37px;
  cursor: pointer;
  border: none;
  vertical-align: middle;
  transition: transform 0.2s ease-in-out;
}

.purchaseBtn {
    border: none;
    background: none; 
    padding: 0;
    cursor: pointer; 
    transition: transform 0.2s ease-in-out;
}

.purchaseBtn:hover {
    transform: scale(1.1);
}

.purchaseBtn:hover img {
    transform: scale(1.1);
}


/* Media Queries para catalogue.php */
@media (max-width: 871px) {
    .catalogue-banner-container img {
        width: 100%;
        height: auto;
    }
}

@media (max-width: 640px) {
    .catalogue-banner-container img {
        display: none;
    }
    .catalogue-product-card {
        max-width: 290px;
    }
    .catalogue-product-list {
        margin: 0;
    }
    .main-catalogue {
        margin: 0;
        padding: 0;
    }
}

/* Estilos para orderdetails.php */
.main-orderdetails {
    flex: 1;
}

.orderdetails-progress-container {
    margin: 40px 80px 20px 80px;
}

.orderdetails-images-container {
    display: flex;
    justify-content: space-around;
}

.orderdetails-checkLine {
    display: flex;
    justify-content: space-around;
    margin: 5px;
    position: relative;
}

.orderdetails-checkItem {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: 5px;
    position: relative;
}

.orderdetails-checkLine img {
    width: 30px;
}

.orderdetails-checkLine::after {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    height: 2px;
    background-color: #ccc;
}

.grid-container {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 2px;
    background-color: #f2f2f2;
    margin-bottom: 20px;
    margin-top: 20px;
}

.grid-item {
    padding: 10px;
    text-align: center;
    border: 1px solid #ccc;
    background-color: #fff;
    cursor: pointer;
}

.grid-item:nth-child(odd) {
    background-color: #f9f9f9;
}

.grid-header {
    font-weight: bold;
}


/* Media Queries para orderdetails.php */
@media (max-width: 768px) {
    .orderdetails-images-container {
        flex-direction: column;
        align-items: center;
    }
    .orderdetails-checkLine {
        flex-direction: column;
        align-items: center;
    }
    .orderdetails-checkItem {
        margin: 10px 0;
    }
    .orderdetails-checkLine img {
        margin-bottom: 10px;
    }
}

/* Estilos para cart.php */

.cart-container-main {
  margin-top: 40px;
  display: flex;
  flex-wrap: 1;
}

.cart-container {
  max-width: 1000px;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ccc;
  background-color: #f9f9f9;
}

.grid-container-cart {
  display: grid;
  grid-template-columns: 1fr 2fr 4fr 1fr 1fr 2fr; /* Ajuste das colunas para incluir botões */
  gap: 2px;
  background-color: #f2f2f2;
  margin-bottom: 20px;
  margin-top: 20px;
}

.grid-item-cart {
  padding: 10px;
  text-align: center;
  border: 1px solid #ccc;
  background-color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
}

.grid-item-cart:nth-child(odd) {
  background-color: #f9f9f9;
}

.grid-header-cart {
  font-weight: bold;
  display: flex;
  align-items: center;
  justify-content: center;
}

.cart-actions {
  display: flex;
  justify-content: flex-end;
  margin-top: 20px;
}

.cart-actions button {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
  font-size: 16px;
  border-radius: 4px;
}

.cart-actions button:hover {
  background-color: #45a049;
}

.actions-buttons {
  display: flex;
  gap: 5px;
  justify-content: center;
}

.btn-update, .btn-delete {
  padding: 5px 13px;
  color: white;
  border: none;
  cursor: pointer;
  font-size: 13px;
  border-radius: 4px;
  text-decoration: none;
}

.btn-update {
  background-color: #2641cbc5;
}

.btn-update:hover {
  background-color: #112cb4c5;
}

.btn-delete {
  background-color: rgba(238, 5, 5, 0.767);
}

.btn-delete:hover {
  background-color: rgba(212, 6, 6, 0.767);
}

/* Estilos para header e footer */

header {
    background-color: #2641CB;
    padding: 5px 20px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    width: 100%;
    z-index: 1000;
    padding-left: 55px;
    padding-right: 55px;
}

.logo {
    margin-top: 10px;
}

.logo img {
    width: 100px;
    cursor: pointer;
}

.search {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
}

.search input {
    width: 80%;
    padding: 8px 10px;
    border-radius: 10px;
    border: none;
    outline: none;
}

.search button {
    background: none;
    border: none;
    cursor: pointer;
    margin-right: 7px;
}

.search img {
    width: 38px;
}

.cart {
    display: flex;
    align-items: center;
}

.cart img {
    width: 38px;
    margin: 5px;
}

@media (max-width: 500px) {
    header .search {
        display: none;
    }
}

@media (max-width: 480px) {
    header {
        padding: 10px;
        display: flex;
        flex-direction: column;
    }

    .cart {
        padding-bottom: 20px;
    }
}

/* Estilos para footer.php */
footer {
    width: 100%;
    height: 48px;
    background-color: #2641CB;
    padding: 10px;
}
    </style>
</head>

<body>
    <main class="main-home">
        <div class="home-title-container">
            <img src="images/minus-big-symbol.png" alt=""><span></span>
            <h1>Cadastre seu produto</h1>
            <span></span><img src="images/minus-big-symbol.png" alt="">
        </div>

        <form class="home-form" action="index.php?action=create_product" method="post">
            <label>Nome do produto:</label>
            <input type="text" name="product_name" required>
            <label>Preço do produto:</label>
            <input type="number" name="product_price" required>
            <label>Quantidade do produto:</label>
            <input type="number" name="product_quantity" required>
            <label>Imagem do produto:</label>
            <input type="file" name="product_image" accept="image/*" required>
            <label>Descrição do produto:</label>
            <textarea id="produto_descricao" name="product_description" rows="4" required></textarea>
            <div class="home-enviar">
                <button type="submit">Enviar</button>
            </div>
        </form>

        <div class="home-product-category-division">
            <img src="images/minus-big-symbol.png" alt=""><span></span>
            <h2>Produtos Adicionados</h2>
            <span></span><img src="images/minus-big-symbol.png" alt="">
        </div>

        <div class="home-product-list">
            <?php foreach ($products as $product) : ?>
                <div class="home-product-card">
                    <img src="images/2.jpg" alt="Product Image">
                    <div class="home-productTitle-container">
                        <h3><?= $product->product_name() ?>,
                    <a><?= $product->product_description() ?></a></h3>
                        <div class="home-stars-container">
                            <img src="images/star.png" alt="star-rate" class="starImg">
                            <img src="images/star.png" alt="star-rate" class="starImg">
                            <img src="images/star.png" alt="star-rate" class="starImg">
                            <img src="images/star.png" alt="star-rate" class="starImg">
                            <img src="images/star.png" alt="star-rate" class="starImg">
                            <p>5.0</p>
                        </div>
                    </div>
                    <div class="home-price-container">
                        <p><?= "$" . $product->product_price() ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>


<?php

require_once __DIR__ . '/footer.php';

?>
