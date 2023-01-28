 <section class="section dashboard">
      <div class="row">

        
              <!-- Modal Dialog Scrollable -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable">
                Modal Dialog Scrollable
              </button>
              <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Modal Dialog Scrollable</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
                      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                      This content should appear at the bottom after you scroll.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>

              </div>
              <!-- End Modal Dialog Scrollable -->  
 
             
        

      </div> 
    </section>


  <?php 
require_once("config_db.php");

// if (isset($_SESSION["login_sess"])) {
//    header("Location: welcome.php");
// }

$email = $pwd = "";
 
if ($_SERVER["REQUEST_METHOD"]=="POST"){

  
 $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match('/^[a-zA-Z0-9]{5,}$/', $username)) {
       echo "<div class='alert alert-warning'>Your Username accepts only alphanumeric & longer than or equals 5 chars
        </div>";
      // $fname_err = "Your Username only letters and white space allowed";
      $error_val= "set";
    }


 
    $pwd = test_input($_POST["pwd"]);
    if (preg_match("/^[a-zA-Z][0-9a-zA-Z_!$@#^&]{5,20}$/", $pwd)){
      $pwd_err = "Only accepts password length between 5 and 20, start with character";
     }
    // $options = array("cost"=>4);
    // $pwd_hashed = password_hash($pwd,PASSWORD_BCRYPT,$options);
  

   if(!empty($username)){
    $sql = "SELECT * FROM email_sys WHERE username = '$username'";
   $result = mysqli_query($conn, $sql);
   $username_row = mysqli_fetch_array($result, MYSQLI_ASSOC);

   if (!$username_row) {
   
                echo "<div class='alert alert-danger'>Username does not match</div>";
            }
              else{
                  if (password_verify($pwd, $email_row["password"])) {
                    // session_start();
                    $_SESSION["welcome"]="1"; 
                    $_SESSION["username"]= $username;

                     if(isset($_SESSION["welcome"])) {
                     header("Location: dashboard.php");
                     echo "<div class='alert alert-success'>login successfully</div>";
                     }
                    
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
              }
            }
          

            
            }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

   
?>