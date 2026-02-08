<?php
/**
 * @package koko-analytics
 * @license GPL-3.0+
 * @author Danny van Kooten
 *
 * This file acts as an optimized endpoint file for the Koko Analytics plugin.
 */

// path to pageviews.php file in uploads directory
define('KOKO_ANALYTICS_UPLOAD_DIR', 'wp-content/uploads/koko-analytics');

// path to functions.php file in Koko Analytics plugin directory
require 'wp-content/plugins/koko-analytics/src/collect-functions.php';

// function call to collect the request data
KokoAnalytics\collect_request();
