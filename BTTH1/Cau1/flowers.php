<?php
    session_start();

    // Nếu danh sách hoa chưa tồn tại trong session, khởi tạo mảng hoa
    if (!isset($_SESSION['flowers'])) {
        $_SESSION['flowers'] = [
            ['name' => 'Hoa dạ yến thảo', 
            'description' => 'Dạ yến thảo là lựa chọn thích hợp cho những ai yêu thích trồng hoa làm đẹp nhà ở. Hoa có thể nở rực quanh năm, kể cả tiết trời se lạnh của mùa xuân hay cả những ngày nắng nóng cao điểm của mùa hè. Dạ yến thảo được trồng ở chậu treo nơi cửa sổ hay ban công, dáng hoa mềm mại, sắc màu đa dạng nên được yêu thích vô cùng.', 
            'img' => 'images/hoaDaYenThao.webp'],

            ['name' => 'Hoa đồng tiền', 
            'description' => 'Hoa đồng tiền thích hợp để trồng trong mùa xuân và đầu mùa hè, khi mà cường độ ánh sáng chưa quá mạnh. Cây có hoa to, nở rộ rực rỡ, lại khá dễ trồng và chăm sóc nên sẽ là lựa chọn thích hợp của bạn trong tiết trời này. Về mặt ý nghĩa, hoa đồng tiền cũng tượng trưng cho sự sung túc, tình yêu và hạnh phúc viên mãn.', 
            'img' => 'images/hoaDongTien.webp'],

            ['name' => 'Hoa giấy', 
            'description' => 'Hoa giấy có mặt ở hầu khắp mọi nơi trên đất nước ta, thích hợp với nhiều điều kiện sống khác nhau nên rất dễ trồng, không tốn quá nhiều công chăm sóc nhưng thành quả mang lại sẽ khiến bạn vô cùng hài lòng. Hoa giấy mỏng manh nhưng rất lâu tàn, với nhiều màu như trắng, xanh, đỏ, hồng, tím, vàng… cùng nhiều sắc độ khác nhau. Vào mùa khô hanh, hoa vẫn tươi sáng trên cây khiến ngôi nhà luôn luôn bừng sáng.', 
            'img' => 'images/hoaGiay.webp'],

            ['name' => 'Hoa thanh tú', 
            'description' => 'Mang dáng hình tao nhã, màu sắc thiên thanh dịu dàng của hoa thanh tú có thể khiến bạn cảm thấy vô cùng nhẹ nhàng khi nhìn ngắm. Cây khá dễ trồng, lại nở nhiều hoa cùng một lúc, từ một bụi nhỏ có thể đâm nhánh, tạo nên những cây con phát triển sum suê. Thanh tú trồng ở nơi có nắng sẽ ra hoa nhiều, vì thế thích hợp trong cả mùa xuân lẫn mùa hè, đem lại khoảng không gian xanh mát cho ngôi nhà ngày oi nóng.', 
            'img' => 'images/hoaThanhTu.webp'],

            ['name' => 'Hoa đèn lồng', 
            'description' => 'Giống như tên gọi, hoa đèn lồng có vẻ đẹp giống như chiếc đèn lồng đỏ trên cao. Nếu giàu trí tưởng tượng hơn, chúng ta sẽ hình dung hoa khi nụ đổ xuống thành từng chùm, kết năm kết ba như những thiếu nữ xúng xính trong chiếc đầm dạ hội. Hoa đèn lồng còn có tên là hồng đăng hoa, trồng trong chậu treo, bồn, phên dậu,… gieo hạt vào mùa xuân và cho hoa quanh năm.', 
            'img' => 'images/hoaDenLong.webp'],

            ['name' => 'Hoa cẩm chướng', 
            'description' => 'Cẩm chướng là loại hoa thích hợp trồng vào dịp xuân - hè, nếu tiết trời không quá lạnh có thể kéo dài đến tận mùa đông. Hoa có phần thân mảnh, các đốt ngắn mang lá kép cùng nhiều màu sắc như hồng, vàng, đỏ, tím,… thậm chí có thể pha lẫn màu để tạo nên đường viền xinh xắn. Đặt một chậu hoa cẩm chướng trên bàn sẽ khiến căn phòng của bạn đẹp mắt hơn rất nhiều.', 
            'img' => 'images/hoaCamChuong.webp'],

            ['name' => 'Hoa huỳnh anh', 
            'description' => 'Nếu bạn đang đi tìm một loài hoa tô điểm cho khu vực ban công hoặc hàng rào ngôi nhà thì huỳnh anh là một lựa chọn thích hợp trong mùa này hơn cả. Hoa có màu vàng rực, hình dạng như chiếc kèn be bé inh xinh, lại dễ trồng, mọc nhanh, vươn cao… Huỳnh Anh rất thích nắng, ánh nắng giúp hoa tỏa sáng rực rỡ, nếu ở nơi bóng râm thì chúng sẽ nhạt màu, kém sắc.', 
            'img' => 'images/hoaHuynhAnh.webp'],

            ['name' => 'Hoa Păng-xê', 
            'description' => 'Vào mỗi độ tháng 4 về là dịp mà loài hoa Phăng-xê nở rộ vô cùng đẹp mắt. Hoa còn được gọi tên là hay hoa bướm, hoa tử la lan, hoa tương tư,… Păng-xê thường được trồng trong chậu nhỏ, với phần cánh mỏng mượt như nhung, hình dạng cánh bướm mềm mại như đang tung tăng nhảy múa mỗi khi có làn gió thổi qua. Đây cũng là loài hoa tinh tế và sức sống bền bỉ.', 
            'img' => 'images/hoaPangXe.webp'],

            ['name' => 'Hoa sen', 
            'description' => 'Khi những tia nắng ấm áp của mùa hè bắt đầu xuất hiện thì cũng là lúc mùa sen lại về trên những cánh đồng bạt ngàn. Hoa sen tượng trưng cho vẻ đẹp trắng trong, tao nhã của tâm hồn. Hoa có thể được trồng trong chiếc ao vườn nhà, có thể được trồng trong chậu trang trí đều đẹp cả. Những bông hoa đẹp nở rộ như báo hiệu một mùa hè tuyệt đẹp hiện hữu trong ngôi nhà của bạn.', 
            'img' => 'images/hoaSen.webp'],

            ['name' => 'Hoa dừa cạn', 
            'description' => 'Hoa dừa cạn còn có các tên gọi như trường xuân hoa, dương giác, bông dừa, mỹ miều hơn thì là Hải Đằng. Hoa nở không ngừng từ mùa xuân sang mùa hè cho đến tận mùa thu. Hoa có 3 màu cơ bản là trắng, hồng nhạt và tím nhạt, lá và hoa cùng nhau vươn lên khiến cho khóm dừa cạn tuy nhỏ bé nhưng luôn tràn đầy sức sống. Loài hoa này còn tượng trưng cho sự thành đạt và có khả năng trừ tà.', 
            'img' => 'images/hoaDuaCan.webp'],

            ['name' => 'Hoa sử quân tử', 
            'description' => 'Sử quân tử là loài cây leo, hoa có cánh nhỏ xinh, màu hồng pha trắng hoặc đỏ tươi, mọc thành từng chùm khoe sắc trong nắng sớm, rung rinh trong gió. Hoa toát lên một vẻ đẹp vô cùng giản dị kèm theo mùi hương nồng đượm. Tuy nhẹ nhàng là thế nhưng sử quân tử lại có khả năng chịu được nắng nóng khắc nghiệt nên có thể trồng trong cả mùa hè.', 
            'img' => 'images/hoaSuQuanTu.webp'],

            ['name' => 'Cúc lá nho', 
            'description' => 'Cúc lá nho thuộc họ nhà Cúc, được biết đến với những bông hoa nhiều màu sắc phong phú, tươi sáng: nào là trắng, hồng cho đến tím, xanh dương,… và những chiếc lá to với hình dáng răng cưa độc đáo. Hạt cúc lá nho nảy mầm nhanh vào mùa xuân, nở hoa sang tận mùa hè lẫn mùa thu. Đây là loại hoa biểu trưng cho sự giàu có và trường thọ.', 
            'img' => 'images/cucLaNho.webp'],

            ['name' => 'Cẩm tú cầu', 
            'description' => 'Cẩm tú cầu là loại cây thường mọc thành bụi có hoa nở to thành từng chùm và đặc biệt thích hợp với mùa hè. Hoa ưa ánh nắng mặt trời từ bình minh cho đến khi lặn xuống mỗi chiều tà. Hoa có nhiều màu sắc như trắng, tím, hồng, xanh rất nhẹ nhàng. Hoa thích hợp trồng nơi sân vườn rộng rãi hoặc chậu nhỏ để trang trí nhà ở.', 
            'img' => 'images/camTuCau.webp'],

            ['name' => 'Hoa cúc dại', 
            'description' => 'Với phần thân mảnh mai nhưng luôn vươn lên mạnh mẽ, lại chịu được nhiệt độ cao, thậm chí là khi tiết trời hạn hán nên hoa cúc dại cực kỳ thích hợp trồng từ mùa xuân cho đến tận mùa hè nắng gắt. Hoa có màu trắng, hồng tươi sáng hay vàng cam nổi bật, không kiêu sa nhưng sức sống bền bỉ. Thậm chí khi hoa tàn, hạt rụng xuống đất lại tiếp tục phát triển vào mùa thu.', 
            'img' => 'images/hoaCucDai.webp']
        ];
    }
    
