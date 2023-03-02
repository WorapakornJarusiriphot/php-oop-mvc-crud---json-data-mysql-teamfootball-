<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>นักฟุตบอล - คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏนครปฐม</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <!-- <link href="css/styles.css" rel="stylesheet" /> -->

  <link href="../css/styles.css" rel="stylesheet" />
  <link href="../css/css.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/c150442d6f.js" crossorigin="anonymous"></script>
  <script type="text/javascript"
    src="https://platform-api.sharethis.com/js/sharethis.js#property=6146da0840d29100191b272f&product=inline-share-buttons"
    async="async"></script>
</head>

<body>

  <?php

// include_once 'model/ConDB.php';
// include_once 'model/Player.php';
include_once("../model/ConDB.php");
include_once("../model/Player.php");


  $identifier = htmlspecialchars($_GET["identifier"]);
  // echo $identifier;
  $obj_name = new Player();
  $rs2 = $obj_name->getPlayerDetail($identifier)
  // echo $rs2['identifier']
  ?>

  <!-- Responsive navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">

        <a class="navbar-brand " href="../view_Player.php"><i class="fas fa-angle-left"></i> นักฟุตบอล</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item "><a class="nav-link " aria-current="page"
                href="http://sc.npru.ac.th/">คณะวิทยาศาสตร์และเทคโนโลยี</a></li>
            <li class="nav-item "><a class="nav-link " href="https://forms.gle/Gd6Yzdffsb83qpZw7"
                target="_blank">ยืนยันการชำระเงิน</a></li>
            <!-- <li class="nav-item bg-or-3 rounded"><a class="nav-link text-light ms-2 ms-md-auto" href="../">หลักสูตรทั้งหมด</a></li> -->
          </ul>

      </div>
    </div>
  </nav>

  <!-- Page content-->
  <div class="container mt-4" data-bs-spy="scroll" data-bs-target="#list-example">
    <div class="row">

      <div class="col-lg-8">
        <!-- Post content-->
        <article>
          <!-- Post header-->
          <header class="mb-4">
            <!-- <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="../index.html" class="badge bg-or-2 text-decoration-none link-light">Home</a> </li>
                                  <li class="breadcrumb-item active" aria-current="page">การอบรมเชิงปฏิบัติการการพัฒนา TPACK สำหรับครูวิทยาศาสตร์</li>
                                </ol>
                              </nav> -->
            <!-- Post title-->
            <h1 class="fw-bolder mb-1">
              <?php
              echo $rs2['first_name'];
              ?>
            </h1>
            <!-- Post meta content-->
            <div class="text-muted fst-italic mb-2">last_name 
            <?php echo $rs2['last_name']?>
          </div>
            <!-- <div class="sharethis-inline-share-buttons"></div> -->




            <!-- Post categories-->
            <!-- <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                              <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a> -->
          </header>
          <!-- Preview image figure-->
          <figure class="mb-4"><img class="img-fluid rounded" src="../images/<?=$rs2['image'];?>" alt="..." /></figure>
          <!-- Post content-->
          <section class="mb-5 Player-body">
            <!-- <h5 class="fw-bolder mb-4 mt-5 " id="list-item-1" ><i class="fas fa-book-reader"></i> คำอธิบายหลักสูตร หลักการและเหตุผล</h5>
                              <p class="fs-6 mb-4 Player-content">
                                สามารถพัฒนา TPACK สำหรับครูวิทยาศาสตร์ สามารถออกแบบแผนการจัดการเรียนรู้ในการ บูรณาการ TPACK ได้
                              </p> -->

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-3"></i> last_name</h5>
            <p class="fs-6 mb-4 Player-content"><?php echo $rs2['last_name']?></p>

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-31"></i> team</h5>
            <p class="fs-6 mb-4 Player-content"><?php echo $rs2['team']?></p>

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-32"></i> position </h5>
            <p class="fs-6 mb-4 Player-content"><?php echo $rs2['position']?></p>


            </ul>



            <!-- <h4 class="fw-bolder mb-4 mt-5">ประเภทของนักฟุตบอล</h4> -->

            <!-- <h5 class="fw-bolder mb-4 mt-5" id="list-item-9">ประเภทของนักฟุตบอล </h5>
                                <p class="fs-6 mb-4 Player-content">เข้าระบบคลังหน่วยกิต</p> -->


            </ul>



      </div>

      </section>

      </article>


      <!-- Side widgets-->
      <div class="col-lg-4  d-none d-lg-block">

        <div id="list-example " class="list-group sticky-top ">
          <div class="card-header bg-or-4"><a class=" list-group-item-action text-light" href="#"></a></div>
          <!-- <a class="list-group-item list-group-item-action" href="#list-item-1"><i class="fas fa-book-reader"></i> คำอธิบายหลักสูตร</a> -->
          <a class="list-group-item list-group-item-action" href="#list-item-3"></i>
          last_name</a>
          <a class="list-group-item list-group-item-action" href="#list-item-3"></i>
          team</a>
          <a class="list-group-item list-group-item-action" href="#list-item-5"></i>
          position</a>



          </div>
          <div class="my-3 card-rela">
          <!-- <a class="btn btn-success" href="../view/form_register_Player.php?identifier=<?=$rs2['identifier']?>">ลงทะเบียน</a> -->
            
            <a class="btn btn-outline-warning" href="../view/form_edit_Player.php?identifier=<?=$rs2['identifier']?>">EDIT</a>
            <a class="btn btn-outline-danger" href="con_del_Player.php?identifier=<?=$rs2['identifier']?>" onclick="return confirm('คุณต้องการจะลบข้อมูลชุดนี้หรือไม่? แน่ใจนะ!!')">DELETE</a>
          </div>
        </div>

      </div>
    </div>
  </div>



  <!-- Footer-->
  <!-- <div class="container-fluid bg-orange d-lg-none fixed-bottom text-center">
    <div class="my-2 "><i class="fas fa-wallet"></i> ค่าลงทะเบียน 1,000 บาท/คน</div>
    <div class="mb-1">
      <a href="https://forms.gle/SC6zWtHG8bFuE2Vx5" target="_blank" class="btn btn-success ">ลงทะเบียน</a>
      <a href="#list-item-10" class="btn btn-light float-sm-right">สอบถามเพิ่มเติม</a>
    </div> -->

    <!-- <a href="#" class="btn btn-success stretched-link" style="position: fixed; bottom: 0px; right: 0px;">ลงทะเบียน</a> -->
  </div>

  <footer class="py-lg-5 bg-green ">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy;  Nakhon Pathom
        Rajabhat University 2021</p>
    </div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>

</html>