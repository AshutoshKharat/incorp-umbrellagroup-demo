<?php
$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$normalizedPath = rtrim((string) $requestPath, '/');

if ($normalizedPath === '') {
	$normalizedPath = '/';
}

$routeMap = [
	'/' => 'index.php',
	'/index.php' => 'index.php',
	'/about' => 'about.php',
	'/about.php' => 'about.php',
	'/team' => 'team.php',
	'/team.php' => 'team.php',
	'/core-values' => 'core-values.php',
	'/core-values.php' => 'core-values.php',
	'/leadership-principles' => 'leadership-principles.php',
	'/leadership-principles.php' => 'leadership-principles.php',
	'/our-positions' => 'our-positions.php',
	'/our-positions.php' => 'our-positions.php',
	'/working-ethics' => 'working-ethics.php',
	'/working-ethics.php' => 'working-ethics.php',
	'/vision-and-mission' => 'vision-and-mission.php',
	'/vision-and-mission.php' => 'vision-and-mission.php',
	'/empowering-entrepreneurship' => 'empowering-entrepreneurship.php',
	'/empowering-entrepreneurship.php' => 'empowering-entrepreneurship.php',
	'/learning' => 'learning.php',
	'/learning.php' => 'learning.php',
	'/tech-for-good' => 'tech-for-good.php',
	'/tech-for-good.php' => 'tech-for-good.php',
	'/sample' => 'sample.php',
	'/sample.php' => 'sample.php',
];

$targetFile = $routeMap[$normalizedPath] ?? null;

if ($targetFile === null) {
	http_response_code(404);
	echo 'Page not found';
	exit;
}

require_once __DIR__ . '/../' . $targetFile;
?>