<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>User Details</h1>
            
            <div class="card">
                <div class="card-body">
                    <p><strong>ID:</strong> <?= $user->id ?></p>
                    <p><strong>Email:</strong> <?= htmlspecialchars($user->email) ?></p>
                </div>
            </div>

            <div class="mt-3">
                <a href="/users/edit?id=<?= $user->id ?>" class="btn btn-warning">Edit</a>
                <a href="/users/delete?id=<?= $user->id ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                <a href="/users" class="btn btn-secondary">Back to Users</a>
            </div>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
