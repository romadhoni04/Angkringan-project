<!DOCTYPE html>

<?php
include "connection/koneksi.php";
session_start();
ob_start();

$id = $_SESSION['id_user'];

if (isset($_SESSION['edit_menu'])) {
  echo $_SESSION['edit_menu'];
  unset($_SESSION['edit_menu']);
}

if (isset($_SESSION['username'])) {

  $query = "select * from tb_user natural join tb_level where id_user = $id";

  mysqli_query($conn, $query);
  $sql = mysqli_query($conn, $query);

  while ($r = mysqli_fetch_array($sql)) {

    $nama_user = $r['nama_user'];

?>

    <html lang="en">

    <head>
      <title>Menu Angkringan</title>
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
        <h1><a href="menu_angkringan.php">Menu Angkringan</a></h1>
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
          <!--<li class=""><a title="" href="logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>-->
        </ul>
      </div>
      <!--close-top-Header-menu-->
      <!--start-top-serch-->

      <!--close-top-serch-->
      <!--sidebar-menu-->
      <div id="sidebar"><a href="menu_angkringan.php" class="visible-phone"><i class="icon icon-book"></i> <span>Menu Angkringan</span></a>
        <ul>
          <?php
          if ($r['id_level'] == 1) {
          ?>
            <li><a href="data_angkringan.php"><i class="icon icon-tasks"></i> <span>Data Angkringan</span></a> </li>
            <li> <a href="menu_angkringan.php"><i class="icon icon-book"></i> <span>Menu Angkringan</span></a> </li>
            <li class="active"> <a href="upload_gambar.php"><i class="icon icon-plus"></i> <span>Upload Gambar</span></a> </li>
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
          <div id="breadcrumb"> <a href="upload_gambar.php" title="Go to here" class="tip-bottom"><i class="icon icon-book"></i>Upload Gambar</a></div>
        </div>
        <!--End-breadcrumbs-->

        <!--Action boxes-->
        <div class="container-fluid">
          <div class="row-fluid">
            <?php
            if ($r['id_level'] == 1) {
            ?>
              <div class="widget-box">
                <div class="widget-title bg_lg"><span class="icon"><i class="icon-th-large"></i></span>
                  <h5>Referensi Gambar</h5>
                  <a href="tambah_gambar.php" class="btn btn-info btn-mini label"><i class="icon-plus"></i>&nbsp;Tambah Gambar</a>
                </div>
                <div class="widget-content">
                  <ul class="thumbnails">
                    <div class="btn-icon-pg">
                      <ul>
                        <!--Looping-->
                        <?php
                        $query_data_gambar = "select * from tb_gambar order by id desc";
                        $sql_data_gambar = mysqli_query($conn, $query_data_gambar);
                        $no_gambar = 1;

                        while ($data_gambar = mysqli_fetch_array($sql_data_gambar)) {
                        ?>
                          <li class="span2">
                            <a> <img src="gambar/<?php echo $data_gambar['gambar'] ?>" alt=""> </a>
                            <div class="actions">
                              <a class="lightbox_trigger" href="gambar/<?php echo $data_gambar['gambar']; ?>"><i class="icon-search"></i>&nbsp;Lihat</a>
                            </div>
                            <table class="table table-bordered">
                              <tbody>
                                <tr>
                                  <td>Kode</td>
                                  <td><?php echo $data_gambar['kode']; ?> </td>
                                </tr>

                              </tbody>
                            </table>
                            <form action="" method="post">
                              <button type="submit" value="<?php echo $data_gambar['id']; ?>" name="edit_menu" class="btn btn-success btn-mini"><i class='icon-pencil'></i>&nbsp;&nbsp;Edit &nbsp;&nbsp;</button>

                              <button type="submit" value="<?php echo $data_gambar['id']; ?>" name="hapus_menu" class="btn btn-mini btn-danger" onclick="return confirm('Apakah anda yakin?')">
                                <i class='icon icon-trash'></i>&nbsp; Hapus</button>
                            </form>
                          </li>

                        <?php
                        }
                        if (isset($_REQUEST['hapus_menu'])) {
                          //echo $_REQUEST['hapus_menu'];
                          $id = $_REQUEST['hapus_menu'];

                          $query_lihat = "select * from tb_gambar where id = $id";
                          $sql_lihat = mysqli_query($conn, $query_lihat);
                          $result_lihat = mysqli_fetch_array($sql_lihat);
                          if (file_exists('gambar/' . $result_lihat['gambar'])) {
                            //echo $result_lihat['gambar'];
                            unlink('gambar/' . $result_lihat['gambar']);
                          }
                          $query_hapus = "delete from tb_gambar where id = $id";
                          $sql_hapus = mysqli_query($conn, $query_hapus);
                          if ($sql_hapus) {
                            header('location: upload_gambar.php');
                          }
                        }

                        if (isset($_REQUEST['edit_menu'])) {
                          //echo $_REQUEST['hapus_menu'];
                          $id = $_REQUEST['edit_menu'];
                          $_SESSION['edit_menu'] = $id;

                          header('location: tambah_gambar.php');
                        }
                        ?>
                        <!--End Looping-->
                      </ul>
                    </div>
                  </ul>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
          <!--End-Action boxes-->
        </div>
      </div>

      <!--end-main-container-part-->

      <!--Footer-part-->

      <div class="row-fluid">
        <div id="footer" class="span12"> <?php echo date('Y'); ?> &copy; Angkringan-O <a href="#">by Muda Berkarya</a> </div>
      </div>

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
  }
} else {
  header('location: logout.php');
}
ob_flush();
?>