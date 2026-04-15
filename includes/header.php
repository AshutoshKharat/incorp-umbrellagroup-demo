<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="India's most trusted IT solution partner. Transforming Ideas into Digital Reality with Expert IT Solutions.">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) . ' | Thinkbix' : 'Thinkbix - Expert IT Solutions'; ?></title>

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/sections.css">
    <link rel="stylesheet" href="assets/css/dark-theme.css">

    <!-- Apply saved theme ASAP to prevent flash of wrong theme -->
    <script>
        (function () {
            var saved = localStorage.getItem('theme');
            var preferred = (!saved && window.matchMedia('(prefers-color-scheme: dark)').matches) ? 'dark' : saved;
            if (preferred === 'dark') {
                document.documentElement.setAttribute('data-theme', 'dark');
            }
        })();
    </script>
</head>
<body>
