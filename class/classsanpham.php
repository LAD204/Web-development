<?php
    include_once('tmdt_csdl_connect.php');
    class sanpham extends csdl{
        public function xuatsanpham(){
            $result = $this->ketqua('select * from sanpham order by gia asc');
            while($row=mysqli_fetch_assoc($result)){
                echo '
                    <div class="product-card" >
                        <div class="tensp"><h6>'.$row['tensp'].'</h6></div>
                        <div class="hinh"><a href="../Bai 6/chitietsanpham.php?idsp='.$row['idsp'].'&idcty='.$row['idcty'].'"><img src="../storage/'.$row['hinh'].'" alt="'.$row['tensp'].'" srcset=""></a></div>
                        <div class="gia"><h6>Giá: '.$row['gia'].'$</h6></div>
                    </div>
                ';
            }
        }

        public function chiTietSanPham(int $idsp, int $idcty){
            $result = $this->ketqua("select * from sanpham where idsp = '$idsp'");
            $idcongty = $this->ketqua("select * from congty where idcty = '$idcty'");
            $row_congty = mysqli_fetch_assoc($idcongty);
            $row = mysqli_fetch_assoc($result);
            echo '
                <div class="chitietsanpham">
                    <div class="anhminhhoa"><img src="../storage/'.$row['hinh'].'" alt=""></div>
                    <div class="motasanpham">
                        <form action="" method="post">
                            <table>
                                <tr>
                                    <td>
                                        <strong>'.$row['tensp'].'</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Công ty: </strong>'.$row_congty['tencty'].'
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Mô tả: </strong>'.$row['mota'].'
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Giá: </strong>'.$row['gia'].'
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for=""><strong>Số lượng: </strong></label>
                                        <input type="number" name="soluong" min="1" max = "'.$row['soluong'].'" id="" value="1" style="width: 50px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="order" value="Đặt hàng">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="trangchu.php" style="text-decoration: none;">Quay lại danh sach</a>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>

            ';
        }

        public function xuatDanhSachSanPhamTheoCty(string $idcty){
            $result = $this->ketqua("select * from sanpham where idcty = '$idcty'");
            if($result->num_rows > 0){
                while($row=mysqli_fetch_assoc($result)){
                    echo '
                        <div class="product-card" >
                            <div class="tensp"><h6>'.$row['tensp'].'</h6></div>
                            <div class="hinh"><a href="../Bai 6/chitietsanpham.php?idsp='.$row['idsp'].'&idcty='.$row['idcty'].'"><img src="../storage/'.$row['hinh'].'" alt="'.$row['tensp'].'" srcset=""></a></div>
                            <div class="gia"><h6>Giá: '.$row['gia'].'$</h6></div>
                        </div>
                    ';
                }
            }
            else{
                echo '<span align="center">Không tìm thấy sản phẩm</span>';
            }
        }
    } 
?>