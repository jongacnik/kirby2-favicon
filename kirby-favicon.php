<?php

/**
 * KirbyFavicon
 *
 * Included blueprint field group:
 * favicon: favicon
 *
 * Included snippet:
 * snippet('favicon')
 *
 */

namespace KirbyFavicon;

class KirbyFavicon {
  public static function register () {
    kirby()->set('snippet', 'favicon', __DIR__ . '/snippets/favicon.php');
    kirby()->set('blueprint', 'fields/favicon', __DIR__ . '/blueprints/favicon.yml');
  }
}

KirbyFavicon::register();
