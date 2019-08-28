<div class="row">
    <div class="col-md-9">
        <?php
        $page_title = "ไม่พบ";
        $page_loading = $_GET['p'];
        if($page_loading == "teacher-math")
        {
            $page_title = "กลุ่มสาระการเรียนรู้คณิตศาสตร์";
            $directory = "../assets/img/personnel/คณิต";
            $headd = "m1.jpg";
        } 
        else if($page_loading == "teacher-sci")
        {
            $page_title = "กลุ่มสาระการเรียนรู้วิทยาศาสตร์";
            $directory = "../assets/img/personnel/วิทย์";
            $headd = "sc1.jpg";
        }
        else if($page_loading == "teacher-social")
        {
            $page_title = "กลุ่มสาระการเรียนรู้สังคมศึกษา ศาสนาและวัฒนธรรม";
            $directory = "../assets/img/personnel/สังคม";
            $headd = "s2.jpg";
        }
        else if($page_loading == "teacher-thai")
        {
            $page_title = "กลุ่มสาระการเรียนรู้ภาษาไทย";
            $directory = "../assets/img/personnel/ไทย";
            $headd = "t7.jpg";
        }
        else if($page_loading == "teacher-phyed")
        {
            $page_title = "กลุ่มสาระการเรียนสุขศึกษาและพลศึกษา";
            $directory = "../assets/img/personnel/พละ";
            $headd = "ed1.jpg";
        }
        else if($page_loading == "teacher-art")
        {
            $page_title = "กลุ่มสาระการเรียนรู้ศิลปะ";
            $directory = "../assets/img/personnel/ศิลปะ";
            $headd = "a1.jpg";
        }
        else if($page_loading == "teacher-care")
        {
            $page_title = "กลุ่มสาระการเรียนรู้การงานอาชีพและเทคโนโลยี";
            $directory = "../assets/img/personnel/การงานอาชีพ";
            $headd = "ca11.jpg";
        }
        else if($page_loading == "teacher-com")
        {
            $page_title = "กลุ่มงานคอมพิวเตอร์";
            $directory = "../assets/img/personnel/คอม";
            $headd = "c1.jpg";
        }
        else if($page_loading == "teacher-eng")
        {
            $page_title = "กลุ่มสาระการเรียนรู้ภาษาต่างประเทศ";
            $directory = "../assets/img/personnel/ภาษาต่างประเทศ";
            $headd = "e1.jpg";
        }
        else if($page_loading == "teacher-learn")
        {
            $page_title = "กิจกรรมพัฒนาผู้เรียน";
            $directory = "../assets/img/personnel/แนะแนว";
            $headd = "a1.jpg";
        }
        else if($page_loading == "teacher-office")
        {
            $page_title = "ฝ่ายสำนักงานกลาง";
            $directory = "../assets/img/personnel/สำนักงานกลาง";
            $headd = "";
        }


        echo "<h1>$page_title</h1>";
        ?>
        
        <hr width="25%" align="left">
        <?php
        $images = glob($directory . "/*.*");
        echo "<div class='row'>";
        if($headd != "")
        {
            $headd = $directory . '/' . $headd;
            echo "<center><img class='teacher-img' src='./assets/$headd' draggable='false'></center>";
        }
        echo "</div>";
        echo "<div class='row'>";
        foreach($images as $image)
        {
            if($image == $headd)
                continue;
            echo "<img class='teacher-img' src='./assets/$image' draggable='false'>";
        }
        echo "</div>";
        ?>
    </div>
    <?php require_once('sidebar.php') ?>
</div>
