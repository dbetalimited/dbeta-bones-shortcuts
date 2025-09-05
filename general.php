<?php
/**
 * Copyright (c) 2024 DBETA LIMITED
 * 
 * This file is part of Framework 7.0.
 * All rights reserved.
 * 
 * Framework 7.0 is proprietary software: users may not redistribute, sell,
 * or make copies of it, in whole or in part, without prior written permission
 * from DBETA LIMITED.
 * 
 * Framework 7.0 is provided "as is," without any warranty of any kind, either
 * express or implied, including but not limited to the warranties of 
 * merchantability, fitness for a particular purpose, or non-infringement.
 * 
 * For any enquiries, contact DBETA LIMITED or visit https://www.dbeta.co.uk
 */
?>
<?php
// Combine the two arrays: $companyPages and $servicePages
$allPages = array_merge($companyPages, $servicePages);

// Example usage of the foreach loop to generate links for both $companyPages and $servicePages
foreach ($allPages as $page_id => $page) {
    // Skip this iteration if 'footer_menu' is false
    if (empty($page['footer_menu'])) {
        continue;
    }

    // Assuming $domain contains the base URL, adjust as necessary. 
    echo '<li><a href="' . htmlspecialchars($domain . $page['url']) . '" title="' . htmlspecialchars($page['og_title']) . '" ' . $htmlLinkRelv2 . '>' . htmlspecialchars($page['anchor']) . '</a></li>';
}




// opening hours Mon to Fri 10:00 to 18:00, Sat 10:00 to 14:00
echo $formattedOpeningHours;



/* get current day hours */
// Get the current day of the week
$currentDay = date('l'); // 'l' gives a full textual representation of the day (Monday, Tuesday, etc.)

// Get the opening hours for the current day
$currentDayHours = $data['OpeningHours'][$currentDay];

// Display the current day's opening hours
echo "$currentDay $currentDayHours";
                

/* social media */
            // Check if there are any social media entries to process
            if (!empty($data['socialMedia'])) {
                foreach ($data['socialMedia'] as $platform => $details) {
                    echo '<a href="' . $details['url'] . '" class="social-media-link" aria-label="Follow us on ' . $details['title'] . '" target="_blank">';
                    echo '<i class="' . $details['iconClass'] . '"></i>';
                    echo '</a>' . PHP_EOL;
                }
            }


// image attributes
echo '' . ($htmlAttributesImageCoding ? 'width="118" height="101" alt="Flytende prikker" ' . $htmlAttributesImageCoding : '') .'>'."\n";

?>


// contact info 
<address><?php echo displayAddress($data, $htmlLinkRel); ?>, <?php echo $data["address"]["addressLocality"]; ?>, <?php echo $data["address"]["postalCode"]; ?></address>
<a href = "mailto:<?php echo $data["contactDetails"]["email"]; ?>"><?php echo $data["contactDetails"]["email"]; ?></a>
<a href = "tel:<?php echo $data["contactDetails"]["telephone"]; ?>"><?php echo $data["contactDetails"]["telephone"]; ?></a>


            <?php if ($phone): ?>
              <li><strong>Phone:</strong> <a href="tel:<?= h($phone) ?>"><?= h($phone) ?></a></li>
            <?php endif; ?>
            <?php if ($email): ?>
              <li><strong>Email:</strong> <a href="mailto:<?= h($email) ?>"><?= h($email) ?></a></li>
            <?php endif; ?>
            <?php if ($address): ?>
              <li>
                <strong>Address:</strong>
                <?php
                  if (function_exists('displayAddress')) {
                    echo displayAddress($data, 'rel="noopener" target="_blank"');
                  } else {
                    echo $mapHref
                      ? '<a href="'.h($mapHref).'" target="_blank" rel="noopener">'.h($address).'</a>'
                      : h($address);
                  }
                ?>
              </li>
            <?php endif; ?>


// general links
<?php if($htaccess["live"] == "0"){?>
<li><a href="<?php echo htmlspecialchars($domain. $tech_pages['devMode']['url']); ?>" <?php echo $htmlLinkRelv2;?>><?php echo htmlspecialchars($tech_pages['devMode']['anchor']); ?></a></li><?php }else { ?>
<li><a href="<?php echo htmlspecialchars($domain. $companyPages['index']['url']); ?>" <?php echo $htmlLinkRelv2;?>><?php echo htmlspecialchars($companyPages['index']['anchor']); ?></a></li><?php } ?>

<li><a href="<?php echo htmlspecialchars($domain. $companyPages['contact']['url']); ?>" <?php echo $htmlLinkRelv2;?>><?php echo htmlspecialchars($companyPages['contact']['anchor']); ?></a></li>
<li><a href="<?php echo htmlspecialchars($domain. $BlogPages['blog']['url']); ?>" <?php echo $htmlLinkRelv2;?>><?php echo htmlspecialchars($BlogPages['blog']['anchor']); ?></a></li>

<a href="<?php echo htmlspecialchars($domain. $servicePages['services']['url']); ?>" <?php echo $htmlLinkRelv2;?>><?php echo htmlspecialchars($servicePages['services']['anchor']); ?></a>
<li><a href="<?php echo htmlspecialchars($domain. $servicePages['service_v1']['url']); ?>" <?php echo $htmlLinkRelv2;?>><?php echo htmlspecialchars($servicePages['service_v1']['anchor']); ?></a></li>

<?php foreach ($data['OpeningHours'] as $day =>$hours): ?>
    <div class="wptb-item <?php echo $hours === 'Closed' ? 'holiday' : ''; ?>">
        <span class="wptb-item--day"><?php echo $day;?></span> <span class="wptb-item--time"><?php echo $hours;?></span>
    </div>
<?php endforeach; ?>

<p>Published <span><?php echo convertToHumanFriendlyDate($datePublished);?></span></p>
