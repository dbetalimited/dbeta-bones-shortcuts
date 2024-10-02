<li class="nav-item">
    <a href="#" class="nav-link dropdown-menu-toggle py-2" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <?php echo ($lang == 'lt') ? 'Lietuviškai' : 'English'; ?> <i class="fas fa-angle-down fa-sm"></i> <!-- Display active language -->
    </a>
    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
        <li><a href="<?php echo $englishUrl; ?>" class="no-skin"> <img src="<?php echo $domain; ?>assets/images/en.png"> English</a></li>
        <li><a href="<?php echo $lithuanianUrl; ?>" class="no-skin"> <img src="<?php echo $domain; ?>assets/images/lt.png"> Lietuviškai</a></li>
    </ul>
</li>