// Lấy danh sách hoa từ session
$flowers = $_SESSION['flowers'];

// Xử lý thêm hoa
if (isset($_POST['addFlower'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $description = htmlspecialchars(trim($_POST['description']));

    // Kiểm tra và xử lý upload file ảnh
    if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/'; // Thư mục lưu trữ ảnh
        $fileName = basename($_FILES['img']['name']);
        $targetFile = $uploadDir . time() . '_' . $fileName; // Thêm timestamp để tránh trùng tên file

        // Kiểm tra loại file và di chuyển file
        $allowedTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
        $fileType = mime_content_type($_FILES['img']['tmp_name']);
        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES['img']['tmp_name'], $targetFile)) {
                $img = $targetFile; // Đường dẫn ảnh được lưu
            } else {
                $img = null; // Nếu không upload được
            }
        } else {
            $img = null; // File không hợp lệ
        }
    } else {
        $img = null; // Nếu không có file upload
    }

    // Nếu các trường hợp hợp lệ, thêm hoa vào danh sách
    if ($name && $description && $img) {
        $flowers[] = [
            'name' => $name,
            'description' => $description,
            'img' => $img,
        ]; // Thêm hoa vào cuối mảng
        $_SESSION['flowers'] = $flowers; // Cập nhật lại session
    }
}

