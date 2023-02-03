<?php
  // get database connection by require function

  require("dbConn.php");

  // menu items sql query as like that for handle to columns values
  $menuSql = "SELECT * FROM menu_item";
  // check to connection wiht sql query
  $menuRes = mysqli_query($conn, $menuSql);
  
  // get dropdown menu items from db wich items has number 2 for parent_id.
  $subSql = "SELECT * FROM menu_item WHERE parent_id=2";
  // check to sub menu query with connection
  $subRes = mysqli_query($conn, $subSql);

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- bootstrap 5 CDN links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- css codes for UI desing over menu bar (navbar) -->
    <style>
      *{ box-sizing: border-box;}
      


      .collapse .navbar-nav{
        width: 100%;
        display: flex;
        justify-content: space-around;
      }

      .navbar-link{
        text-decoration: none;
        color: white;
      }

      .dropdown-item{
        font-family: 'Times New Roman', Times, serif;
        font-size: 1.2em;
        font-weight: bold;
      }

      .logo{
        width: 38%;
        border-radius: 50%;
      }

      head1{
        opacity: 1;
      }

      .dropKunstler ul{
        padding: 0.3em;
        width: 300%;
      }
      /* css codes for small screen devices */
      @media only screen and (max-width: 720px){
        .logo{
          width: 100%;
        }
      }


    </style>

  </head>
  <body class="d-flex flex-column min-vh-100>    

    <div class="container-fluid head1">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark position-fixed w-100" style="z-index: 99;">
        <a href="#" class="data-brand"></a> /* navbar brand */
        <!-- button for when page using on small screen device will displayed automaticaly -->
        <button class="data-toggler bg-dark" type="button" id="show-btn" data-bs-toggle="collapse" data-bs-target="#menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse  navbar-collapse text-white" id="menu">
          <ul class="navbar-nav m-auto">
            <!-- first check to number of menu_item is more than zero -->
            <?php if(mysqli_num_rows($result) > 0){
              // if number of menu item more than 0 
              // than we can start to add an array key to display it
              while($menuRow = mysqli_fetch_array($menuRes)){
                // when we get values inside an array now we will check to
                // which type menu will draw if parent_id = 0 we will draw
                // normal menu item without dropdown...
                if($menuRow['parent_id'] == 0){ ?>
                  <!-- draw with li tag an normal menu item and get item_link and item_label -->
                  <!-- from database -->
                  <li class="navbar-item py-1 px-4"><a href="<?php echo $menuRow['item_link'];?>" class="navbar-link"><?php echo $menuRow['item_label']; ?></a></li>
                
                <!-- here check to parent id one more time for draw collapse/dropdown menu item -->
                <!-- if menu item parent_id = 1 that mean it has sub menu and will draw it with dropdown button -->
                <?php } if($menuRow['parent_id']==1) { ?>
                    <!-- assign to dropdown menu item_link and item_label with li tag -->
                    <li class="navbar-item dropdown dropKunstler">
                      <!-- dropdown button -->
                      <a href="#" class="dropdown-toggle px-4 py-1 text-white" style="text-decoration: none;" id="dropMenuBtn" data-bs-toggle="dropdown"><?php echo $menuRow['item_label']; ?></a>
                      <!-- ul tag for sub menu items -->
                      <ul class="dropdown-menu bg-dark" id="dropMenu">
                        <!-- assignment for get sub_items inside an array -->
                        <?php while($subRow = mysqli_fetch_array($subRes)){ ?>
                          <!-- assignment for sub item_link and item_label by li tag -->
                          <li><a class="dropdown-item py-1 px-4 text-secondary" href="<?php echo $subRow['item_link']; ?>?artist=<?php echo $subRow['item_label']; ?>"><?php echo $subRow['item_label']; ?></a></li>
                        <?php } ?>
                      </ul>
                    </li>
                <?php }
              }

            } ?>
          
          </ul>
        </div>
      </nav>
    </div>

    <!-- bootstrap 5, propper and jQuery CDN links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <!--  custom jQuery file to get functions dropdown button if its not works automaticaly with bootstrap -->
    <script src="/customJquery.js" type="text/javascript"></script>
  
  </body>

</html>