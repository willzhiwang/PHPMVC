<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="jumbotron jumbotron-flud text-center">
    <div class="container">
    <h1 class="display-3">
        <?php
        if (!empty($data)) {
            echo $data['title'];
        }
        ?>
    </h1>
    <p class="lead">
        <?php
        if  (!empty($data)) {
            echo $data['description'];
        }
        ?>
    </p>
    </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>