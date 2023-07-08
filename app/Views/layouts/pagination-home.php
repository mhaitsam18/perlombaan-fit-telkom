<?php $pager->setSurroundCount(2) ?>

<nav aria-label="Page navigation">
    <ul class="pagination">



    </ul>
</nav>

<div class="pagination-area">
    <?php if ($pager->hasPreviousPage()) : ?>
        <a href="<?= $pager->getPreviousPage() ?>" class="prev page-numbers">
            <i class='bx bx-left-arrow-alt'></i>
        </a>
    <?php endif ?>
    <?php foreach ($pager->links() as $link) : ?>
        <?php if($link['active']): ?>
            <span class="page-numbers current" aria-current="page"><?= $link['title'] ?></span>
        <?php else: ?>
            <a href="<?= $link['uri'] ?>" class="page-numbers"><?= $link['title'] ?></a>
        <?php endif; ?>
    <?php endforeach ?>
    <?php if ($pager->hasNextPage()) : ?>
        <a href="<?= $pager->getNextPage() ?>" class="next page-numbers">
            <i class='bx bx-right-arrow-alt'></i>
        </a>
    <?php endif ?>
</div>

