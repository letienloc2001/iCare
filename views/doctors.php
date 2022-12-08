<?php

class DoctorView{
  public function showAllDoctor($doctors){
    $item = 1;
    foreach ($doctors as $doctor):

        echo '<div class=" col-xl-4 col-sm-6 col-12 icare-item-col">
                        <div class="icare-card">
                            <div class="icare-item">
                                <div class="icare-item-front">
                                    <img class="icare-item-front_img" src="'. $doctor['image_url'] .'" alt="Doctor image_url" style="width: 100%; border-radius: 30px;" />
                                    <div class="icare-item-front_text">
                                        <p class="icare-item-front_name">'. $doctor['doc_name'] .'</p>
                                    </div>
                                </div>
                                <div class="icare-item-back">
                                    <div class="icare-item-back_overlay">
                                        <div class="icare-item-back_text">
                                            <a class="icare-item-back_name" href="#">'. $doctor['doc_name'] .'</a>
                                            <p class="icare-item-back_price">District: '. $doctor['district'] .'</p>
                                        </div>
                                    <div class="icare-item-buttons d-flex justify-content-center " >
                                        <div class="icare-item-button">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#QuickView'. $doctor['doc_id'] .'">
                                                <a href="./index.php?page=detail&id='. $doctor['doc_id'] .'"><i class="far fa-eye"></i></a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>';
        $item++;
    endforeach;
  }

    public function show3TopDoctors($doctors){
      $item = 1;
      $path = "";
      foreach ($doctors as $doctor):
          $address = "http://maps.google.com/maps?q=" . $doctor['clinic_number'] . " " . $doctor['street'] . ", " . $doctor['ward'] . ", " .
              $doctor['district'] . ", " . $doctor['city'] . "&output=embed";
        echo '<div class="col m-3 p-cpn-item-3rd ">
                <div class="p-cpn-item-3rd-front " style="padding-top: 30px;">
                    <img class="p-cpn-item-3rd-front__img " src="'. $doctor['image_url'] .'" alt="doctor_img"  style="border-radius: 10%;" />
                    <span class="p-cpn-item__break ">
                        <span></span>
                    </span>
                    <h1 class="p-cpn-item-3rd-front__name ">
                    '. $doctor['doc_name'] .'
                    </h1>
                    <h3 class="p-cpn-item-3rd-front__price ">District:
                        '. $doctor['district'] .'
                    </h3>
                    <br><br><br>
                    <iframe src="'. $address .'"
                    width="367" height="150" style="border:0;" allowfullscreen="" loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <br><br><br>
                    <h3 class="p-cpn-item-3rd-front__price ">
                        '. $doctor['star_reviews'] .' ⭐
                    </h3>
                </div>
                
                <div class="p-cpn-item-3rd-back ">
                     <div class="p-cpn-item-3rd-back__overlay">
                        <h1 class="p-cpn-item-3rd-back__name ">
                        '. $doctor['doc_name'] .'
                        </h1>
                        <h3 class="p-cpn-item-3rd-back__price ">District:
                            '. $doctor['district'] .'
                        </h3>
                        <a class="add-to-cart-btn " href="./index.php?page=doctors&search='. $doctor['doc_name'] .'">Make an appointment!</a>
                    </div>
                </div>             
              </div>';
          $item++;
      endforeach;
    }

//    public function showOneProduct($doctor){
//        echo $doctor['doc_id'];
//        echo '<br>';
//        echo $doctor['image_url'];
//        echo '<br>';
//        echo $doctor['doc_name'];
//        echo '<br>';
//        echo $doctor['Price'];
//        echo '<br>';
//        echo $doctor['Description'];
//        echo '<br>';
//    }

//    public function alertResultPopUp($ctrl, $result) {
//        $output = "";
//        if ($result == true)
//        {
//            $output .= '<script>
//                          var result = confirm("Successfully");
//                          if (result)
//                              location.href = "admin.php?ctrl='. $ctrl .'";
//                          else
//                              location.href = "admin.php?ctrl='. $ctrl .'";
//                        </script>';
//        }
//        else
//        {
//            $output .= '<script>
//                          alert("Failed");
//                        </script>';
//        }
//        return $output;
//    }

//    public function showCartModal($doctors)
//    {
//        foreach ($doctors as $doctor):
//          echo '<li class="d-flex">
//                  <div class="icare-shopping-product_img">
//                      <img src="'. $doctor['image_url'] .'" />
//                  </div>
//                  <div class="icare-shopping-product_text">
//                      <h3>'. $doctor['doc_name'] .'</h3>
//                      <span>'. $doctor['quantity'] .' &#215; $'. $doctor['Price'] .'Kg</span>
//                  </div>
//                  <div class="icare-shopping-product_remove">
//                      <button type="button">
//                        <i class="material-icons">highlight_off</i>
//                      </button>
//                  </div>
//                </li>';
//        endforeach;
//    }

    public function showAllTag($tags){
      foreach ($tags as $tag):
        echo '<a class="tag-cloud" href="./index.php?page=doctors&tag='. $tag['spec_id'] .'">'. $tag['spec_name'] .'</a>';
      endforeach;
    }
//
//    public function showTagFooter($tags){
//      foreach ($tags as $tag):
//        echo '<li>
//                <a href="shop.php?tag='. $tag .'">'. $tag .'</a>
//            </li>';
//      endforeach;
//    }

}
