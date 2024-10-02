<?php foreach ($BlogPages as $pageId => $page) {
    // Check if the page is meant to be excluded from the foreach loop
    if (!empty($page['excludeForeach'])) {
        continue;
    }

    // Generate a human-friendly date format for the blog post
    $datePublished = new DateTime($page['datePublished']);
    $humanFriendlyDate = $datePublished->format('F j, Y'); // e.g., March 10, 2024

    // Construct the URL for the thumbnail image
    $thumbnailUrl = isset($page['imagePaths']['medium']['640']) ? $page['imagePaths']['medium']['640'] : 'default_thumbnail.jpg';

    // Output the HTML for each blog entry
?>
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
        <div class="RenHub-blog-item-3 position-relative">
            <div class="inner-img">
                <img src="<?php echo htmlspecialchars($domain . $thumbnailUrl); ?>" <?php echo '' . ($htmlAttributesImageCoding ? 'alt="' . htmlspecialchars($page['og_title']) . '" ' . $htmlAttributesImageCoding : '') . '>' . ""; ?> </div>
                <div class="inner-text headline">
                    <h3><a href="<?php echo htmlspecialchars($domain . $page['url']); ?>" <?php echo $htmlLinkRelv2; ?>><?php echo htmlspecialchars($page['og_title']); ?></a></h3>
                    <div class="blog-meta">
                        <i class="fa fa-calendar-check"></i><?php echo $humanFriendlyDate; ?> <a href="<?php echo htmlspecialchars($domain . $page['url']) ?>" <?php echo $htmlLinkRelv2; ?>><i class="far fa-user ml-10"></i><?php echo htmlspecialchars($page['author_name']); ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

<?php
// Example usage of the foreach loop to generate links for blog pages
foreach ($BlogPages as $page_id => $page) {
    if (!empty($page['excludeForeach']) && $page['excludeForeach']) {
        continue;  // Skip this iteration if 'excludeForeach' is true
    }
    // Assuming $domain contains the base URL, adjust as necessary
    echo '<li><a href="' . htmlspecialchars($domain . $page['url']) . '" title="' . htmlspecialchars($page['og_title']) . '" ' . $htmlLinkRelv2 . '>' . htmlspecialchars($page['anchor']) . '</a></li>';
}
?>