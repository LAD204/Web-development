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
                for ($i = 1; $i < $result->num_rows; $i ++){
                    $row = mysqli_fetch_array($result);
                    echo '
                        <tr align="center">
                            <td align="center">
                                '.$i.'
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
                return 0;
            }
        }

        public function thucthisql(string $sql){
            $link = $this->connect();
            if($link->query($sql)){
                return 1;
            }
            else{
                return 0;
            }
        }
    }

?>