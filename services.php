<?php // Loop through each service in the $servicePages array
                foreach ($servicePages as $page_id => $post) {
                    // Skip the main services page or any other pages meant to be excluded
                    if (!empty($post['excludeForeach']) && $post['excludeForeach'] === true) {
                        continue;
                    }

                    // Determine image URL and icon URL (you might need to adjust the logic for your actual data structure)
                    $imageUrl = !empty($post['imagePaths']['small']['340']) ? $post['imagePaths']['small']['340'] : 'default_image_url_here';
                    $iconUrl = !empty($post['imagePaths']['small']['icon']) ? $post['imagePaths']['small']['icon'] : 'default_icon_url_here';
					 // Output the HTML for each service
				?>
                    <div class="RenHub-slider-item-3">
                      <div class="RenHub-service-item-3 text-center position-relative">
                          <div class="inner-img-icon-wrap  position-relative">
                              <div class="inner-img  position-relative"><img src="<?php echo htmlspecialchars($domain. $imageUrl);?>" <?php echo '' . ($htmlAttributesImageCoding ? 'width="340" height = "250" alt="'.htmlspecialchars($post["og_image_alt"]).'" ' . $htmlAttributesImageCoding : '') .'>'."";?></div>
                              <div class="inner-icon d-flex justify-content-center align-items-center position-absolute"><img src="<?php echo htmlspecialchars($domain. $iconUrl);?>" <?php echo '' . ($htmlAttributesImageCoding ? 'width="33" height = "33" alt="'.htmlspecialchars($post["og_image_alt"]).' ikon" ' . $htmlAttributesImageCoding : '') .'>'."";?></div>
                          </div>
                          <div class="inner-text headline pera-content">
                              <h3><a href="<?php echo $domain. htmlspecialchars($post["url"]);?>"><?php echo htmlspecialchars($post["og_title"]);?></a></h3>
                              <p><?php echo htmlspecialchars($post["short_description"]);?></p>
                          </div>
                      </div>
                    </div>
               <?php }?>