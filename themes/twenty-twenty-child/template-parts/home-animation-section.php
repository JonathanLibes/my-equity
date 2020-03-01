<!-- Data Analysis Section -->

<div class="jumbotron full-screen data-analysis m-hide">
        <div class="container-fluid d-flex h-100">
            <div class="row justify-content-center align-self-center data-analysis-body">
                <div class="col-lg-1"></div>
                <div class="col-lg-8 data-analysis-body__img">
                    <img id="bg-data-analysis" src="<?= get_field("da_background_image")["sizes"]["large"] ?>" alt="Data Analysis">
                </div>
                <div class="col-lg-3 d-flex">
                    <div class="justify-content-center align-self-center">
                        <?= get_field('da_content') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Asset Management Section -->

    <div class="jumbotron full-screen asset-management m-hide">
        <div class="container-fluid d-flex h-100">
            <div class="row justify-content-center align-self-center asset-management-body">
                <div class="col-lg-8 asset-management-body__img">
                    <img id="bg-asset-management" src="<?= get_field("am_background_image")["url"] ?>" alt="Asset Management">

                </div>
                <div class="col-lg-3 d-flex">
                    <div class="justify-content-center align-self-center">
                        <?= get_field('am_content') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Asset Management Section -->

    <div class="jumbotron full-screen knowledge m-hide">
        <div class="container-fluid d-flex h-100">
            <div class="row justify-content-center align-self-center knowledge-body">
                <div class="col-lg-3 d-flex">
                    <div class="justify-content-center align-self-center">
                        <?= get_field('k_content') ?>
                    </div>
                </div>
                <div class="col-lg-8 knowledge-body__img">
                    <img id="bg-knowledge" src="<?= get_field("k_background_image")["sizes"]["large"] ?>" alt="Asset Management">
                </div>
            </div>
        </div>
    </div>

    <!-- ################################################################### -->
    <!-- #################### Mobile Section Starts Here ################### -->
    <!-- ################################################################### -->

    <div class="home-mobile-blocks data-block-mobile d-hide">
        <div class="img-container">
            <img src="<?= get_field("da_background_image_mobile")["sizes"]["large"] ?>" alt="Image">
        </div>
        <div class="text-container">
            <?= get_field('da_content') ?>
            <i class="fa fa-angle-down"></i>
        </div>
    </div>

    <div class="home-mobile-blocks asset-block-mobile d-hide">
        <div class="img-container">
            <img src="<?= get_field("am_background_image_mobile")["sizes"]["large"] ?>" alt="Image">
        </div>
        <div class="text-container">
            <?= get_field('am_content') ?>
            <i class="fa fa-angle-down"></i>
        </div>
    </div>

    <div class="home-mobile-blocks knowledge-block-mobile d-hide">
        <div class="img-container">
            <img src="<?= get_field("k_background_image_mobile")["sizes"]["large"] ?>" alt="Image">
        </div>
        <div class="text-container">
            <?= get_field('k_content') ?>
            <i class="fa fa-angle-down"></i>
        </div>
    </div>


    <!-- ################################################################### -->
    <!-- #################### Mobile Section Ends Here ################### -->
    <!-- ################################################################### -->