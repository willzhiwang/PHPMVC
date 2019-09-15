<?php use const http\Client\Curl\VERSIONS;

require APPROOT . '/views/inc/header.php';?>
    <div class="jumbotron jumbotron-flud text-center">
        <div class="container">
            <h6 class="display-3">
                <?php
                if (!empty($data)) {
                    echo $data['title'];
                }
                ?>
            </h6>

            <p >
                <?php
                if  (!empty($data)) {
                    echo $data['description'];
                }
                ?>
            </p>
            <p class="lead" >Version: <strong><?php echo VERSION; ?></strong></p>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php';?>