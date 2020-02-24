<?php require_once('../sys/EDIT_FILELIST.php') ?>
<div class="row">
    <div class="col-md-9">
      <h1>ประมวลไฟล์</h1>
      <hr width="25%" align="left">
      <div class="row">
        <div class="col-md-12">
          <h4>สำหรับนักเรียน :</h4>
          <table class="verysad" width="100%">
              <thead>
                  <tr>
                      <td width="50%">
                          <strong>ชื่อไฟล์</strong>
                      </td>
                      <td width="10%">
                          <strong>ขนาด</strong>
                      </td width="10%">
                      <td>
                          <strong>วันที่</strong>
                      </td>
                      <td width="30%">
                          <strong>ดาวน์โหลด</strong>
                      </td>
                  </tr>
              </thead>
              <?php
              for($i=0;true;$i++)
              {
                if(empty($dfile[1][$i]['name']))
                  break;
                else {
                  ?>
                  <tr>
                    <td>
                      <?php echo $dfile[1][$i]['name']; ?>
                    </td>
                    <td>
                      <?php echo $dfile[1][$i]['size']; ?>
                    </td>
                    <td>
                      <?php echo $dfile[1][$i]['date']; ?>
                    </td>
                    <td>
                      <a href="download/<?php echo $dfile[1][$i]['filename']; ?>" target="_blank"><?php echo $dfile[1][$i]['filename']; ?></a>
                    </td>
                  </tr>
                  <?php
                }
              }
              ?>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h4>เอกสาร/ไฟล์ทั่วไป :</h4>
          <table class="verysad" width="100%">
              <thead class="t">
                  <tr>
                      <td width="50%">
                          <strong>ชื่อไฟล์</strong>
                      </td>
                      <td width="10%">
                          <strong>ขนาด</strong>
                      </td width="10%">
                      <td>
                          <strong>วันที่</strong>
                      </td>
                      <td width="30%">
                          <strong>ดาวน์โหลด</strong>
                      </td>
                  </tr>
              </thead>
              <?php
              for($i=0;true;$i++)
              {
                if(empty($dfile[2][$i]['name']))
                  break;
                else {
                  ?>
                  <tr>
                    <td>
                      <?php echo $dfile[2][$i]['name']; ?>
                    </td>
                    <td>
                      <?php echo $dfile[2][$i]['size']; ?>
                    </td>
                    <td>
                      <?php echo $dfile[2][$i]['date']; ?>
                    </td>
                    <td>
                      <a href="download/<?php echo $dfile[2][$i]['filename']; ?>" target="_blank"><?php echo $dfile[2][$i]['filename']; ?></a>
                    </td>
                  </tr>
                  <?php
                }
              }
              ?>
          </table>
        </div>
      </div>
      <br>
    </div>
    <?php require_once('sidebar.php') ?>
</div>
