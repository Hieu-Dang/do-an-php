<!DOCTYPE html>
<html>
<head>
    <title>Thanh toán</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">


*{
    font-family: arial;
}
  

 #body-page{
        width: 100%;
        height: 800px;
        top: 0px;
     }
        
     #body-page a{
        text-decoration: none;
        color: black;
 min-height: 100px;        
     }

    #center-body{
        width: 65%;
       
        margin: auto;
    }
        img{
            width: 60px;
            height: 60px;
        }
        a{
            text-decoration: none;
            color: black;

        }
        #pay-area{
            width: 45%;
            height: 300px;
            margin-right: 5%;
            float: left;
        }
        .pay-method{
            height: 30px;
            margin-top: 5px; 
            background-color: #d8d1d1;
            text-align: center;
        }
        .pay-method:hover{
            border: 1px solid orange;
        }

        #pay-confirm{
            height: 60px;
            margin-top: 10px;
            background-color: #d8d1d1;
            text-align: center;

        }
        #pay-confirm:hover{
            background-color: #231f20;
            color: white;
        }

        #cart-area{
            float: left;
            background-color: #efefef;
            width: 50%;
        }
        #cen-main-cart{
            width: 80%;
            margin-top: 40px;
            margin-right: 30px;
            margin-left: 30px;
            margin-bottom: 30px;
            background-color: #ffff;
            text-align: center;
        }

        #product-name{
            font-size: 20px;
           font-weight: bold;
        }
        #product-name:hover{
        color: #8470FF;
    }
     #cen-main-price{
            width: 80%;
            margin-top: 40px;
            margin-right: 30px;
            margin-left: 30px;
            margin-bottom: 30px;
            background-color: #ffff;
            text-align: center;
        }
        #select-amount{
            margin: auto;
        }
      #all-price{
        font-size: 25px;
      }
    

    </style>
</head>
<body>

  <?php
  include_once('header.php');
  ?>

<div id="body-page">
  <div id="center-body">

        <h1 class="jumbotron-heading">Giỏ hàng</h1>
        <?php if(isset($_SESSION['cart'])){ 
             // var_dump($_SESSION['cart']); ?>


    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">

                        <thead>
                            <tr>
                                <th scope="col"> </th>
                                <th scope="col">Sản phẩm</th>
                                <th scope="col" class="text-center">Số lượng</th>
                                <th scope="col" class="text-right">Thành tiền</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                              <?php $i = 0; foreach ($_SESSION['cart'] as $value) { ?>
                            <tr>
                                <td><img src="../img/<?php echo $value['image'];?>  "></td>
                                <td><a id="product-name" href="index.php?method=details&id=<?php echo $value['id']?>"><?=$value['name']?></a></td>

                                <td> <table id="select-amount" border="0.5" cellspacing="0" cellpadding="2">
                                <tr>
                             <td><a href="?method=sub&id=<?php echo $value['id'] ?>">-</a></td>
                            <td colspan="2"><?php echo $value['sl'] ?></td>
                                  <td><a href="?method=add&id=<?php echo $value['id'] ?>">+</a></td>
                                 </tr> 
                            </table>
                             </td>
                                <td class="text-right"><?php echo number_format($value['price']*$value['sl']) ?>đ</td>
                                <td class="text-right"><a href="?method=delete-cart&id=<?php echo $value['id'] ?>"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></a></td>
                            </tr>
                             <?php } ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Sub-Total</td>
                                <td class="text-right"> <?php
                                    $total = 0;
                                    foreach ($_SESSION['cart'] as $value ) { 
                                        $total+= ($value['price']*$value['sl']);
                                    }?>
                                    <?php echo number_format($total)?>đ</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Phí giao hàng</td>
                                <td class="text-right"><?php
                                         echo number_format($ship=30000);
                                ?>đ</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Tổng cộng</strong></td>
                                <td class="text-right"><strong><?php
                            $all_price = $total + $ship;
                            ?>
                            <p id="all-price"><?php echo  number_format($all_price);?>
                        đ</strong></td>
                            </tr>
                       
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="index.php?method=home"><button class="btn btn-block btn-light">Tiếp tục mua sắm</button></a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                       <a href=""><button class="btn btn-lg btn-block btn-success text-uppercase">Thanh toán</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php } ?>
</div>

</div>
 <?php
  include_once('footer.php'); 
  ?>

   
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>