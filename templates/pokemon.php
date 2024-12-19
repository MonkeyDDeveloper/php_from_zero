<?php if(isset($name)): ?>
    <section>
        <h4 class="text-center"><?= $name ?></h4>
        <img src="<?= $sprite ?>" alt="pokemon" width="200px">
        <?php if(isset($abilities)): ?>
            <h5>Abilities:</h5>
            <ul>
                <?php foreach($abilities as $ability): ?>
                    <li>
                        <?= $ability["ability"]["name"] ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </section>
<?php endif; ?>