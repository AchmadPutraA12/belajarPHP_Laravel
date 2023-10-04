<?php
include_once 'top.php';
include_once 'menu.php';
?>

<div>
    <div class="container-fluid px-4">
        <?php
        //membuat logic sederhana untuk mengarahkan url ke file
        // yang mempunyai extension .php
        //routing => file yang mengarahkan ke url

        $url = !isset($_GET['url'])?'dashboard':$_GET['url'];
        if($url == 'dashboard'){
            include_once 'dashboard.php';
        }
        else if($url == 'data'){
            include_once 'data.php';
        }
        else if($url == 'about'){
            include_once 'about.php';
        }
        else if($url == 'contact'){
            include_once 'contact.php';
        }
        else if(!empty($url)){
            include_once ''.$url.'.php';
        }else{
            include_once 'dashboard.php';
        }
        ?>
    </div>
</div>

<?php
include_once 'bottom.php';
?>