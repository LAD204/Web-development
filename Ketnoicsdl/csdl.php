<?php
    class csdl
    {
        private function connect()
        {
            $con = mysqli_connect('localhost', 'Ledung', '123456');
            if(!$con)
            {
                echo 'Lỗi kết nối csdl';
                exit();
            }
            else
            {
                mysqli_select_db($con,'sinhvien_db');
                mysqli_query($con,"SET NAMES UTF8");
                return $con;
            }
        }
        public function xuatsinhvien(string $sql)
        {
            $link = $this->connect();
            $ketqua = mysqli_query($link,$sql);
            $i = mysqli_num_rows($ketqua);
            if($i>0)
            {
                echo '<table width="1000" border="1" align="center" cellpadding="3" cellspacing="0">
                        <tr>
                            <td width="70" align="center" valign="middle">STT</td>
                            <td width="180" align="center" valign="middle">MASV</td>
                            <td width="347" align="center" valign="middle">HỌ ĐỆM</td>
                            <td width="169" align="center" valign="middle">TÊN</td>
                            <td width="192" align="center" valign="middle">LỚP</td>
                        </tr>';
                $dem = 1;
                while ($row = mysqli_fetch_array($ketqua))
                {
                    $id = $row['id'];
                    $masv = $row['masv'];
                    $hodem = $row['hodem'];
                    $ten = $row['ten'];
                    $lop = $row['lop'];
                    echo '<tr>
                            <td align="center" valign="middle">'.$id.'</td>
                            <td align="center" valign="middle">'.$masv.'</td>
                            <td align="center" valign="middle">'.$hodem.'</td>
                            <td align="center" valign="middle">'.$ten.'</td>
                            <td align="center" valign="middle">'.$lop.'</td>
                        </tr>';
                        $dem++;
                }
                echo '</table>';
            }
            else
            {
                echo'Không có dữ liệu';
            }
            mysqli_close($link);
        }
    }
?>