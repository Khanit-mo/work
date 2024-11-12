<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จ่าหน้าซองจดหมาย</title>
    <style>
        /* ตั้งค่าพื้นหลังและฟอนต์ */
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #40E0D0;
            margin: 0;
            padding: 20px;
        }
        
        /* การตั้งค่าซองจดหมาย */
        .envelope {
            width: 500px;
            height: 300px;
            padding: 20px;
            border: 2px solid #000;
            background-color: #fff;
            position: relative;
            font-size: 16px;
        }
        
        /* ส่วนของผู้ส่ง */
        .sender {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        /* ส่วนของผู้รับ */
        .recipient {
            position: absolute;
            bottom: 20px;  /* Adjusted for spacing from bottom */
            right: 20px;   /* Adjusted for spacing from right */
        }

        /* ชื่อหัวข้อของผู้ส่งและผู้รับ */
        .address-title {
            font-weight: bold;
            font-size: 18px;
            text-decoration: underline;
            margin-bottom: 10px;
        }

        /* ตำแหน่งข้อมูลผู้ส่งและผู้รับ */
        .info {
            font-size: 16px;
            margin-bottom: 10px; /* Increased margin for better spacing */
        }

        /* เพิ่มการเว้นระยะสำหรับข้อมูลจังหวัด */
        .info:last-of-type {
            margin-bottom: 20px; /* เพิ่มระยะห่างระหว่างจังหวัดกับวันที่ส่ง */
        }

        /* วันที่ส่งจะอยู่ด้านล่างขวาของซองจดหมาย */
        .date {
            position: absolute;
            bottom: 50px;  /* Adjusted to move above the recipient section */
            right: 20px;
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="envelope">
        <!-- ข้อมูลผู้ส่ง -->
        <div class="sender">
            <div class="address-title">ผู้ส่ง</div>
            <div class="info">ชื่อ: <?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'ไม่ระบุ'; ?></div>
            <div class="info">บ้านเลขที่: <?php echo isset($_GET['num']) ? htmlspecialchars($_GET['num']) : 'ไม่ระบุ'; ?></div>
            <div class="info">หมู่บ้าน: <?php echo isset($_GET['home']) ? htmlspecialchars($_GET['home']) : 'ไม่ระบุ'; ?></div>
            <div class="info">ซอย: <?php echo isset($_GET['soy']) ? htmlspecialchars($_GET['soy']) : 'ไม่ระบุ'; ?></div>
            <div class="info">ตำบล: <?php echo isset($_GET['tambon']) ? htmlspecialchars($_GET['tambon']) : 'ไม่ระบุ'; ?></div>
            <div class="info">อำเภอ: <?php echo isset($_GET['aum']) ? htmlspecialchars($_GET['aum']) : 'ไม่ระบุ'; ?></div>
            <div class="info">จังหวัด: <?php echo isset($_GET['jang']) ? htmlspecialchars($_GET['jang']) : 'ไม่ระบุ'; ?></div>
        </div>

        <!-- ข้อมูลผู้รับ -->
        <div class="recipient">
            <div class="address-title">ผู้รับ</div>
            <div class="info">ชื่อ: <?php echo isset($_GET['name1']) ? htmlspecialchars($_GET['name1']) : 'ไม่ระบุ'; ?></div>
            <div class="info">บ้านเลขที่: <?php echo isset($_GET['num1']) ? htmlspecialchars($_GET['num1']) : 'ไม่ระบุ'; ?></div>
            <div class="info">หมู่บ้าน: <?php echo isset($_GET['home1']) ? htmlspecialchars($_GET['home1']) : 'ไม่ระบุ'; ?></div>
            <div class="info">ซอย: <?php echo isset($_GET['soy1']) ? htmlspecialchars($_GET['soy1']) : 'ไม่ระบุ'; ?></div>
            <div class="info">ตำบล: <?php echo isset($_GET['tumbon1']) ? htmlspecialchars($_GET['tumbon1']) : 'ไม่ระบุ'; ?></div>
            <div class="info">อำเภอ: <?php echo isset($_GET['aum1']) ? htmlspecialchars($_GET['aum1']) : 'ไม่ระบุ'; ?></div>
            <div class="info">จังหวัด: <?php echo isset($_GET['jang1']) ? htmlspecialchars($_GET['jang1']) : 'ไม่ระบุ'; ?></div>
            <div class="info">รหัสไปรษณีย์: <?php echo isset($_GET['num1']) ? htmlspecialchars($_GET['num1']) : 'ไม่ระบุ'; ?></div>
        </div>

        <!-- วันที่ส่ง -->
        <div class="date">วันที่ส่ง: <?php echo isset($_GET['j2']) ? htmlspecialchars($_GET['j2']) : 'ไม่ระบุ'; ?></div>
    </div>

</body>
</html>
