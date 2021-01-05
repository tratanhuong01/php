<?php 
    function getTTChiTiet($idDongSanPham) {
        $arr = array();
		try {
			$conn = getConnection();
			$query = "SELECT * FROM motachitiet INNER JOIN dongsanpham 
            ON motachitiet.IDDongSanPham = dongsanpham.IDDongSanPham 
            WHERE motachitiet.IDDongSanPham = '".$idDongSanPham."'";
			$stm = $conn->prepare($query);
			$stm->execute();
			$arr = $stm->fetchAll(PDO::FETCH_ASSOC);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		return $arr;
    } 
?>
        <?php $arr = getTTChiTiet($_SESSION['iddongsanpham']); ?>
        
        <div class="wrappers">
            <div class="width">
                <img src="images/images-product/<?= $_SESSION['anhsanpham'] ?>" alt="">
            </div>
            <p class="name">Màn hình</p>
            <table class="parameterfull">
                <tr>
                    <td>Độ phân giải</td>
                    <td><?= $arr[0]['DoPhanGiai'] ?></td>
                </tr>
                <tr>
                    <td>Màn hình rộng</td>
                    <td><?= $arr[0]['ManHinhRong'] ?></td>
                </tr>
            </table>
            <p class="name">Camera</p>
            <table class="parameterfull">
                <tr>
                    <td>Camera trưóc</td>
                    <td>1 Camera</td>
                </tr>
                <tr>
                    <td>Độ phân giải</td>
                    <td><?= $arr[0]['CameraTruoc'] ?></td>
                </tr>
                <tr>
                    <td>Camera sau</td>
                    <td><?= explode("@",$arr[0]['CameraSau'])[0] ?></td>
                </tr>
                <tr>
                    <td>Độ phân giải</td>
                    <td><?= explode("@",$arr[0]['CameraSau'])[1] ?></td>
                </tr>
            </table>
            <p class="name">Bộ Nhớ Và Lưu Trữ</p>
            <table class="parameterfull">
                <tr>
                    <td>Bộ Nhớ</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Thẻ Nhớ Ngoài</td>
                    <td><?= $arr[0]['TheNho'] ?></td>
                </tr>
                <tr>
                    <td>RAM</td>
                    <td><?= $arr[0]['RAM'] ?></td>
                </tr>
            </table>
            <p class="name">Kết Nối</p>
            <table class="parameterfull">
                <tr>
                    <td>Mạng Di Động</td>
                    <td><?= $arr[0]['MangDiDong'] == 0 ? "Có" : "Không" ?></td>
                </tr>
                <tr>
                    <td>SIM</td>
                    <td><?= $arr[0]['WIFI'] == 0 ? "Có" : "Không" ?></td>
                </tr>
                <tr>
                    <td>Wifi</td>
                    <td><?= $arr[0]['WIFI'] == 0 ? "Có" : "Không" ?></td>
                </tr>
                <tr>
                    <td>GPS</td>
                    <td><?= $arr[0]['GPS'] == 0 ? "Có" : "Không" ?></td>
                </tr>
                <tr>
                    <td>Bluetool</td>
                    <td> <td><?= $arr[0]['BLUETOOL'] == 0 ? "Có" : "Không" ?></td></td>
                </tr>
            </table>
            <p class="name">Pin Và Sạc</p>
            <table class="parameterfull">
                <tr>
                    <td>Dung Lượng Pin</td>
                    <td> <td><?= $arr[0]['DungLuongPin'] == 0 ? "Có" : "Không" ?></td></td>
                </tr>
            </table>
        </div>
    <?php unset($_SESSION['iddongsanpham']); unset($_SESSION['anhsanpham']); ?>