<h1>Question ModuleMaker</h1>

<ul>
    <?php foreach ($entries as $entry):?>
        <?php if (!$entry['done']): ?>
            <li>
                <?= $entry['question'] ?>
            </li>
        <?php endif ?>
    <?php endforeach ?>
</ul>
