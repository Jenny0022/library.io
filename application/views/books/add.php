<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('dist/assets/favicon.ico'); ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container mt-5">
        <h2>Add Book</h2>
        <div>
            <form action="<?= site_url('book/add'); ?>" method="post">
                <!-- Title -->
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>

                <!-- Author -->
                <div class="mb-3">
                    <label for="author" class="form-label">Author:</label>
                    <input type="text" name="author" id="author" class="form-control" required>
                </div>

                <!-- Category -->
                <div class="mb-3">
                    <label for="category" class="form-label">Category:</label>
                    <input type="text" name="category" id="category" class="form-control" required>
                </div>


                <!-- Cover Image (URL) -->
                <div class="mb-3">
                    <label for="cover_image" class="form-label">Cover Image (URL):</label>
                    <input type="url" name="cover_image" id="cover_image" class="form-control" placeholder="" required>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
                </div>

                <!-- Read Link -->
                <div class="mb-3">
                    <label for="read_link" class="form-label">Read Link:</label>
                    <input type="url" name="read_link" id="read_link" class="form-control" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Add</button>
                
                <!-- Back Button -->
                <a href="<?= site_url('book'); ?>" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
