<?php
 include 'security.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/c9c86f68f1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>SocMed</title>
</head>
<body>
    <form action="savepost.php" method="GET">
    <div class="container">
        <div class="footer">
            <div class="col-12">
                <div class="row">
                    <div class="col-2">
                        <h3>SocMed</h3>
                        <a href="profile.php" style="margin-left: 700px;">Profile</a><a href="logout.php" style="margin-left: 50px; ">Logout</a>
                    </div>
                </div>
            </div>
        </div>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        <div class="content">
            <div class="col-12">
                <div class="row d-flex">
                    <div class="col-2">
                        <h5>Hi,<?= $_SESSION['username']; ?></h5>
                    </div>
                    <input type="hidden" name="id" id="id">
                    <div class="col-5">
                        <input class="form-control" name="isi_posting" id="isi_posting" cols="0" rows="4" placeholder="Mau Post Apa?">
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" id="cmd" name="cmd" value="save">POST</button>
                    </div>
                </div>
            </div>
        </div>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        <div class="post">
            <div class="col-12">
                <div class="row">

            <?php                
                include 'koneksi.php';       
                $sql = "SELECT * FROM tbtweets";
                $query = mysqli_query($con,$sql);
                $num = mysqli_num_rows($query);

                for($x = 1; $x <= $num; $x++){
                $result = mysqli_fetch_array($query);
                $id = $result['id'];
                $isi_posting = $result['isi_posting'];
                $username = $_SESSION['username'];
                echo "$username";
            ?>
<!-- Untuk membuat button save edit delete -->
                <div class="col-12 border" style="margin-right: 50px">
                    <h5><?php echo "$username" ?></h5>
                    <br><td><?php echo "$isi_posting" ?></td>
                    <br><td><input type="button" value="DELETE" name="cmd" id="cmd" onclick="f_del(<?php echo "$id, '$isi_posting'" ?>)"></td>
                    <br><td><input type="button" value="EDIT" onclick="f_edit(<?php echo "$id, '$isi_posting'" ?>)"></td>
                    <br><button type="button" data-toggle="modal" data-target="#exampleModal">Comment</button>
                </div>
                
                <?php
            }
        ?>
                </div>
            </div>
        </div>
    </div>
<!-- untuk bikin Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Comment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Comment</button>
              </div>
            </div>
          </div>
        </div>
    </form>

<!-- function untuk javascriptnya -->
<script> 
    function f_del(id){
        location.href="savepost.php?id="+id+"&cmd=delete";
    }
    function f_edit(id, isi_posting){
        document.getElementById('id').value = id;
        document.getElementById('isi_posting').value = isi_posting;
        document.getElementById('cmd').value = "update";
        document.getElementById('cmd').innerHTML = "Update";
    }
    function f_comment(id){
        document.getElementById('id').value = id;
        document.getElementById('cmd').value = "update";
        document.getElementById('cmd').value = "Update";
    }
</script>
</body>
</html>