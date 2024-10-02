<?php
$imageDirectory = "vasketjenester/galleri/"; // Ensure this is the correct path
$GalleryImages = [
    [
        'src' => 'feier-gulvet-i-et-kontormiljø-som-en-del-av-profesjonelle-vasketjenester.webp',
        'src_default' => 'v1.webp',
        'alt' => ''
    ],
    // Add more images here as needed
];
?>
<?php
renameImageFiles($GalleryImages, $seo, $imageDirectory);

foreach ($GalleryImages as $image) { ?>
    <img src="<?php if ($seo['features'] == "1") {echo $domain. $imageDirectory. $image['src'];} else {echo $domain. $imageDirectory. $image['src_default'];};?>" <?php echo '' . ($htmlAttributesImageCoding ? 'width="480" height="600" alt="'.$image['alt'].'" ' . $htmlAttributesImageCoding : '') .'>'."";?>
<?php } ?>

<?php /* project filters and foreach 
 <p><?php echo mb_substr($post['description'], 0, 80, 'UTF-8') . '...'; ?></p>

*/?>
<div class="project-filter-wrapper">
    <ul class="project_filters">
        <li><a href="#" data-filter="*" class="title-link selected"> Visi
                <sup><?php echo count($casePosts); ?></sup></a></li>
        <?php foreach ($allLabels as $label => $count) { ?>
        <li><a href="#" data-filter=".f<?php echo array_search($label, array_keys($allLabels)); ?>"
                class="title-link"><?php echo $label; ?> <sup><?php echo $count; ?></sup></a></li>
        <?php } ?>
    </ul>
    <div class="projects-grid pf_3_cols style-1 img-scale">
        <div class="grid-sizer"></div>
        <?php foreach ($casePosts as $post) { ?>
        <div class="project-item <?php echo $post['postCategory']; ?>">
            <div class="projects-box">
                <div class="projects-thumbnail">
                    <a href="<?php echo $post['url']; ?>"><?php echo $post['imageHtml']; ?></a>
                    <span class="overlay"><i class="ot-flaticon-loupe"></i></span>
                </div>
                <div class="portfolio-info full-width">
                    <div class="portfolio-info-inner ">
                        <h5><a class="title-link"
                                href="<?php echo $post['url']; ?>"><?php echo $post['og_title']; ?></a></h5>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>