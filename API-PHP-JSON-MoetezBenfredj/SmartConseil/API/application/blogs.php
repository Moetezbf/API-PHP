<?php
require_once('template.php'); 
ob_start();
?>
<?php
$json = file_get_contents('http://localhost/SmartConseil/API/');
$data = json_decode($json,true);
echo "<pre>";
 ?>
 <div class="container">
    <div class="row row-cols-3 row-cols-md-3 g-3">
        <?php foreach ($data as $data) {?>    
            <div class="col">
                        <div class="card" style="width: 25rem;">
                        <img src="<?=$data['Image']?>" class="card-img-top"style="width: 400px; height: 300px;">
                            <div class="card-body">
                                <h5 class="card-title"><?=$data['Title']?></h5>
                                <p class="card-text mb-1"><?=$data['Introduction']?></p>
                            </div>
                            <div class="card-footer">
                                <!-- //bootstrap icons calender SVG->  -->
                                <p class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>&nbsp<?=$data['LastMod']?>&nbsp&nbsp<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-code-fill" viewBox="0 0 16 16">
                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.646 7.646a.5.5 0 1 1 .708.708L5.707 10l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zm2.708 0 2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 10 8.646 8.354a.5.5 0 1 1 .708-.708z"/>
                            </svg>&nbsp<?=$data['IdTheme']?></p>                     
                            </div>
                        </div>
            </div>   
        <?php }exit;?> 
    </div> 
</div>
 <?php
$content = ob_get_clean(); //vider le buffer est placer les donnes dans le content 
