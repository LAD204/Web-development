<?php
    include('tmdt_csdl_connect.php');
    class sanpham extends csdl{
        public function xuatsanpham(){
            $result = $this->ketqua('select * from sanpham order by gia asc');
            while($row=mysqli_fetch_assoc($result)){
                echo '
                    <div class="product-card" >
                        <div class="tensp"><h6>'.$row['tensp'].'</h6></div>
                        <div class="hinh"><a href=""><img src="../storage/'.$row['hinh'].'" alt="'.$row['tensp'].'" srcset=""></a></div>
                        <div class="gia"><h6>'.$row['gia'].'</h6></div>
                    </div>
                ';
            }
        }
    } 
?>