<html>   
  <head>   
    <title>Pagination</title>   
    <link rel="stylesheet"  
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
    <link rel="stylesheet" href="style.css">  
  </head>   
  <body>   
  <center>  
    <?php  
    // Import the file where we defined the connection to Database.     
        require_once "connection.php";   
        $per_page_record = 10;  // Number of entries to show in a page.   
        // Look for a GET variable page if not found default is 1.        
        if(isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {    
          $page=1;    
        }    
        $start_from = ($page-1) * $per_page_record;

        if(isset($_GET['family']))
        {
            $search = $_GET['family'];
            $query = "SELECT * FROM users WHERE family LIKE '%$search%'";
        } 
        elseif(isset($_GET['phone']))
        { 
            $search = $_GET['phone'];
            $query = "SELECT * FROM users WHERE phone LIKE '%$search%'";    
        } 
        elseif(isset($_GET['code-melli']))
        { 
            $search = $_GET['code-melli'];
            $query = "SELECT * FROM users WHERE code_melli LIKE '%$search%'";    
        } else { 

            $query = "SELECT * FROM users LIMIT $start_from, $per_page_record";
        }

        $rs_result = mysqli_query ($conn, $query);    
    ?>    
    <div class="container">   
      <br>   
      <div>   
        <h1>Search</h1>  
        <center> 
            <div style="display : flex">
                <form action="" style="margin-right: 10px;">
                    <input type="text" name="family" placeholder="famile" >
                    <button  class="btn" type="submit">search by family name</button>
                </form>  

                <form action="" style="margin-right: 10px;">
                    <input type="text" name="code-melli"placeholder="code melli">
                    <button class="btn"  type="submit">search by code_melli</button>
                </form> 

                <form action="" style="margin-right: 10px;" >
                    <input type="text" name="phone" placeholder="phone">
                    <button  class="btn" type="submit">search by phone</button>
                </form> 
              
                <a class="btn bg-danger"  href="/second-task/index.php">clear search</a>
            </div> 
        </center>
        <table class="table table-striped table-condensed table-bordered">   
          <thead>   
            <tr>     
              <th>family</th>   
              <th>code_melli</th>   
              <th>phone</th>   
            </tr>   
          </thead>   
          <tbody>   
    <?php     
            while ($row = mysqli_fetch_array($rs_result)) {    
                  // Display each field of the records.    
            ?>     
            <tr>     
            <td><?php echo $row["family"]; ?></td>     
            <td><?php echo $row["code_melli"]; ?></td>   
            <td><?php echo $row["phone"]; ?></td>                                          
            </tr>     
            <?php     
                };    
            ?>     
          </tbody>   
        </table>   
     <div class="pagination">    
      <?php

        $param_key = null;
        $search = null;

        if(isset($_GET['family']))
        {
            $param_key = 'family';
            $search = $_GET['family'];
            $query = "SELECT COUNT(*) FROM users WHERE family LIKE '%$search%'";
        } 
        elseif(isset($_GET['phone']))
        {
            $param_key = 'phone';
            $search = $_GET['phone'];
            $query = "SELECT COUNT(*) FROM users WHERE phone LIKE '%$search%'";    
        } 
        elseif(isset($_GET['code-melli']))
        {
            $param_key = 'code-melli';
            $search = $_GET['code-melli'];
            $query = "SELECT COUNT(*) FROM users WHERE code_melli LIKE '%$search%'";    
        } else {
            $query = "SELECT COUNT(*) FROM users";
        }       
        $rs_result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
        if($page>=2){   
            echo "<a href='index.php?page=".($page-1)."'>  Prev </a>";   
        }       
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='index.php?page=".$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='index.php?page=".$i."&'" . $param_key . '=' . $search . ">".$i." </a>";     
          }   
        };     
        echo $pagLink;   
        if($page<$total_pages){   
            echo "<a href='index.php?page=".($page+1)."'>  Next </a>";   
        }   
      ?>    
      </div>  
      <div class="inline">   
      <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
      placeholder="<?php echo $page."/".$total_pages; ?>" required>   
      <button onClick="go2Page();">Go</button>   
     </div>    
    </div>   
  </div>  
</center>   
  <script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'index.php?page='+page;   
    }   
  </script>  
  </body>   
</html>