    <htmal>
        <head>
            <STYLE>

                th{
                    font-weight: bold;
                }
            </STYLE>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <title>Update Products</title>
        </head>
            <body>
                <div class="container">
                    <h1>Update product</h1><hr>
                    <input type="button" class="btn btn-primary" onclick="location.href='ReadProducts.php'" style="float:right" value="Read Products" id="createproduct"> <br><br>
                    <table  class="table table-bordered">






                    <?php
                        /**
                         * Created by PhpStorm.
                         * User: mohammad
                         * Date: 26/07/18
                         * Time: 02:46 م
                         */
                        require "product.php";

                        $productId = $_GET['product_id'];
                        $sql="SELECT * FROM `productInfo` where id = " . $productId;
                        $dd=new db();

                        if ($result=mysqli_query($dd->cc(),$sql))
                        {
                            // Fetch one and one row
                            while ($row=mysqli_fetch_row($result))
                            {      $viw=new product($row[0], $row[1], $row[2], $row[3], $row[4]);
                            ?>
                        <form method="post" action="updateProduct.php?product_id=<?php echo $viw->id;?>"><tr>   <th>Product</th><td><input type='text' class='form-control' value='<?php echo $viw->productName;?>'  name='product'></td></tr>
                            <tr>
                                <th>Price</th><td><input type='text' class='form-control' value='<?php echo $viw->price;?>'name='price'></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td><input type='text' class='form-control' value='<?php echo $viw->description;?>' name='Description'></td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>
                                    <select class="form-control" name="Category">
                                        <option ><?php echo $viw->category;?></option>
                                        <option>Electronics</option>
                                        <option>Fashion</option>
                                        <option >Motors</option
                                    </select>
                                </td>
                            </tr>

                            <tr>

                                <th></th>
                                <td> <input type="submit" value="Update" class="btn btn-primary" name="product_submit"> </td
                            </tr>
                        </form>

                      <?php  }
                        // Free result set
                            mysqli_free_result($result);

                        }

                         if(isset($_POST['product_submit'])) {
                             $sql = "UPDATE productInfo set productName='" . $_POST['product'] . "',Price=" . $_POST['price'] . ",description='" . $_POST['Description'] . "',category='" . $_POST['Category'] . "' where id=".$productId;
                             $viw->UpdateProduct($sql);
                         }
                      ?>
                    </table>
                </div>
        </body>
    </htmal>


