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

 /*
function generateNavigation($pages, $domain) {
    $menuStructure = [];

    // Organize pages into a structured array
    foreach ($pages as $pageId => $page) {
        if (!empty($page['excludeForeach'])) {
            continue; // Skip pages marked to exclude from navigation
        }

        if (empty($page['parent'])) {
            // Top-level page
            $menuStructure[$pageId] = $page;
            $menuStructure[$pageId]['children'] = [];
        } else {
            // Child page
            $parentId = $page['parent'];
            if (!isset($menuStructure[$parentId])) {
                $menuStructure[$parentId] = ['children' => []];
            }
            $menuStructure[$parentId]['children'][$pageId] = $page;
        }
    }

    // Generate HTML for the menu
    echo '<ul>';
    foreach ($menuStructure as $item) {
        if (isset($item['url'])) {
            $url = $domain . '' . trim($item['url'], '/');
            echo "<li><a href='{$url}'>{$item['anchor']}</a>";
        }

        // Check for child pages
        if (!empty($item['children'])) {
            echo '<ul>';
            foreach ($item['children'] as $child) {
                $childUrl = $domain . '' . trim($child['url'], '/');
                echo "<li><a href='{$childUrl}'>{$child['anchor']}</a></li>";
            }
            echo '</ul>';
        }
        echo '</li>';
    }
    echo '</ul>';
}
generateNavigation($pageName, $domain); */
?>
<?php if($htaccess["live"] == "0"){?>
<li class="menu-item<?php echo isActive($tech_pages['devMode']['url'], ' active'); ?>"><a href="<?php echo htmlspecialchars($domain . $tech_pages['devMode']['url']); ?>"<?php echo $htmlLinkRelv2 . titleAttribute('DevMode'); ?>><?php echo htmlspecialchars($tech_pages['devMode']['anchor']); ?></a></li>
<?php }else { ?>
<li class="menu-item<?php echo isActive($companyPages['index']['url'], ' active'); ?>"><a href="<?php echo htmlspecialchars($domain . $companyPages['index']['url']); ?>"<?php echo $htmlLinkRelv2 . titleAttribute('tilbake til Hjemmesiden'); ?>><?php echo htmlspecialchars($companyPages['index']['anchor']); ?></a></li>
<?php } ?>
<li class="menu-item<?php echo isActive($servicePages['services']['url'], 'menu-item-has-children active'); ?>"><a href="<?php echo htmlspecialchars($domain . $servicePages['services']['url']); ?>"<?php echo $htmlLinkRelv2 . titleAttribute($servicePages['services']['og_title']); ?>><?php echo htmlspecialchars($servicePages['services']['anchor']); ?></a>
    <ul class="sub-menu">
        <li class="menu-item<?php echo isActive($servicePages['service_v1']['url'], ' active'); ?>"><a href="<?php echo htmlspecialchars($domain . $servicePages['service_v1']['url']); ?>"<?php echo $htmlLinkRelv2 . titleAttribute($servicePages['service_v1']['og_title']); ?>><?php echo htmlspecialchars($servicePages['service_v1']['anchor']); ?></a></li>
        <li class="menu-item<?php echo isActive($servicePages['service_v2']['url'], ' active'); ?>"><a href="<?php echo htmlspecialchars($domain . $servicePages['service_v2']['url']); ?>"<?php echo $htmlLinkRelv2 . titleAttribute($servicePages['service_v2']['og_title']); ?>><?php echo htmlspecialchars($servicePages['service_v2']['anchor']); ?></a></li>
        <li class="menu-item<?php echo isActive($servicePages['service_v3']['url'], ' active'); ?>"><a href="<?php echo htmlspecialchars($domain . $servicePages['service_v3']['url']); ?>"<?php echo $htmlLinkRelv2 . titleAttribute($servicePages['service_v3']['og_title']); ?>><?php echo htmlspecialchars($servicePages['service_v3']['anchor']); ?></a></li>
        <li class="menu-item<?php echo isActive($servicePages['service_v4']['url'], ' active'); ?>"><a href="<?php echo htmlspecialchars($domain . $servicePages['service_v4']['url']); ?>"<?php echo $htmlLinkRelv2 . titleAttribute($servicePages['service_v4']['og_title']); ?>><?php echo htmlspecialchars($servicePages['service_v4']['anchor']); ?></a></li>
        <li class="menu-item<?php echo isActive($servicePages['service_v5']['url'], ' active'); ?>"><a href="<?php echo htmlspecialchars($domain . $servicePages['service_v5']['url']); ?>"<?php echo $htmlLinkRelv2 . titleAttribute($servicePages['service_v5']['og_title']); ?>><?php echo htmlspecialchars($servicePages['service_v5']['anchor']); ?></a></li>
        <li class="menu-item<?php echo isActive($servicePages['service_v6']['url'], ' active'); ?>"><a href="<?php echo htmlspecialchars($domain . $servicePages['service_v6']['url']); ?>"<?php echo $htmlLinkRelv2 . titleAttribute($servicePages['service_v6']['og_title']); ?>><?php echo htmlspecialchars($servicePages['service_v6']['anchor']); ?></a></li>
    </ul>
</li>
<li class="menu-item<?php echo isActive($companyPages['about']['url'], ' active'); ?>"><a href="<?php echo htmlspecialchars($domain . $companyPages['about']['url']); ?>"<?php echo $htmlLinkRelv2 . titleAttribute($companyPages['about']['og_title']); ?>><?php echo htmlspecialchars($companyPages['about']['anchor']); ?></a></li>
<li class="menu-item<?php echo isActive($companyPages['gallery']['url'], ' active'); ?>"><a href="<?php echo htmlspecialchars($domain . $companyPages['gallery']['url']); ?>"<?php echo $htmlLinkRelv2 . titleAttribute($companyPages['gallery']['og_title']); ?>><?php echo htmlspecialchars($companyPages['gallery']['anchor']); ?></a></li>
<li class="menu-item<?php echo isActive($BlogPages['blog']['url'], ' active'); ?>"><a href="<?php echo htmlspecialchars($domain . $BlogPages['blog']['url']); ?>"<?php echo $htmlLinkRelv2 . titleAttribute($BlogPages['blog']['og_title']); ?>><?php echo htmlspecialchars($BlogPages['blog']['anchor']); ?></a></li>
<li class="menu-item<?php echo isActive($companyPages['contact']['url'], ' active'); ?>"><a href="<?php echo htmlspecialchars($domain . $companyPages['contact']['url']); ?>"<?php echo $htmlLinkRelv2 . titleAttribute($companyPages['contact']['og_title']); ?>><?php echo htmlspecialchars($companyPages['contact']['anchor']); ?></a></li>