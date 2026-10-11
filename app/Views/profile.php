<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile | Tasks-Today</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>
<body>

<header>
    <h1>Tasks-Today</h1>
    <p>View your account information.</p>
</header>

<nav>
    <a href="<?= base_url('/') ?>">Today</a>
    <a href="<?= base_url('tasks') ?>">All Tasks</a>
    <a href="<?= base_url('profile') ?>">Profile</a>
    <a href="<?= base_url('about') ?>">About</a>
</nav>

<main>
    <section class="card">
        <h2>User Profile</h2>
        <p>Here are the details of the registered demo user.</p>

        <?php if (!empty($user)): ?>
            <table>
                <tbody>
                    <tr>
                        <th>User ID</th>
                        <td><?= esc($user['id']) ?></td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td><?= esc($user['username']) ?></td>
                    </tr>
                    <tr>
                        <th>Full Name</th>
                        <td><?= esc($user['full_name']) ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?= esc($user['email']) ?></td>
                    </tr>
                </tbody>
            </table>
        <?php else: ?>
            <p>No user profile found.</p>
        <?php endif; ?>
    </section>
</main>

<footer>
    Tasks-Today Management System
</footer>

</body>
</html>
