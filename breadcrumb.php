<section class="RenHub-breadcrumb-section position-relative top-position" data-background="<?php echo $domain. $servicePages['service_v3']['breadcrumb']?>">
    <div class="container">
        <div class="breadcrumb-content headline ul-li position-relative">
            <h3>Rengjøring hjemme</h3>
            <h1><?php echo $servicePages['service_v3']['og_title'];?></h1>
            <p><?php echo $servicePages['service_v3']['og_description'];?></p>
            <ul>
			<?php if($htaccess["live"] == "0"){?>
				<li><a href="<?php echo htmlspecialchars($domain. $tech_pages['devMode']['url']); ?>"><?php echo htmlspecialchars($tech_pages['devMode']['anchor']); ?></a></li><?php }else { ?>
				<li><a href="<?php echo htmlspecialchars($domain. $companyPages['index']['url']); ?>" <?php echo $htmlLinkRelv2;?>><?php echo $og_title = replace_placeholders($data['company_name'], $placeholders); ?></a></li><?php } ?>
<li><a href="<?php echo htmlspecialchars($domain. $companyPages['about']['url']); ?>" <?php echo $htmlLinkRelv2;?>><?php echo htmlspecialchars($companyPages['about']['anchor']); ?></a></li>
<li><a href="<?php echo $domain. $servicePages['services']['url'];?>"><?php echo  $og_title = replace_placeholders($servicePages['services']['og_title'], $placeholders);?></a></li>
<li><?php echo $og_title = replace_placeholders($companyPages['about']['og_title'], $placeholders);?></li>
			</ul>
        </div>
    </div>
</section>