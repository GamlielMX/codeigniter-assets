codeigniter-assets
==================

A very simple and tiny helper for handling assets

Usage
-----

This helper is loaded using the following code:

```
$this->load->helper('assets');
```

---

To load an CSS file

```php
<link rel="stylesheet" type="text/css" src="<?php echo css('style') ?>" />
```

---

To load an JS file

```php
<script type="text/javascript" href="<?php echo js('app') ?>" />
```

---

To load an image file

```php
<img src="<?php echo img('GitHub.png') ?>" />
```

---

To load an thumb for image file

```php
<img src="<?php echo thumb(img('GitHub.png'), 200, 150, 100) ?>" />
```


--

#Considerations

Assets will be in their respective folder.
Cache folder will be writable.
