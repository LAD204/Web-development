<?php
    class csdl{
        private function connect(){
            $con = mysqli_connect('localhost', 'root', '', 'tmdt_db');
            if(!$con){
                echo 'Không thể kết nối';
                exit();
            }
            else{
                $con->query("set names 'utf8'");
                return $con;
            }
        }

        public function xuatdanhsach(string $sql){
            $link = $this->connect();
            $result = mysqli_query($link, $sql);
            if($result->num_rows > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo '
                        <tr align="center">
                            <td align="center">
                                '.$row['idcty'].'
                            </td>
                            <td align="center">
                                '.$row['tencty'].'
                            </td>
                            <td align="center">
                                '.$row['diachi'].'
                            </td>
                            <td align="center">
                                '.$row['dienthoai'].'
                            </td>
                            <td align="center">
                                '.$row['fax'].'
                            </td> 
                        </tr>
                    ';
                }
            }
        }

        public function ketqua(string $sql){
            $link = $this->connect();
            $result = $link->query($sql);
            if($result->num_rows>0){
                return $result;
            }
            else{
                echo 'Không khả dụng';
            }
        }
    }

?>