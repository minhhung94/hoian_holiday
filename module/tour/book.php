<?php include '../../template/header.php' ?>
<?php include '../../template/head/index.php' ?>
<div class="container" id="books">
	<div class="col-md-9 col-lg-9" style="padding-left: 0px;">
        <?php 
                    $getid = $_GET['id']; 
                    $ketnoi = "SELECT * FROM produce where id='".$getid."'";
                    $truyvan = mysql_query($ketnoi);
                    $ketqua= mysql_fetch_array($truyvan); 
                        $sanpham = $ketqua['tensp'];
                        $cont = $ketqua['content'];
                        $gia = $ketqua['price'];
                        $id = $ketqua['id'];
                ?>
		<div class="module_about">YOUR TOUR REQUEST</div>
		<div style="padding-top: 20px;">
            <div class="col-md-4">
            <div class="book_anhtour">
            <img data-u="image" src="<?=$path2?>/admin/<?=$ketqua['img_url']?>" />
            </div>
           </div>
           <div class="col-md-8">
                <div class="book_text1"><?=$sanpham?></div>
                <div class="book_text2"><b>Price: </b><?=$gia?>$ /pax</div>
            </div>
        </div>
        <div class="col-md-12" style="padding-left: 0; padding-top: 10px;">
            <div class="col-md-6" style="padding-left: 0;">
            <?php
                        if (isset($_POST["ok"])) {
                            if ($_POST["date"] == null or $_POST["name"] == null or $_POST["tell"] == null or $_POST["txtCaptcha"] == null or $_POST["email"] == null) {
                                $err = 1;
                                redirect("book.php?id=<?= $id ?>&err=$err&sm6=6");
                            } else {
                                if ($_POST['txtCaptcha'] != $_SESSION['security_code']) {
                                    $err = 2;
                                    redirect("book.php?id=$id&err=$err&sm6=6");
                                } else {
                        $email = $_POST['email']; //Kiem tra mail hop le
                        if (!eregi("^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3}$", $email)) {
                            $err = 3; //email khong hop le
                            redirect("book.php?lang=$lang&item=$id &err=$err&sm6=6");
                        } if (!preg_match('/([0-9]+)/i', $_REQUEST['tell'])) {
                            $err = 4; //mobile khong hop le
                            redirect("book.php?lang=$lang&item=$id&err=$err&sm6=6");
                        } else {
                            //$tensp=$str;
                            $checkin = $_POST['checkin'];
                            $checkout = $_POST['checkout'];
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $subject = $_POST['subject'];
                            $id_tour = $_GET['item'];
                            $sql = "select * from produce where id='" . $id_tour . "'";
                            $query = @mysql_query($sql);
                            $row = mysql_fetch_array($query);
                            $tenphong = $row['tensp'];
                            $gia = $row['price'];
                            //chen thong tin trong noi dung email
                            $checkin_1 = 'checkin:' .$_POST['checkin'];
                            $checkout_1 = 'checkout' .$_POST['checkout'];
                            $room = 'Room:' . $_POST['room'];
                            $name_1 = 'Ten khach:' . $_POST['name'];
                            $email_1 = 'Email:' . $_POST['email'];
                            $tell_1 = 'Dien thoai:' . $_POST['tell'];
                            $adult_1 = 'Nguoi lon:' . $_POST['adult'];
                            $kid_1 = 'Con nit:' . $_POST['kid'];
                            $hotel_1 = 'Hotel:' . $_POST['hotel'];
                            $date_1 = 'Ngay di:' . $_POST['date'];
                            $subject_1 = 'Tieu de:' . $_POST['subject'];
                            $message_1 = 'Noi Dung:' . $_POST['message'];
                            $content = $checkin_1 ."<br>" .$checkout_1 ."<br>" . $room ."<br>"  .$tenphong . "<br>" . $name_1 . "<br>" . $email_1 . "<br>" . $tell_1 . "<br>" . $date_1 . "<br>" . $adult_1 . "<br>" . $kid_1 . "<br>" . $hotel_1 . "<br>" . $subject_1 . "<br>" . $message_1;

                            //redirect("smtp.php?lang=$lang&makh=$id_tour&name=$name&email=$email&subject=$subject&content=$content");
                            redirect("$path3/email/smtp.php?lang=$lang&makh=$id_tour&name=$name&email=$email&subject=$subject&content=$content");
                            //redirect("$path2/email/sendmailgmail.php?lang=$lang&makh=$id_tour&name=$name&email=$email&subject=$subject&content=$content");
                        }
                    }
                }
            }
            $err = $_GET["err"];
           
                switch ($err) {
                    case 1: echo "<script>alert('Required fields are denoted by (*)');</script>";
                    break;
                    case 2: echo "<script>alert('Captcha is incorrect, please input again !');</script>";
                    break;
                    case 3: echo "<script>alert('Email is incorrect !');</script>";
                    break;
                    case 4: echo "<script>alert('Must enter a mobile number into the boxs !');</script>";
                    break;
                }
            
           
      
            ?>

             <form action="book.php" method="post">
                       <!-- name-->
                         <div class="col-md-10">
                           <!-- date-->
                          <div class="form-group">
                              <label for="name">
                                 Date:</label>
                         <input class="form-control" placeholder="Date" id="date" name="date"  type="text"/>
                                <script>
                      $(document).ready(function(){
                      var date_input=$('input[name="date"]'); //our date input has the name "date"
                      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                      var options={
                      format: 'mm/dd/yyyy',
                      container: container,
                      todayHighlight: true,
                      autoclose: true,
                      };
                      date_input.datepicker(options);
                      })
                      </script>

                          </div>
                            
                      
                                 
                           <div class="form-group">
                              <label for="name">
                                  Tour:</label>
                              <input type="text" class="form-control" name="room" id="name" value="<?=$sanpham?>" />
                          </div>
                            <div class="form-group">
                              <label for="name">
                                  Your Name:</label>
                              <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="required" />
                          </div>
                          <!-- phone-->
                          <div class="form-group">
                              <label for="name">
                                  Handphone:</label>
                              <input  type="tel" name="tell" class="form-control"  id="name" placeholder="Handphone" required="required" />
                          </div>
                          <!--email-->
                          <div class="form-group">
                              <label for="name">
                                  Email:</label>
                              <input  type="email" name="email" class="form-control"  id="name" placeholder="Email" required="required" />
                          </div>
                          <!--Subject:-->
                          <div class="form-group">
                              <label for="name">
                                  Subject:</label>
                              <input  type="text" name="subject" class="form-control"  id="name" placeholder="Subject" required="required" />
                          </div>
                          <!--Content:-->
                          <div class="form-group">
                            <div style="color:white;">
                                  Content:</div>
                              <textarea type="text" name="message" placeholder="Content" cols="38" rows="5" style="color:black;width:100%;background: white;"></textarea>
                          </div>
                          <!--Capcha:-->
                          <div class="form-group">
                              <div style="color:white;">
                                  Captcha:</div>
                              <input type="text" name="txtCaptcha" required="required" maxlength="10" size="20" style="color:black;width:60%;height:27px;background: white;"><img src="<?= $path ?>/random_image.php">
                          </div>
                               <input style="background:#2a7eb9; width: 70px; height: 30px; border-radius: 5px;color:white;" type="submit" name="ok" value="SEND"> 
                         </div>
                        
            </form>

            </div>
            <div class="col-md-6"></div>
        </div>
<div style=" height:15px; clear:both"></div>
        </div>
	<div class="col-md-3 col-lg-3" style="padding-right: 0px;">
		<?php include 'menuright.php' ?>
	</div>
</div>
<?php include '../../template/footer/index.php' ?>