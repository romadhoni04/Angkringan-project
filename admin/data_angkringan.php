<!DOCTYPE html>

<?php
include "connection/koneksi.php";
session_start();
ob_start();

$id = $_SESSION['id_user'];


if (isset($_SESSION['edit_data'])) {
  echo $_SESSION['edit_data'];
  unset($_SESSION['edit_data']);
}

if (isset($_SESSION['username'])) {

  $query = "select * from tb_user natural join tb_level where id_user = $id";

  mysqli_query($conn, $query);
  $sql = mysqli_query($conn, $query);

  while ($r = mysqli_fetch_array($sql)) {

    $nama_user = $r['nama_user'];
    // $uang = 0;

?>

    <html lang="en">

    <head>
      <title>Data || Angkringan</title>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="template/dashboard/css/bootstrap.min.css" />
      <link rel="stylesheet" href="template/dashboard/css/bootstrap-responsive.min.css" />
      <link rel="stylesheet" href="template/dashboard/css/fullcalendar.css" />
      <link rel="stylesheet" href="template/dashboard/css/matrix-style.css" />
      <link rel="stylesheet" href="template/dashboard/css/matrix-media.css" />
      <link href="template/dashboard/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <link rel="stylesheet" href="template/dashboard/css/jquery.gritter.css" />
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    </head>

    <body>

      <!--Header-part-->
      <div id="header">
        <h1><a href="data_angkringan.php">Data Angkringan</a></h1>
      </div>
      <!--close-Header-part-->

      <!--top-Header-menu-->
      <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav">
          <li class="dropdown" id="profile-messages"><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i> <span class="text">Welcome <?php echo $r['nama_user']; ?></span><b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="icon-user"></i><?php echo "&nbsp;&nbsp;" . $r['nama_level']; ?></a></li>
              <li onclick="return confirm('Apakah anda ingin keluar?')">
                <a href="logout.php"><i class="icon-key"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- <li class=""><a title="" href="logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>-->
        </ul>
      </div>
      <!--close-top-Header-menu-->
      <!--start-top-serch-->

      <!--close-top-serch-->
      <!--sidebar-menu-->
      <div id="sidebar"><a href="data_angkringan.php" class="visible-phone"><i class="icon icon-tasks"></i> <span>Data Angkringan</span></a>
        <ul>
          <?php
          if ($r['id_level'] == 1) {
          ?>
            <li class="active"> <a href="data_angkringan.php"><i class="icon icon-tasks"></i> <span>Data Angkringan</span></a> </li>
            <li> <a href="menu_angkringan.php"><i class="icon icon-book "></i> <span>Menu Angkringan</span></a> </li>
            <li> <a href="upload_gambar.php"><i class="icon icon-plus "></i> <span>Upload Gambar</span></a> </li>
            <li onclick="return confirm('Apakah anda ingin keluar?')">
              <a href="logout.php"><i class="icon icon-share-alt"></i> <span>Logout</span></a>
            </li>
          <?php
          }
          ?>
        </ul>
      </div>
      <!--sidebar-menu-->

      <!--main-container-part-->
      <div id="content">
        <!--breadcrumbs-->
        <div id="content-header">
          <div id="breadcrumb"> <a href="data_angkringan.php" title="Go to here" class="tip-bottom"><i class="icon icon-tasks"></i> Data Angkringan</a></div>
        </div>
        <!--End-breadcrumbs-->

        <div class="container-fluid">
          <?php
          if ($r['id_level'] == 1) {
          ?>
            <div class="widget-content">
              <div class="row-fluid">
                <div class="widget-box">
                  <div class="widget-title bg_lg"><span class="icon"><i class="icon-th-large"></i></span>
                    <h5>Data Angkringan</h5>
                    <a href="tambah_dataangkringan.php" class="btn btn-info btn-mini label"><i class="icon-plus"></i>&nbsp;Tambah Data</a>
                  </div>
                  <div class="widget-content nopadding">
                    <table class="table table-bordered table-invoice-full">
                      <thead>
                        <tr>
                          <th class="head0">Kode</th>
                          <th class="head0">Nama Angkringan</th>
                          <th class="head1">Nama Pemilik Angkringan</th>
                          <th class="head0">Nomor</th>
                          <th class="head0 right">Alamat</th>
                          <th class="head0 right">Maps</th>
                          <th class="head0 right">Deskripsi</th>
                          <th class="head0 right">Aksi</th>
                        </tr>
                      </thead>
                      <?php
                      //  $kode = 1;

                      $query_lihat_menu = "select * from tb_dataangkringan";
                      $sql_lihat_menu = mysqli_query($conn, $query_lihat_menu);

                      ?>
                      <tbody>
                        <?php
                        while ($r_lihat_menu = mysqli_fetch_array($sql_lihat_menu)) {
                        ?>
                          <tr>
                            <!--<td><center><?php echo $no++; ?>.</center></td>-->
                            <td>
                              <center><?php echo $r_lihat_menu['kode']; ?>
                            </td>
                            <td>
                              <center><?php echo $r_lihat_menu['namaangkringan']; ?></center>
                            </td>
                            <td>
                              <center><?php echo $r_lihat_menu['nama']; ?>
                            </td>
                            <td>
                              <center><?php echo $r_lihat_menu['nomor']; ?></center>
                            </td>
                            <td>
                              <center><?php echo $r_lihat_menu['alamat']; ?>
                            </td>
                            <td>
                              <center><?php echo $r_lihat_menu['maps']; ?>
                            </td>
                            <td>
                              <center><?php echo $r_lihat_menu['deskripsi']; ?></center>
                            </td>
                            <td>
                              <center>
                                <form action="" method="post">
                                  <a href="edit_data.php?kode=<?php echo $r_lihat_menu['kode']; ?>" class="btn btn-success btn-mini">
                                    <li class='icon-pencil'></li> Edit
                                  </a>
                                  <a href="delete_data.php?kode=<?php echo $r_lihat_menu['kode']; ?>" class="btn btn-mini btn-danger" onclick="return confirm('Apakah anda yakin?')">

                                    <li class='icon icon-trash'></li> Hapus
                                  </a>
                                </form>
                              </center>

                            </td>
                          </tr>

                        <?php
                        }
                        //echo $uang;
                        ?>

                      </tbody>

                    <?php
                  }
                  /*if(isset($_REQUEST['hapus_menu'])){
                //echo $_REQUEST['hapus_menu'];
                $kode = $_REQUEST['hapus_menu'];

                $query_lihat = "select * from tb_dataangkringan where kode = $kode";
                $sql_lihat = mysqli_query($conn, $query_lihat);
                $result_lihat = mysqli_fetch_array($sql_lihat);
          
                $query_hapus_data = "delete from tb_dataangkringan where kode = $kode";
                $sql_hapus_data= mysqli_query($conn, $query_hapus_data);
                if($sql_hapus_data){
                  header('location: data_angkringan.php');
                }
              }*/


                  if (isset($_REQUEST['edit_data'])) {
                    //echo $_REQUEST['hapus_menu'];
                    $id = $_REQUEST['edit_data'];
                    $_SESSION['edit_data'] = $id;

                    header('location: edit_data.php');
                  }
                    ?>

                    <!--End Looping-->
                    </table>
                  </div>
                </div>

              </div>
            <?php
          }
            ?>
            </div>
        </div>
      </div>
      <!--end-main-container-part-->

      <!--Footer-part-->

      <?php include "footer.php" ?>


      <!--end-Footer-part-->

      <script src="template/dashboard/js/excanvas.min.js"></script>
      <script src="template/dashboard/js/jquery.min.js"></script>
      <script src="template/dashboard/js/jquery.ui.custom.js"></script>
      <script src="template/dashboard/js/bootstrap.min.js"></script>
      <script src="template/dashboard/js/jquery.flot.min.js"></script>
      <script src="template/dashboard/js/jquery.flot.resize.min.js"></script>
      <script src="template/dashboard/js/jquery.peity.min.js"></script>
      <script src="template/dashboard/js/fullcalendar.min.js"></script>
      <script src="template/dashboard/js/matrix.js"></script>
      <script src="template/dashboard/js/matrix.dashboard.js"></script>
      <script src="template/dashboard/js/jquery.gritter.min.js"></script>
      <script src="template/dashboard/js/matrix.interface.js"></script>
      <script src="template/dashboard/js/matrix.chat.js"></script>
      <script src="template/dashboard/js/jquery.validate.js"></script>
      <script src="template/dashboard/js/matrix.form_validation.js"></script>
      <script src="template/dashboard/js/jquery.wizard.js"></script>
      <script src="template/dashboard/js/jquery.uniform.js"></script>
      <script src="template/dashboard/js/select2.min.js"></script>
      <script src="template/dashboard/js/matrix.popover.js"></script>
      <script src="template/dashboard/js/jquery.dataTables.min.js"></script>
      <script src="template/dashboard/js/matrix.tables.js"></script>

      <script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage(newURL) {

          // if url is empty, skip the menu dividers and reset the menu selection to default
          if (newURL != "") {

            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-") {
              resetMenu();
            }
            // else, send page to designated URL            
            else {
              document.location.href = newURL;
            }
          }
        }

        // resets the menu selection upon entry to this page:
        function resetMenu() {
          document.gomenu.selector.selectedIndex = 2;
        }
      </script>
    </body>

    </html>
  <?php

} else {
  header('location: logout.php');
}
ob_flush();
  ?>