
    <htmal>
        <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $('#f1').click(function(){
                        var txt;
                        alert;
                        if (confirm("Are you sure you wont to delete product?")) {

                        } else {
                            location.href="ReadProducts.php";
                        };

                    });
                });
                xmlhttp=new XMLHttpRequest();
            </script>
            <STYLE>

            th{
                font-weight: bold;
            }
            </STYLE>


            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <title>Read Product</title>
        </head>
        <body>

            <div class="container">
                <h1>Read produ</h1><hr>
               <div> <input type="button" class="btn btn-primary" onclick="location.href='createproduct.php'"value="create product" style="float:right" id="createproduct"><p> </p>
                   <input type="button" class="btn btn-danger" onclick="location.href=''"value=" Delete selected" style="float:right" id="createproduct"> <br><br></div>
                    <table  class="table table-bordered">
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th> Description</th>
                            <th> Category</th>
                            <th> Actions</th>
                        </tr>
                        <?php

                            require "product.php";
                                $sql="SELECT * FROM `productInfo`";
                                $dd=new db();

                                    if ($result=mysqli_query($dd->cc(),$sql))
                                    {
                                        // Fetch one and one row
                                        while ($row=mysqli_fetch_row($result))
                                        {

                                            $viw=new product($row[0], $row[1],$row[2],$row[3],$row[4]);
                                          ;
                                            echo "<th>".$viw->productName."</th>";
                                            echo "<th>".$viw->price."</th>";
                                            echo "<th>".$viw->description."</th>";
                                            echo "<th>".$viw->category."</th>";

                                            echo "<th><div class=''>
                                                            <input type='button'  onclick=location.href='readonlyproduct.php?product_id=".$row[0]."' value='Read'class='btn btn-primary'> 
                                                            <input type='button'  onclick=location.href='updateProduct.php?product_id=".$row[0]."' value='Edit' class='btn btn-info'>
                                                            <input type='button' id='f1' onclick=location.href='delete.php?product_id=".$row[0]."' value='Delete'class='btn btn-danger'>
                                                            
                                                        </div></th></tr>";
                                        }
                                        // Free result set
                                        mysqli_free_result($result);
                                    }



                        ?>
                    </table>
            </div>
        </body>
    </htmal>

