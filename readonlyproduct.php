    <htmal>
        <head>
            <STYLE>

                th{
                    font-weight: bold;
                }
            </STYLE>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <title>Read Only Products</title>
        </head>
        <body>
        <div class="container">
            <h1>Read Only Products</h1><hr>
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
                        {

                            $viw=new product('',$row[1],$row[2],$row[3],$row[4]);
                            echo "<tr>   <th>Product</th><td>".$viw->productName."</td></tr>";
                            echo "<tr>   <th>Price</th><td>".$viw->price."</td></tr>";
                            echo "<tr>   <th>Description</th><td>".$viw->description."</td></tr>";
                            echo "<tr>   <th>Category</th><td>".$viw->category."</td></tr>";

                        }
                        // Free result set
                        mysqli_free_result($result);
                    }?>
            </table>
        </div>
        </body>
    </htmal>
