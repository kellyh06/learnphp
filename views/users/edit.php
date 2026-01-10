<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Edit User</h1>
            
            <form method="POST" action="/users/edit">
                <input type="hidden" name="id" value="<?= $user->id ?>">
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($user->email) ?>" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password (leave blank to keep current)</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <button type="submit" class="btn btn-primary">Update User</button>
                <a href="/users" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
