
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- เชื่อมโยงกับ CSS ของ Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>ข้อมูลผู้ส่งและผู้รับจดหมาย</title>
    <style>
        /* กำหนดรูปแบบสำหรับพื้นหลังของหน้า */
        body {
            background-color: #DFFF00; /* สีพื้นหลังที่อ่อนเพื่อความตัดกัน */
        }
        /* กำหนดรูปแบบสำหรับคอนเทนเนอร์ของฟอร์ม */
        .container {
            background-color: white; /* สีพื้นหลังของฟอร์ม */
            border-radius: 10px; /* ขอบมน */
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1); /* เงา */
            padding: 20px; /* ระยะห่างภายใน */
            margin-top: px; /* ระยะห่างด้านบน */
        }
        /* กำหนดสีของหัวข้อ */
        h2 {
            color: #6495ED; /* สีหลักของ Bootstrap */
        }
        /* กำหนดสีปุ่มเมื่อมีการคลิก */
        .btn-primary {
            background-color: #ff0000; /* สีหลักของ Bootstrap */
            border: none; /* ไม่มีกรอบ */
        }
        /* กำหนดสีของปุ่มเมื่อชี้เมาส์ */
        .btn-primary:hover {
            background-color: #ff0303; /* สีที่เข้มขึ้นเมื่อชี้เมาส์ */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- ฟอร์มข้อมูลผู้ส่ง -->
        <h2 class="text-center mb-4">ผู้ส่ง</h2>
        <form class="row g-3 needs-validation" novalidate id="senderForm" action="insert.php">
            <!-- ช่องกรอกข้อมูลผู้ส่ง -->
            <div class="col-md-6">
                <label for="senderFirstName" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" id="senderFirstName" name="name" required>
                <div class="invalid-feedback">กรุณาระบุชื่อ</div>
            </div>
            <div class="col-md-6">
                <label for="senderLastName" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="senderLastName" name="name2" required>
                <div class="invalid-feedback">กรุณาระบุนามสกุล</div>
            </div>
            <div class="col-md-4">
                <label for="senderHouseNumber" class="form-label">บ้านเลขที่</label>
                <input type="text" class="form-control" id="senderHouseNumber" name="num" required>
                <div class="invalid-feedback">กรุณาระบุบ้านเลขที่</div>
            </div>
            <div class="col-md-4">
                <label for="senderVillage" class="form-label">หมู่บ้าน</label>
                <input type="text" class="form-control" id="senderVillage" name="home" required>
                <div class="invalid-feedback">กรุณาระบุหมู่บ้าน</div>
            </div>
            <div class="col-md-4">
                <label for="senderAlley" class="form-label">ซอย</label>
                <input type="text" class="form-control" id="senderAlley" name="soy" required>
                <div class="invalid-feedback">กรุณาระบุซอย</div>
            </div>
            <div class="col-md-4">
                <label for="senderSubDistrict" class="form-label">ตำบล</label>
                <input type="text" class="form-control" id="senderSubDistrict" name="tambon" required>
                <div class="invalid-feedback">กรุณาระบุตำบล</div>
            </div>
            <div class="col-md-4">
                <label for="senderDistrict" class="form-label">อำเภอ</label>
                <input type="text" class="form-control" id="senderDistrict" name="aum" required>
                <div class="invalid-feedback">กรุณาระบุอำเภอ</div>
            </div>
            <div class="col-md-4">
                <label for="senderProvince" class="form-label">จังหวัด</label>
                <select class="form-select" id="senderProvince" name="jang" required>
                    <option selected disabled value="">เลือกจังหวัด...</option>
                    <option>กรุงเทพมหานคร</option>
                    <option>กระบี่</option>
                    <option>กาญจนบุรี</option>
                    <option>กาฬสินธุ์</option>
                    <option>กำแพงเพชร</option>
                    <option>ขอนแก่น</option>
                    <option>จันทบุรี</option>
                    <option>ฉะเชิงเทรา</option>
                    <option>ชลบุรี</option>
                    <option>ชัยนาท</option>
                    <option>ชัยภูมิ</option>
                    <option>ชุมพร</option>
                    <option>เชียงราย</option>
                    <option>เชียงใหม่</option>
                    <option>ตรัง</option>
                    <option>ตราด</option>
                    <option>ตาก</option>
                    <option>นครนายก</option>
                    <option>นครปฐม</option>
                    <option>นครพนม</option>
                    <option>นครราชสีมา</option>
                    <option>นครศรีธรรมราช</option>
                    <option>นครสวรรค์</option>
                    <option>นนทบุรี</option>
                    <option>นราธิวาส</option>
                    <option>น่าน</option>
                    <option>บึงกาฬ</option>
                    <option>บุรีรัมย์</option>
                    <option>ปทุมธานี</option>
                    <option>ประจวบคีรีขันธ์</option>
                    <option>ปราจีนบุรี</option>
                    <option>ปัตตานี</option>
                    <option>พระนครศรีอยุธยา</option>
                    <option>พะเยา</option>
                    <option>พังงา</option>
                    <option>พัทลุง</option>
                    <option>พิจิตร</option>
                    <option>พิษณุโลก</option>
                    <option>เพชรบุรี</option>
                    <option>เพชรบูรณ์</option>
                    <option>แพร่</option>
                    <option>ภูเก็ต</option>
                    <option>มหาสารคาม</option>
                    <option>มุกดาหาร</option>
                    <option>แม่ฮ่องสอน</option>
                    <option>ยโสธร</option>
                    <option>ยะลา</option>
                    <option>ร้อยเอ็ด</option>
                    <option>ระนอง</option>
                    <option>ระยอง</option>
                    <option>ราชบุรี</option>
                    <option>ลพบุรี</option>
                    <option>ลำปาง</option>
                    <option>ลำพูน</option>
                    <option>เลย</option>
                    <option>ศรีสะเกษ</option>
                    <option>สกลนคร</option>
                    <option>สงขลา</option>
                    <option>สตูล</option>
                    <option>สมุทรปราการ</option>
                    <option>สมุทรสงคราม</option>
                    <option>สมุทรสาคร</option>
                    <option>สระแก้ว</option>
                    <option>สระบุรี</option>
                    <option>สิงห์บุรี</option>
                    <option>สุโขทัย</option>
                    <option>สุพรรณบุรี</option>
                    <option>สุราษฎร์ธานี</option>
                    <option>สุรินทร์</option>
                    <option>หนองคาย</option>
                    <option>หนองบัวลำภู</option>
                    <option>อ่างทอง</option>
                    <option>อำนาจเจริญ</option>
                    <option>อุดรธานี</option>
                    <option>อุตรดิตถ์</option>
                    <option>อุทัยธานี</option>
                    <option>อุบลราชธานี</option>
                </select>
                <div class="invalid-feedback">กรุณาเลือกจังหวัด</div>
            </div>
            <div class="col-md-4">
                <label for="senderZip" class="form-label">รหัสไปรษณีย์</label>
                <input type="text" class="form-control" id="senderZip" name="name23" required>
                <div class="invalid-feedback">กรุณาระบุรหัสไปรษณีย์</div>
            </div>
            <div class="col-md-6">
                <label for="sendDate" class="form-label">วันที่ส่ง</label>
                <input type="date" class="form-control" id="sendDate" name="num3" required>
                <div class="invalid-feedback">กรุณาระบุวันที่ส่ง</div>
            </div>

        <!-- ฟอร์มข้อมูลผู้รับ -->
        <h2 class="text-center mb-4">ผู้รับ</h2>
        <form class="row g-3 needs-validation" novalidate id="receiverForm">
            <!-- ช่องกรอกข้อมูลผู้รับ -->
            <div class="col-md-6">
                <label for="receiverFirstName" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" id="receiverFirstName" name="name1" required >
                <div class="invalid-feedback">กรุณาระบุชื่อ</div>
            </div>
            <div class="col-md-6">
                <label for="receiverLastName" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="receiverLastName" name="name1" required>
                <div class="invalid-feedback">กรุณาระบุนามสกุล</div>
            </div>
            <div class="col-md-4">
                <label for="receiverHouseNumber" class="form-label">บ้านเลขที่</label>
                <input type="text" class="form-control" id="receiverHouseNumber" name="num1" required>
                <div class="invalid-feedback">กรุณาระบุบ้านเลขที่</div>
            </div>
            <div class="col-md-4">
                <label for="receiverVillage" class="form-label">หมู่บ้าน</label>
                <input type="text" class="form-control" id="receiverVillage" name="home1" required>
                <div class="invalid-feedback">กรุณาระบุหมู่บ้าน</div>
            </div>
            <div class="col-md-4">
                <label for="receiverAlley" class="form-label">ซอย</label>
                <input type="text" class="form-control" id="receiverAlley" name="soy1" required>
                <div class="invalid-feedback">กรุณาระบุซอย</div>
            </div>
            <div class="col-md-4">
                <label for="receiverSubDistrict" class="form-label">ตำบล</label>
                <input type="text" class="form-control" id="receiverSubDistrict" name="tumbon1" required>
                <div class="invalid-feedback">กรุณาระบุตำบล</div>
            </div>
            <div class="col-md-4">
                <label for="receiverDistrict" class="form-label">อำเภอ</label>
                <input type="text" class="form-control" id="receiverDistrict" name="aum1" required>
                <div class="invalid-feedback">กรุณาระบุอำเภอ</div>
            </div>
            <div class="col-md-4">
                <label for="receiverProvince" class="form-label">จังหวัด</label>
                <select class="form-select" id="receiverProvince" name="jang1" required>
                    <option selected disabled value="">เลือกจังหวัด...</option>
                    <option>กรุงเทพมหานคร</option>
                    <option>กระบี่</option>
                    <option>กาญจนบุรี</option>
                    <option>กาฬสินธุ์</option>
                    <option>กำแพงเพชร</option>
                    <option>ขอนแก่น</option>
                    <option>จันทบุรี</option>
                    <option>ฉะเชิงเทรา</option>
                    <option>ชลบุรี</option>
                    <option>ชัยนาท</option>
                    <option>ชัยภูมิ</option>
                    <option>ชุมพร</option>
                    <option>เชียงราย</option>
                    <option>เชียงใหม่</option>
                    <option>ตรัง</option>
                    <option>ตราด</option>
                    <option>ตาก</option>
                    <option>นครนายก</option>
                    <option>นครปฐม</option>
                    <option>นครพนม</option>
                    <option>นครราชสีมา</option>
                    <option>นครศรีธรรมราช</option>
                    <option>นครสวรรค์</option>
                    <option>นนทบุรี</option>
                    <option>นราธิวาส</option>
                    <option>น่าน</option>
                    <option>บึงกาฬ</option>
                    <option>บุรีรัมย์</option>
                    <option>ปทุมธานี</option>
                    <option>ประจวบคีรีขันธ์</option>
                    <option>ปราจีนบุรี</option>
                    <option>ปัตตานี</option>
                    <option>พระนครศรีอยุธยา</option>
                    <option>พะเยา</option>
                    <option>พังงา</option>
                    <option>พัทลุง</option>
                    <option>พิจิตร</option>
                    <option>พิษณุโลก</option>
                    <option>เพชรบุรี</option>
                    <option>เพชรบูรณ์</option>
                    <option>แพร่</option>
                    <option>ภูเก็ต</option>
                    <option>มหาสารคาม</option>
                    <option>มุกดาหาร</option>
                    <option>แม่ฮ่องสอน</option>
                    <option>ยโสธร</option>
                    <option>ยะลา</option>
                    <option>ร้อยเอ็ด</option>
                    <option>ระนอง</option>
                    <option>ระยอง</option>
                    <option>ราชบุรี</option>
                    <option>ลพบุรี</option>
                    <option>ลำปาง</option>
                    <option>ลำพูน</option>
                    <option>เลย</option>
                    <option>ศรีสะเกษ</option>
                    <option>สกลนคร</option>
                    <option>สงขลา</option>
                    <option>สตูล</option>
                    <option>สมุทรปราการ</option>
                    <option>สมุทรสงคราม</option>
                    <option>สมุทรสาคร</option>
                    <option>สระแก้ว</option>
                    <option>สระบุรี</option>
                    <option>สิงห์บุรี</option>
                    <option>สุโขทัย</option>
                    <option>สุพรรณบุรี</option>
                    <option>สุราษฎร์ธานี</option>
                    <option>สุรินทร์</option>
                    <option>หนองคาย</option>
                    <option>หนองบัวลำภู</option>
                    <option>อ่างทอง</option>
                    <option>อำนาจเจริญ</option>
                    <option>อุดรธานี</option>
                    <option>อุตรดิตถ์</option>
                    <option>อุทัยธานี</option>
                    <option>อุบลราชธานี</option>
                </select>
                <div class="invalid-feedback">กรุณาเลือกจังหวัด</div>
            </div>
            <div class="col-md-4">
                <label for="receiverZip" class="form-label">รหัสไปรษณีย์</label>
                <input type="text" class="form-control" id="receiverZip" name="num1" required>
                <div class="invalid-feedback">กรุณาระบุรหัสไปรษณีย์</div>
            </div>
      
            <div class="col-md-6">
                <label for="receiveDate" class="form-label">วันที่รับ</label>
                <input type="date" class="form-control" id="receiveDate" name="j2" required>
                <div class="invalid-feedback">กรุณาระบุวันที่รับ</div>
            </div>
            <div class="col-md-12">
                <button class="btn btn-primary" type="submit">ส่งข้อมูล</button>
            </div>
        </form>
    <!-- เชื่อมโยงกับ JavaScript ของ Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybI8i3BX+D4ZP8eTvmLx8TctIcY9RV3l8b3F6pA1/mnbcY5G2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+O2n6D9eoK5rqqR3G/Zs4eNnF9k8/j1yE4J7" crossorigin="anonymous"></script>
    <script>
        // ฟังก์ชันสำหรับการตรวจสอบฟอร์ม
        (function () {
            'use strict'
            // เลือกฟอร์มทั้งหมด
            var forms = document.querySelectorAll('.needs-validation')
            // วนรอบเพื่อเพิ่มการตรวจสอบ
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        // ถ้าฟอร์มไม่ถูกต้องให้หยุดการส่ง
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated') // เพิ่มคลาสเพื่อแสดงผลการตรวจสอบ
                    }, false)
                })
        })()
    </script>
</body>
</html>