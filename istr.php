<!doctype html>
<html lang="ru">
<head>




    <meta charset="utf-8">
    <title>iPhone</title>
  
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>

<style type="text/css">


body {
    font-family: Ubuntu;
}


/* Каталог товаров */

.good-item {
    margin: 10px 0;
    padding: 20px;
    border: solid 1px gray;
    border-radius: 3px;
}

.good-item__id {
    padding-top: 30px;
    color: steelblue;
}

.good-item__name {
    padding-top: 10px;
    font-size: 1.1em;
}

.good-item__price {
    padding-top: 10px;
    color: red;
}

.good-item__btn-add {
    margin-top: 30px;
}


/* Каталог товаров с фильтрами*/

.small-good-item {
    border: solid 1px gray;
    padding: 5px;
    margin-top: 3px;
    list-style: none;
    border-radius: 2px;
}

.small-good-item__img {
    max-width: 60%;
}

.small-good-item__name {
    color: steelblue;
}

.small-good-item__price {
    color: red;
}



/* Корзина */

.cart-item__btn-dec-count {
    margin-right: 10px;
    cursor: pointer;
}

.cart-item__btn-inc-count {
    margin-left: 10px;
    cursor: pointer;
}

.cart-item__btn-remove {
    cursor: pointer;
}


/* Сравнение товаров */

.compare-table th {
    text-align: center;
}

.compare-table th:first-child {
    text-align: left;
    vertical-align: middle;
}

.compare-table__good {
    font-size: 1.1em;
    color: steelblue;
}

.compare-table__photo {
    max-width: 150px;
}

.compare-table__price {
    color: red;
}

.compare-table__remove {
    color: steelblue;
    cursor: pointer;
    font-size: 0.8em;
    font-weight: normal;
    margin-top: 10px;
    text-decoration: underline;
}

.compare-table tbody tr td:first-child {
    font-weight: bold;
}


.compare-table[data-compare="all"] tbody tr {
     display: table-row;
}

.compare-table[data-compare="equal"] tbody tr:not(.-equal) {
    display: none;
}

.compare-table[data-compare="not-equal"] tbody tr.-equal {
    display: none;
}

</style>

<body data-page="catalog">
    <div class="container">
        
    
        <br />
        <br />
        <br />
        <ul class="nav nav-pills">
            <li class="active"><a href="/">Каталог</a></li>
           
            <li><a href="cart.php">Корзина<span id="total-cart-count" class="badge"></span></a></li>
            <li><a href="order.php">Оформление заказа</a></li>
        </ul>
        <br />
        <ul id="goods" class="list-unstyled">
            <img src="img/loading.gif" alt="" />
        </ul>
    </div>


  <TABLE WIDTH="100%" border="00" align=center CELLSPACING="20" spacing="0" bordercolor=""  >
    <tr>
    <script id="catalog-template" type="text/template">
        <% _.each(goods, function(good) { 
      
        %>
           
            <li class="good-item row">
                <div class="col-md-4">
                    <img class="good-item__img" src="<%- good.img %>" />
                </div>
                
                <div class="col-md-8">
                    <div class="good-item__id">Артикул <%= good.id %></div>
                    <div class="good-item__name"><%- good.name %></div>
                    <div class="good-item__price"><%= good.price %> руб.</div>
                    <button 
                        class="good-item__btn-add btn btn-info btn-sm js-add-to-cart"
                        data-id="<%= good.id %>"
                        data-name="<%- good.name %>"
                        data-price="<%= good.price %>"
                    >Добавить в корзину</button>
                </div>
            </li>

        <% }); %>
    </script>

    <script src="js/vendor/jquery.min.js" type="text/javascript"></script>
    <script src="js/vendor/jquery.cookie.js" type="text/javascript"></script>
    <script src="js/vendor/underscore.min.js" type="text/javascript"></script>
    <script src="js/modules/catalog.js" type="text/javascript"></script>
    <script src="js/modules/cart.js" type="text/javascript"></script>
    <script src="js/modules/compare.js" type="text/javascript"></script>
    <script src="js/modules/main.js" type="text/javascript"></script>
</body>
</html>