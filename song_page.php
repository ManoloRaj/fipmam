
<?php

function get_last_ID(){
    // load file
    $data = file_get_contents('json_hira/hira.json');
    // decode json to associative array
    $json_arr = json_decode($data, true);
    
    return end($json_arr)["id"];
    
}

//Function to use
function push_in_JSON($title, $content){
    // load file
    $data = file_get_contents('json_hira/hira.json');
    // decode json to associative array
    $json_arr = json_decode($data, true);

    $last_id = get_last_ID();


    // add data
    $json_arr[] = array('id'=>$last_id + 1, 'title'=>$title, 'content'=>$content);

    // encode json and save to file
    file_put_contents('json_hira/hira.json', json_encode($json_arr));
    
}

function get_JSON(){
    // load file
    $data = file_get_contents('json_hira/hira.json');
    // decode json to associative array
    $json_arr = json_decode($data, true);

    //view entire json
    foreach ($json_arr as $column)
        echo ('<ul class="list-group list-group-flush">

                  <li class="list-group-item list-group-item-dark margin-top-bottom" data-toggle="modal" data-target="#content'.$column["id"].'">
                  
                  '.$column["title"].'</li>
        
              </ul>
              
              <!-- The Modal -->
              <div class="modal" id="content'.$column["id"].'">
                 <div class="modal-dialog">
                    <div class="modal-content">
                       <!-- Modal Header -->
                       <div class="modal-header">
                          <h4 class="modal-title">'.$column["title"].'</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                       </div>
                       <!-- Modal body -->
                       <div class="modal-body">
                          '.$column["content"].'
                       </div>
                       <!-- Modal footer -->
                       <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                       </div>
                    </div>
                 </div>
              </div>

              ');

}

//push_in_JSON("lalao", "lalao am-pisindana");
echo (get_last_ID());
?>

<!DOCTYPE html>
<html>
<head>


    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FIPMAM Song</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="main.js"></script>

    <link rel="stylesheet" href="css_hira/bootstrap.min.css" >
    <script src="css_hira/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css_hira/main.css" />
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-J1V93F2FF7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-J1V93F2FF7');
</script>

</head>
<body>
    




    <div class="container" style="text-align : center">
   
    <div class="">
      <h1> FIPMAM Colony song</h1>
      <a type="button" class="btn btn-success" href="index.html">Back to home page</a><br>
      <?php get_JSON(); ?>
    </div>

<br>

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
           + Add song
      </button>
 
      <!-- The Modal -->
      <div class="modal" id="myModal">
         <div class="modal-dialog">
            <div class="modal-content">
               <!-- Modal Header -->
               <div class="modal-header">
                  <h4 class="modal-title">ADD SONG</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>

               <form action="add_to_cache_db.php" method="post">

               <!-- Modal body -->
               <div class="modal-body text-left">
                
                <div class="form-group">
                    <label for="formGroupExampleInput">Title</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="title" >
                </div>
                
                <div class="form-group ">
                    <label for="exampleFormControlTextarea1">Content</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
                </div>
               </div>
               <!-- Modal footer -->
               <div class="modal-footer">
                  <button type="submit" class="btn btn-success" >Add</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
               </div>

              </form>

            </div>
         </div>
      </div>

      <script src="css_hira/jquery-3.2.1.slim.min.js"></script>
      <script src="css_hira/popper.min.js"></script>
      <script src="css_hira/bootstrap.min.js"></script>
</body>
</html>