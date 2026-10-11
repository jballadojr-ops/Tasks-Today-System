<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Tasks-Today</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>
<body>

<header>
    <h1>Tasks-Today</h1>
    <p>A simple task management application.</p>
</header>

<nav>
    <a href="<?= base_url('/') ?>">Today</a>
    <a href="<?= base_url('tasks') ?>">All Tasks</a>
    <a href="<?= base_url('profile') ?>">Profile</a>
    <a href="<?= base_url('about') ?>">About</a>
</nav>

<main>
    <section class="card">
        <h2>About the Project</h2>
        <p>
            Tasks-Today is a task management system built with
            CodeIgniter 4 and MySQL.
        </p>
        <p>
            It displays tasks scheduled for the current day, lists
            all scheduled tasks, and shows user profile information.
        </p>

        <h2>Developer Information</h2>

        <p><strong>Developer:</strong> Joeffrey Allado</p>
        <p><strong>Framework:</strong> CodeIgniter 4</p>
        <p><strong>Database:</strong> MySQL</p>
    </section>
</main>

<footer>
    Tasks-Today Management System
</footer>

</body>
</html>
```