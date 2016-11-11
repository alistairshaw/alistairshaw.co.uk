<?php
/**
 * @var $imageLocation
 */

if (!isset($alt)) $alt = '';
if (!isset($ext)) $ext = 'jpg';
?>
<div class="image">
    <picture>
        <source media="(max-width: 768px)" srcset="<?php echo $imageLocation . '-' . 'md.' . $ext ?>">
        <source media="(max-width: 465px)" srcset="<?php echo $imageLocation . '-' . 'sm.' . $ext ?>">
        <img src="<?php echo $imageLocation . '.' . $ext ?>" alt="<?php echo $alt ?>" width="100%" height="0">
    </picture>
</div>