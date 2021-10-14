<?php

$pager->setSurroundCount(2);
?>
<nav align="center" aria-label="<?= lang('Pager.pageNavigation') ?>">
	<ul class="pagination">
		
		<?php if ($pager->hasPreviousPage()) : ?>
			<li>
            <a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                <span aria-hidden="true"><i class="fa fa-angle-double-left"></i></span>
            </a>
        </li>
        <li>
			<li class="page-item">
				<a href="<?= $pager->getPreviousPage() ?>" class="page-link" aria-label="<?= lang('Pager.previous') ?>">
					<span><i class="fa fa-angle-left"></i></span>
				</a>
			</li>
		<?php endif ?>

		<?php foreach ($pager->links() as $link) : ?>
			<li <?= $link['active'] ? 'class="active page-item"' : 'class="page-item"' ?>>
				<a href="<?= $link['uri'] ?>" class="page-link">
					<?= $link['title'] ?>
				</a>
			</li>
		<?php endforeach ?>

		<?php if ($pager->hasNextPage()) : ?>
			<li class="page-item">
				<a href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.next') ?>" class="page-link">
					<span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
				</a>
			</li>
			<li>
            <a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                <span aria-hidden="true"><i class="fa fa-angle-double-right"></i></span>
            </a>
        </li>
		<?php endif ?>
		
	</ul>
</nav>
