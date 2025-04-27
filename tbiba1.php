<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>
    <link rel="stylesheet" href="css/tbiba11.css">
    <style>
        .container {
            display: none;
        }

        .container:first-of-type {
            display: flex;
        }

        .products {
            display: none;
        }

        .products.active {
            display: flex;
        }

        .old-buttons {
            display: none;
        }

        .old-buttons.show-old-buttons {
            display: block;
        }
    </style>
</head>
<body>
    <form class="container container1">
        <div class="sidebar">
            <h2>Filtrer par type</h2>
            <button type="button" class="toggle-old-buttons">Day 1</button>
            <div class="old-buttons">
                <button type="button" class="filter-btn" data-target="Breakfast">Breakfast</button>
                <button type="button" class="filter-btn" data-target="Lunch">Lunch</button>
                <button type="button" class="filter-btn" data-target="Dinner">Dinner</button>
            </div>
            <button type="button" class="next-btn">Next</button>
        </div>

        <div class="products Breakfast">
            <label class="product">
                <input type="radio" name="productType1" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>

        <div class="products Lunch">
            <label class="product">
                <input type="radio" name="productType1" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>

        <div class="products Dinner">
            <label class="product">
                <input type="radio" name="productType1" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>
    </form>

    <form class="container container2">
        <div class="sidebar">
            <h2>Filtrer par type</h2>
            <button type="button" class="toggle-old-buttons">Day 2</button>
            <div class="old-buttons">
                <button type="button" class="filter-btn" data-target="Breakfast">Breakfast</button>
                <button type="button" class="filter-btn" data-target="Lunch">Lunch</button>
                <button type="button" class="filter-btn" data-target="Dinner">Dinner</button>
            </div>
            <button type="button" class="next-btn">Next</button>
        </div>

        <div class="products Breakfast">
            <label class="product">
                <input type="radio" name="productType2" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>

        <div class="products Lunch">
            <label class="product">
                <input type="radio" name="productType2" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>

        <div class="products Dinner">
            <label class="product">
                <input type="radio" name="productType2" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>
    </form>

    <form class="container container3">
        <div class="sidebar">
            <h2>Filtrer par type</h2>
            <button type="button" class="toggle-old-buttons">Day 3</button>
            <div class="old-buttons">
                <button type="button" class="filter-btn" data-target="Breakfast">Breakfast</button>
                <button type="button" class="filter-btn" data-target="Lunch">Lunch</button>
                <button type="button" class="filter-btn" data-target="Dinner">Dinner</button>
            </div>
            <button type="button" class="next-btn">Next</button>
        </div>

        <div class="products Breakfast">
            <label class="product">
                <input type="radio" name="productType3" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>

        <div class="products Lunch">
            <label class="product">
                <input type="radio" name="productType3" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>

        <div class="products Dinner">
            <label class="product">
                <input type="radio" name="productType3" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>
    </form>

    <form class="container container4">
        <div class="sidebar">
            <h2>Filtrer par type</h2>
            <button type="button" class="toggle-old-buttons">Day 4</button>
            <div class="old-buttons">
                <button type="button" class="filter-btn" data-target="Breakfast">Breakfast</button>
                <button type="button" class="filter-btn" data-target="Lunch">Lunch</button>
                <button type="button" class="filter-btn" data-target="Dinner">Dinner</button>
            </div>
            <button type="button" class="next-btn">Next</button>
        </div>

        <div class="products Breakfast">
            
            <label class="product">
                <input type="radio" name="productType1" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>

        <div class="products Lunch">
            
            <label class="product">
                <input type="radio" name="productType1" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>

        <div class="products Dinner">
            
            <label class="product">
                <input type="radio" name="productType1" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>
    </form>
    <form class="container container5">
        <div class="sidebar">
            <h2>Filtrer par type</h2>
            <button type="button" class="toggle-old-buttons">Day 5</button>
            <div class="old-buttons">
                <button type="button" class="filter-btn" data-target="Breakfast">Breakfast</button>
                <button type="button" class="filter-btn" data-target="Lunch">Lunch</button>
                <button type="button" class="filter-btn" data-target="Dinner">Dinner</button>
            </div>
            <button type="button" class="next-btn">Next</button>
        </div>

        <div class="products Breakfast">
            <label class="product">
                <input type="radio" name="productType1" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>

        <div class="products Lunch">
            
            <label class="product">
                <input type="radio" name="productType1" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>

        <div class="products Dinner">
            
            <label class="product">
                <input type="radio" name="productType1" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>
    </form>
    <form class="container container6">
        <div class="sidebar">
            <h2>Filtrer par type</h2>
            <button type="button" class="toggle-old-buttons">Day 6</button>
            <div class="old-buttons">
                <button type="button" class="filter-btn" data-target="Breakfast">Breakfast</button>
                <button type="button" class="filter-btn" data-target="Lunch">Lunch</button>
                <button type="button" class="filter-btn" data-target="Dinner">Dinner</button>
            </div>
            <button type="button" class="next-btn">Next</button>
        </div>

        <div class="products Breakfast">

            <label class="product">
                <input type="radio" name="productType1" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>

        <div class="products Lunch">

            <label class="product">
                <input type="radio" name="productType1" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>

        <div class="products Dinner">

            <label class="product">
                <input type="radio" name="productType1" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>
    </form>
    <form class="container container7">
        <div class="sidebar">
            <h2>Filtrer par type</h2>
            <button type="button" class="toggle-old-buttons">Day 7</button>
            <div class="old-buttons">
                <button type="button" class="filter-btn" data-target="Breakfast">Breakfast</button>
                <button type="button" class="filter-btn" data-target="Lunch">Lunch</button>
                <button type="button" class="filter-btn" data-target="Dinner">Dinner</button>
            </div>
            <button type="button" class="next-btn">Send</button>
        </div>

        <div class="products Breakfast">

            <label class="product">
                <input type="radio" name="productType1" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>

        <div class="products Lunch">
            <label class="product">
                <input type="radio" name="productType1" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>

        <div class="products Dinner">
            <label class="product">
                <input type="radio" name="productType1" value="product1" />
                <figure>
                    <img src="img/pic1.jpg" class="image-products" />
                    <figcaption class="discover-caption">
                        <p class="discover-title mb-0">Product Name 1</p>
                        <div class="info1">
                            <div><h4>Type:</h4><span>190</span></div>
                            <div><h4>Calories:</h4><span>190</span></div>
                            <div><h4>Protein:</h4><span>190</span></div>
                            <div><h4>Carbs:</h4><span>190</span></div>
                        </div>
                    </figcaption>
                </figure>
            </label>
            <!-- Ajoutez d'autres produits ici -->
        </div>
    </form>

    <script src="js/tbiba11.js"></script>
</body>
</html>
