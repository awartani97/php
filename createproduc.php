    <htmal>
        <head>
            <STYLE>
                th {
                    font-weight: bold;
                }
            </STYLE>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <title>Create product</title>
        </head>
        <body>
            <div class="container">
                <h1>Create product</h1><hr>
                <input type="button" class="btn btn-primary" onclick="location.href='ReadProducts.php'" style="float:right" value="Read Products" id="createproduct"> <br><br>
                <table  class="table table-bordered">
                    <form method="post" action="createproduct.php">
                    <tr>
                        <th>Product</th>
                        <td> <input type="text" class="form-control" name="product" act > </td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td> <input type="text" class="form-control" name="price"> </td
                    </tr>
                    <tr>
                        <th> Description</th>
                        <td> <textarea class="form-control" name="Description"></textarea> </td
                    </tr>
                    <tr>
                        <th> Category</th>
                        <td> <select class="form-control" name="Category">
                                <option>Electronics</option>
                                <option>Fashion</option>
                                <option>Motors</option>
                            </select></td>
                    </tr>

                        <tr>
                            <th></th>
                            <td> <input type="submit" value="Create" class="btn btn-primary" name="productt"> </td
                        </tr>

                    </form>
                </table>
            </div>
        </body>
    </htmal>


    <?php


        if(isset($_POST['product'])){
            require "product.php";
            $dn = new product('', $_POST['product'], $_POST['price'], $_POST['Description'], $_POST['Category']);
            $sql = "INSERT INTO productInfo( `productName`, `price`, `description`, `category`) VALUES ('" . $dn->productName . "','" . $dn->price . "','" . $dn->description . "','" . $dn->category . "')";
            $dn->insert($sql);
        }
    ?>
