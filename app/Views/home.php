<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Today's Tasks | Tasks-Today</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>
<body>

<header>
    <h1>Tasks-Today</h1>
    <p>Keep track of what you need to accomplish today.</p>
</header>

<nav>
    <a href="<?= base_url('/') ?>">Today</a>
    <a href="<?= base_url('tasks') ?>">All Tasks</a>
    <a href="<?= base_url('profile') ?>">Profile</a>
    <a href="<?= base_url('about') ?>">About</a>
</nav>

<main>
    <section class="card">
        <h2>Today's Tasks</h2>
        <p>Here are your tasks scheduled for today.</p>

        <?php if (!empty($tasks)): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Task</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td><?= esc($task['id']) ?></td>
                            <td><?= esc($task['title']) ?></td>
                            <td>
                                <span class="status <?= esc(strtolower($task['status'])) ?>">
                                    <?= esc(ucfirst($task['status'])) ?>
                                </span>
                            </td>
                            <td><?= esc($task['task_date']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No tasks scheduled for today.</p>
        <?php endif; ?>
    </section>
</main>

<footer>
    Tasks-Today Management System
</footer>

</body>
</html>
