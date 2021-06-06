# hari-acf-flexible-fields-addon
[ Only With ACF Pro ] this is acf pro helper for template based Flexible fields layouts.

## Requirements

1. ACF pro
2. Flexible fields layout with `sections` fields name.
3. Create folder in theme `flexible-fields`
4. Inside that folder put file same as flexible field by replacing `_` with `-`. Means, if field name is `banner_section` your file name willbe `banner-section.php`.

## usage
- Make field in `section` called `banner_section`.
- Add field in the `banner_section` like `name`, `button_text` etc.
- In `banner-section.php` add
```php

<h1><?php get_sub_field('button_text'); ?> </h1>
 
<button> <?php get_sub_field('button_text'); ?> </button>

```

### add more fields and enjoy :tada:

### Know More About
ACF - Flexible Fields https://www.advancedcustomfields.com/resources/flexible-content/