// Xử lý sửa hoa
if (isset($_POST['editFlower'])) {
    $index = intval($_POST['index']);
    $name = htmlspecialchars(trim($_POST['name']));
    $description = htmlspecialchars(trim($_POST['description']));

    // Kiểm tra chỉ số phần tử hợp lệ
    if (array_key_exists($index, $flowers)) {
        $img = $flowers[$index]['img']; // Ảnh cũ mặc định

        // Kiểm tra và xử lý upload file ảnh mới (nếu có)
        if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
            $uploadDir = 'uploads/';
            $fileName = basename($_FILES['img']['name']);
            $targetFile = $uploadDir . time() . '_' . $fileName;

            // Kiểm tra loại file và di chuyển file
            $allowedTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
            $fileType = mime_content_type($_FILES['img']['tmp_name']);
            if (in_array($fileType, $allowedTypes)) {
                if (move_uploaded_file($_FILES['img']['tmp_name'], $targetFile)) {
                    $img = $targetFile; // Lưu đường dẫn ảnh mới
                }
            }
        }

        // Cập nhật thông tin hoa
        $flowers[$index]['name'] = $name;
        $flowers[$index]['description'] = $description;
        $flowers[$index]['img'] = $img;
        $_SESSION['flowers'] = $flowers; // Cập nhật lại session
    }
}

// Xử lý xóa hoa
if (isset($_POST['deleteFlower'])) {
    $index = intval($_POST['index']);

    if (array_key_exists($index, $flowers)) {

        unset($flowers[$index]); // Xóa phần tử trong mảng
        $flowers = array_values($flowers); // Sắp xếp lại chỉ số
        $_SESSION['flowers'] = $flowers; // Cập nhật lại session
    }
}
 ?>