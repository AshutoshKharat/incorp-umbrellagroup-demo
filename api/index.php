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
];

$targetFile = $routeMap[$normalizedPath] ?? null;

if ($targetFile === null) {
	http_response_code(404);
	echo 'Page not found';
	exit;
}

require_once __DIR__ . '/../' . $targetFile;
?>