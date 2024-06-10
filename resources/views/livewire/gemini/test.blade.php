<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <h1>Photo Search Results for </h1>
    <?php if (!empty($photos)): ?>
        <div class="photos">
            <?php foreach ($photos as $photo): ?>
                <div class="photo">
                    <h2><?= htmlspecialchars($photo['description'] ?? 'No Description') ?></h2>
                    <img src="<?= htmlspecialchars($photo['urls']['regular']) ?>" alt="<?= htmlspecialchars($photo['alt_description']) ?>" style="max-width: 100%; height: auto;">
                    <p>Likes: <?= htmlspecialchars($photo['likes']) ?></p>
                    <p>By: <?= htmlspecialchars($photo['user']['name']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>No photos found.</p>
    <?php endif; ?>
</div>
