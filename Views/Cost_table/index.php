<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Dan">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Assignment</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="./Views/images/Logo BK_vien trang.png"
    />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
	<link type="text/css" rel="stylesheet" href="./Views/Cost_table/style.css">
    <link href="./Views/Navbar/navbar.css" rel="stylesheet" type="text/css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;0,500;0,600;0,700;0,800;1,200;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
	  <script src="https://use.fontawesome.com/721412f694.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
</head>

<body>
    
<div>
    <?php require_once("./Views/Navbar/index.php"); ?>
    <script src="./Views/Navbar/navbarScript.js" index='3'></script>
    <?php 
        if($data["user"] == "customer" || $data["user"] == "member"){
            echo "<section class=\"pb-4 mb-5\">
            <div class=\"hero\">
                <div class=\"row1\">
                    <div class=\"swiper-container slider-1\">
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\">
                                <img src=\"./Views/images/h1.jpg\" alt=\"\" />
                                <div class=\"content\">
                                <h1>T??? ????? ?????nh k??
                                    <br/>
                                    ch??? t???
                                    <span>199.000/th??ng</span>
                                </h1>
                                <p>??em ?????n cho b???n nh???ng g??i h??ng v???i ch???t l?????ng cao v?? ph?? h???p v???i xu h?????ng c???a gi???i tr??? hi???n nay.</p>
                    
                                <a href=\"?url/Home/Products/\">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Carousel Navigation -->
                <div class=\"arrows d-flex\">
                    <div class=\"swiper-prev d-flex\">
                      <i class=\"bx bx-chevrons-left swiper-icon\"></i>
                    </div>
                    <div class=\"swiper-next d-flex\">
                      <i class=\"bx bx-chevrons-right swiper-icon\"></i>
                    </div>
                </div>
            </div>
        </section>";
        }
    ?>
	
	<div class="row container-fluid px-3 px-sm-5 my-5 text-center">
        <?php 
            if($data["user"] == "customer" || $data["user"] == "member"){
                echo "<h3 class=\"mb-5\">Ch???n g??i</h3>";
                if(empty($data["combo"])) echo "empty combo";
                else{//wwhile
                    foreach($data["combo"] as $row){
                        echo "<div class=\"col-md-4 mb-4\">
                        <section>
                          <div class=\"card\"><span hidden>" .  $row["id"] . "</span>
                            <div class=\"card-header text-center py-1\">
                              <h5 class=\"mb-0 fw-bold\">" . $row["name"] . "</h5>
                            </div>		
                            <div class=\"card-body\">
                              <h3 class=\"text-warning mb-2\">" . $row["price"] . "/th??ng</h3>
                              <h6>M???i h???p bao g???m: </h6>
                              <ol class=\"list-group list-group-numbered\">";
                              foreach($row["product"] as $product){
                                  echo "<li class=\"list-group-item\">" . $product["name"] . "</li>";
                              }
                  echo        "</ol>
                                <p>Ch???n k??ch c???</p>
                                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic radio toggle button group\">
                                  <input type=\"radio\" class=\"btn-check\" name=\"btnGroupRadio\" id=\"btnRadio1-" . $row['id'] ."\" autocomplete=\"off\" checked=\"\">
                                  <label class=\"btn btn-outline-secondary\" for=\"btnRadio1-" . $row['id'] ."\">S</label>
                                
                                  <input type=\"radio\" class=\"btn-check\" name=\"btnGroupRadio\" id=\"btnRadio2-" . $row['id'] ."\" autocomplete=\"off\">
                                  <label class=\"btn btn-outline-secondary\" for=\"btnRadio2-" . $row['id'] ."\">M</label>
                                
                                  <input type=\"radio\" class=\"btn-check\" name=\"btnGroupRadio\" id=\"btnRadio3-" . $row['id'] ."\" autocomplete=\"off\">
                                  <label class=\"btn btn-outline-secondary\" for=\"btnRadio3-" . $row['id'] ."\">L</label>
      
                                  <input type=\"radio\" class=\"btn-check\" name=\"btnGroupRadio\" id=\"btnRadio4-" . $row['id'] ."\" autocomplete=\"off\">
                                  <label class=\"btn btn-outline-secondary\" for=\"btnRadio4-" . $row['id'] ."\">XL</label>
      
                                  <input type=\"radio\" class=\"btn-check\" name=\"btnGroupRadio\" id=\"btnRadio5-" . $row['id'] ."\" autocomplete=\"off\">
                                  <label class=\"btn btn-outline-secondary\" for=\"btnRadio5-" . $row['id'] ."\">XXL</label>
                                </div>
                            </div>
                            <div class=\"card-footer d-flex justify-content-between py-3\">
                              <select class=\"form-select-sm\" aria-label=\"Small select\">
                                  <option selected=\"0\">Ch???n chu k?? g???i</option>";
                                  $i = 1;
                                  foreach($data["cycle"] as $row1){
                                      echo "<option value=\"". $i . "\">G???i m???i ". $row1["cycle"] . "</option>";
                                      $i += 1;
                                  }

                      echo "  </select>
                              <button type=\"button\" class=\"btn btn-success btn-block\" onclick=\"add_combo(this);\">
                                Thanh to??n
                              </button>
                            </div>
                          </div>
                        </section>
                      </div>";
                    }
                }
            }
            else if($data["user"] == "manager"){
                echo "<h3 class=\"mb-5\">Qu???n l?? c??c g??i</h3>";
                echo "<div class=\"add-combo-btn\" style=\"text-align: left; margin-bottom: 2rem;\"><button type=\"button\" class=\"btn btn-success\" id=\"addCombo-btn\" style=\"width: 8rem;\"><i class=\"fas fa-plus\"></i> Th??m g??i</button>
                <button id=\"add_cycle_Btn\" type=\"button\" class=\"btn btn-success\" style=\"width: 10rem; margin-left: 2rem;\"><i class=\"fas fa-plus\"></i> Th??m chu k??</button>
                </div>";
                echo "<form id=\"add_cycle\"action=\"?url=Home/add_cycle\" method=\"POST\">
                            <div class=\"row\">
                                <label class=\"col-lg-2\" for=\"cycle-time\">
                                    Th???i gian chu k??:
                                </label>
                                <div class=\"col-lg-6\"><input type=\"number\" name=\"cycle-time\" placeholder=\"Nh???p th???i gian chu k??\"></div>
                            </div>
                            <div class=\"btn-conf-add\">
                                <button type=\"submit\">Th??m</button>
                            </div>
                  </form>";
                if(empty($data["combo"])) echo "empty combo";
                else{//wwhile
                  $count = 1;
                    foreach($data["combo"] as $row){
                        echo "<div class=\"col-xxl-4 col-xl-6 col-lg-6 mb-4\">
                        <section>
                            <div class=\"card\"><span hidden>" .  $row["id"] . "</span>
                                <div class=\"card-header text-center py-1\">
                                    <h5 class=\"mb-0 fw-bold\">" . $row["name"] . "</h5>
                                    </div>		
                                    <div class=\"card-body\">
                                        <h3 class=\"text-warning mb-2\">" . $row["price"] . "/th??ng</h3>
                                        <h6>M???i h???p bao g???m: </h6>
                                        <ol class=\"list-group list-group-numbered\">";
                                        foreach($row["product"] as $product){
                                            echo "<li class=\"list-group-item\">" . $product["name"] . "</li>";
                                        }
                        echo        "</ol>
                                        <p>Ch???n k??ch c???</p>
                                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic radio toggle button group\">
                                          <input type=\"radio\" class=\"btn-check\" name=\"btnGroupRadio\" id=\"btnRadio1-" . $row['id'] ."\" autocomplete=\"off\" checked=\"\">
                                          <label class=\"btn btn-outline-secondary\" for=\"btnRadio1-" . $row['id'] ."\">S</label>
                                        
                                          <input type=\"radio\" class=\"btn-check\" name=\"btnGroupRadio\" id=\"btnRadio2-" . $row['id'] ."\" autocomplete=\"off\">
                                          <label class=\"btn btn-outline-secondary\" for=\"btnRadio2-" . $row['id'] ."\">M</label>
                                        
                                          <input type=\"radio\" class=\"btn-check\" name=\"btnGroupRadio\" id=\"btnRadio3-" . $row['id'] ."\" autocomplete=\"off\">
                                          <label class=\"btn btn-outline-secondary\" for=\"btnRadio3-" . $row['id'] ."\">L</label>
              
                                          <input type=\"radio\" class=\"btn-check\" name=\"btnGroupRadio\" id=\"btnRadio4-" . $row['id'] ."\" autocomplete=\"off\">
                                          <label class=\"btn btn-outline-secondary\" for=\"btnRadio4-" . $row['id'] ."\">XL</label>
              
                                          <input type=\"radio\" class=\"btn-check\" name=\"btnGroupRadio\" id=\"btnRadio5-" . $row['id'] ."\" autocomplete=\"off\">
                                          <label class=\"btn btn-outline-secondary\" for=\"btnRadio5-" . $row['id'] ."\">XXL</label>
                                        </div>
                                    </div>
                                    <div class=\"card-footer d-flex justify-content-between py-3\">
                                    <select class=\"form-select-sm\" aria-label=\"Small select\">
                                        <option selected=\"0\">Ch???n chu k?? g???i</option>";
                        $i = 1;
                        foreach($data["cycle"] as $row1){
                            echo "<option value=\"". $i . "\">G???i m???i ". $row1["cycle"] . "</option>";
                            $i += 1;
                        }
                    
                    // if($data["user"] == "member"){
                    //   echo "</select>
                    //           <button type=\"button\" class=\"btn btn-success btn-block\" onclick=\"add_combo(this);\">
                    //             Ch???nh s???a
                    //           </button>
                    //         </div>
                    //       </div>
                    //     </section></div>";
                    // } 
                    // else {
                    echo "</select>
                            <div>
                              <button type=\"button\" class=\"btn btn-danger\" id=\"deleteCombo-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#delcomboModal-" .$count . "\">
                                <i class=\"fas fa-trash\"></i> X??a
                              </button>
                            </div>
                            <div>
                              <button type=\"button\" class=\"btn btn-success\" id=\"updateCombo-btn-" . $row['id'] ."\" value = \"". $row['id']. "\" onClick = \"update_combo(this.value)\">
                                <i class=\"fas fa-edit\"></i> Ch???nh s???a
                              </button>
                            </div>
                          </div>
                          </div>
                        </section>";
                        echo "<div class=\"modal fade\" id=\"delcomboModal-" .$count . "\" tabindex=\"-1\" aria-labelledby=\"delcomboModalLabel-" .$count . "\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\">
                          <div class=\"modal-content\">
                            <div class=\"modal-header\">
                              <h5 class=\"modal-title\" id=\"delcomboModalLabel-" .$count . "\">X??c nh???n</h5>
                              <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                              B???n c?? ch???c ch???n mu???n x??a g??i n??y
                            </div>
                            <div class=\"modal-footer\">
                              <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">????ng</button>
                              <button type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\" onclick=\"remove_combo(" . (int)$row["id"] . ", this)\">X??c nh???n</button>
                            </div>
                          </div>
                        </div>
                      </div>";  
                      echo "</div>";  
                      $count += 1;

                      echo "<div id=\"updateCombo-modal-" . $row['id']. "\" class=\"add-combo-modal\">
                    <div class=\"addCombo-modal-content\">
                      <div class=\"addCombo-modal-header\" id=\"updateCombo-modal\">
                        <span class=\"close-modal-addc-update-". $row['id']. "\">&times;</span>
                        <h2>Ch???nh s???a g??i</h2>
                      </div>
                      <div class=\"addCombo-modal-body\">
                        <form action=\"?url=Home/update_new_combo\" method=\"POST\">
                          <div class=\"row\">
                            
                            <div class=\"col-lg-8\"><input value =\"" . $row["id"] . "\" type=\"text\" name=\"cid\" placeholder=\"Nh???p t??n combo\" hidden></div>
                          </div>
                          <div class=\"row\">
                            <label class=\"col-lg-4\" for=\"cname\">
                              T??n combo: 
                            </label>
                            <div class=\"col-lg-8\"><input value =\"" . $row["name"] . "\" type=\"text\" name=\"cname\" placeholder=\"Nh???p t??n combo\" class=\"form-control is-valid\" id=\"validationSuccess\" required></div>
                          </div>
                          <div class=\"row\">
                            <label class=\"col-lg-4\" for=\"price\">
                              Gi??:
                            </label>
                            <div class=\"col-lg-8\"><input value =\"" . $row["price"] . "\" type=\"number\" name=\"price\" placeholder=\"Nh???p gi?? c???a combo\" class=\"form-control is-valid\" id=\"validationSuccess\" required></div>
                          </div>
                          <div class=\"row\">
                            <label class=\"col-lg-4\" for=\"c-shirt\">
                              ??o:
                            </label>
                            <div class=\"col-lg-8\">
                              <select id=\"c-shirt\" name=\"c-shirt\">
                                <option selected disabled>Ch???n ??o cho combo</option>";
                                foreach($data["product"] as $row1){
                                    if($row1["cate"] == "Shirt"){
                                        echo "<option value=\"" . $row1["id"] . "\"";
                                          foreach($row["product"] as $row2){
                                            if($row1["name"] == $row2["name"]) echo " selected"; 
                                          } 
                                        echo">" . $row1["name"] . "</option>";
                                    }
                                }
                            echo "</select>
                            </div>
                          </div>
                          <div class=\"row\">
                            <label class=\"col-lg-4\" for=\"c-pants\">
                              Qu???n:
                            </label>
                            <div class=\"col-lg-8\">
                              <select id=\"c-pants\" name=\"c-pants\">
                                <option selected disabled>Ch???n qu???n cho combo</option>";
                                foreach($data["product"] as $row1){
                                    if($row1["cate"] == "Trousers"){
                                        echo "<option value=\"" . $row1["id"] . "\"";
                                          foreach($row["product"] as $row2){
                                            if($row1["name"] == $row2["name"]) echo " selected"; 
                                          } 
                                        echo">" . $row1["name"] . "</option>";
                                    }
                                }
                            echo "  </select>
                            </div>
                          </div>
                          <div class=\"row\">
                            <label class=\"col-lg-4\" for=\"c-ass\">
                              Ph??? ki???n:
                            </label>
                            <div class=\"col-lg-8\">
                              <select id=\"c-ass\" name=\"c-ass\">
                                <option selected disabled>Ch???n ph??? ki???n cho combo</option>";
                                foreach($data["product"] as $row1){
                                    if($row1["cate"] == "Accessories"){
                                        echo "<option value=\"" . $row1["id"] . "\"";
                                          foreach($row["product"] as $row2){
                                            if($row1["name"] == $row2["name"]) echo " selected"; 
                                          } 
                                        echo">" . $row1["name"] . "</option>";
                                    }
                                }
                             echo " </select>
                            </div>
                          </div>
                          <div class=\"btn-conf-add\">
                            <button type=\"submit\">Ho??n t???t ch???nh s???a</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>"; 

                  echo "<div id=\"addCombo-modal\" class=\"add-combo-modal\">
                    <div class=\"addCombo-modal-content\">
                      <div class=\"addCombo-modal-header\">
                        <span class=\"close-modal-addc\">&times;</span>
                        <h2>Th??m g??i m???i</h2>
                      </div>
                      <div class=\"addCombo-modal-body\">
                        <form action=\"?url=Home/add_new_combo\" method=\"POST\" class=\"needs-validation \" novalidate=\"\" >
                          <div class=\"row\">
                            <label class=\"col-lg-4\" for=\"cname\">
                              T??n combo:
                            </label>
                            <div class=\"col-lg-8\"><input type=\"text\" name=\"cname\" placeholder=\"Nh???p t??n combo\" class=\"form-control is-valid\" id=\"validationSuccess\" required></div>
                          </div>
                          <div class=\"row\">
                            <label class=\"col-lg-4\" for=\"price\">
                              Gi??:
                            </label>
                            <div class=\"col-lg-8\"><input type=\"number\" name=\"price\" placeholder=\"Nh???p gi?? c???a combo\" class=\"form-control is-valid\" id=\"validationSuccess\" required></div>
                          </div>
                          <div class=\"row\">
                            <label class=\"col-lg-4\" for=\"c-shirt\" class=\"form-control is-valid\" id=\"validationSuccess\" required>
                              ??o:
                            </label>
                            <div class=\"col-lg-8\">
                            <label for=\"validationCustom04\" class=\"form-label\" ></label>
                              <select id=\"c-shirt\" name=\"c-shirt\" class=\"form-select\" id=\"validationCustom04\" required=\"\">
                                <option selected=\"\" disabled=\"\" value=\"\">Ch???n ??o cho combo</option>";
                                foreach($data["product"] as $row){
                                    if($row["cate"] == "Shirt"){
                                        echo "<option value=\"" . $row["id"] . "\">" . $row["name"] . "</option>";
                                    }
                                }
                            echo "</select>
                            <div class=\"invalid-feedback\">
                                Vui l??ng ch???n ??o.
                            </div>
                            </div>
                          </div>
                          <div class=\"row\">
                            <label class=\"col-lg-4\" for=\"c-pants\" class=\"form-control is-valid\" id=\"validationSuccess\" required>
                              Qu???n:
                            </label>
                            <div class=\"col-lg-8\">
                            <label for=\"validationCustom05\" class=\"form-label\" ></label>
                              <select id=\"c-pants\" name=\"c-pants\" class=\"form-select\" id=\"validationCustom05\" required=\"\">
                                <option selected=\"\" disabled=\"\" value=\"\">Ch???n qu???n cho combo</option>";
                                foreach($data["product"] as $row){
                                    if($row["cate"] == "Trousers"){
                                        echo "<option value=\"" . $row["id"] . "\">" . $row["name"] . "</option>";
                                    }
                                }
                            echo "  </select>
                            <div class=\"invalid-feedback\">
                                Vui l??ng ch???n qu???n.
                            </div>
                            </div>
                          </div>
                          <div class=\"row\">
                            <label class=\"col-lg-4\" for=\"c-ass\" class=\"form-control is-valid\" id=\"validationSuccess\" required>
                              Ph??? ki???n:
                            </label>
                            <div class=\"col-lg-8\">
                            <label for=\"validationCustom06\" class=\"form-label\" ></label>
                              <select id=\"c-ass\" name=\"c-ass\" class=\"form-select\" id=\"validationCustom06\" required=\"\">
                                <option selected=\"\" disabled=\"\" value=\"\">Ch???n ph??? ki???n cho combo</option>";
                                foreach($data["product"] as $row){
                                    if($row["cate"] == "Accessories"){
                                        echo "<option value=\"" . $row["id"] . "\">" . $row["name"] . "</option>";
                                    }
                                }
                             echo " </select>
                            <div class=\"invalid-feedback\">
                                Vui l??ng ch???n ph??? ki???n.
                            </div>
                            </div>
                          </div>
                          <div class=\"btn-conf-add\">
                            <button type=\"submit\">Th??m Combo</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>";
                  
                }
              }    
            }
        ?>
        
        <div class="demo" hidden><?php if(!empty($data["user"])) echo $data["user"]; ?></div>
</div>

<!--div class="footer-holder"></div>
        <script src="../Views/footer/footerScript.js"></script-->
        
    <?php require_once "./Views/footer/index.php";?>
        <script src="../Views/Cost_table/myscript.js"></script>
</body>
</html>
