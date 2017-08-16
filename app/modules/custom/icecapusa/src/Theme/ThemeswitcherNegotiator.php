<?php

/**
 * @file
 * Contains \Drupal\icecapusa\Theme\ThemeswitcherNegotiator.
 */
 
namespace Drupal\icecapusa\Theme;

use Drupal\Core\Theme\ThemeNegotiatorInterface;
use Drupal\Core\Routing\RouteMatchInterface;
 
class ThemeswitcherNegotiator implements ThemeNegotiatorInterface {
 
  /**
   * {@inheritdoc}
   */
  public function applies(RouteMatchInterface $route_match) {
    return true;
  }

  /**
   * {@inheritdoc}
   */
  public function determineActiveTheme(RouteMatchInterface $route_match) {
    if ($route_match->getRouteName() == 'user.login') {
        return 'seven';
    } elseif ($route_match->getRouteName() == 'some.other.route') {
        return 'icecapusa_theme';
    }
  }
}