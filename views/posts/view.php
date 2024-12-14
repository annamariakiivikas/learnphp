<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container">
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
        </thead>
        <tbody>
            <td><?= $post->id ?></td>
            <td><?= $post->title ?></td>
            <td><?= $post->body ?></td>
        </tbody>
    </table>
</main>

<?php include __DIR__ .  '/../partials/footer.php'; ?>