<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<?php
include "db.php";

class product
    {

    public  $id;
    public $productName;
    public $price;
    public $description;
    public $category;

    /**
     * product constructor.
     * @param $productName
     * @param $price
     * @param $description
     * @param $category
     */
    public function __construct($id, $productName, $price, $description, $category)
    {
        $this->id = $id;
        $this->productName = $productName;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
    }




            /**
             * @nsreturn mixed
             */
            public function getId()
            {
                    return $this->id;
            }

            /**
             * @param mixed $id
             */
            public function setId($id)
            {
                $this->id = $id;
            }



               // $sql="delete from productInfo where id=".$this->getId();


            public function deleteProduc($sql)
            {
                $delete=new db();
                if (mysqli_query($delete->cc(), $sql)) {
                    echo "<div class='container'><p class='alert alert-success'>The product has been deleted</p></div>";
                    header("Location: ReadProducts.php");


                }
                else {
                    echo "Error deleting record: " . mysqli_error($delete->cc());
                }
            }
            public function UpdateProduct($sql)
            {
                $upd = new db();

                if ($upd->cc()->query($sql)===TRUE) {
                    echo "<div class='container'><p class='alert alert-success'>The product has been updated</p></div>";
                    header("Location: ReadProducts.php");

                } else {
                    echo "Error updating record: " . $upd->cc()->error;
                }
            }


            public function insert($sql)
            {
                  $ins= new db();
                  if (mysqli_query($ins->cc(), $sql))
                  {
                        echo "<div class='container'><p class='alert alert-success'>New record created successfully</p></div>";
                  }
                  else
                  {
                        echo "<div class='container'>Error: " . $sql . "<br></div>" . mysqli_error();
                  }
            }
    }




?>

