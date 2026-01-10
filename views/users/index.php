<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Users</h1>
            
            <?php if(empty($users)): ?>
                <p>No users found.</p>
            <?php else: ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td><?= $user->id ?></td>
                                <td><?= htmlspecialchars($user->email) ?></td>
                                <td>
                                    <a href="/users/view?id=<?= $user->id ?>" class="btn btn-sm btn-info">View</a>
                                    <a href="/users/edit?id=<?= $user->id ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="/users/delete?id=<?= $user->id ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
