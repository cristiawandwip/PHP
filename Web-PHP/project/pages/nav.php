<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><?= $logo ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <?php foreach ($nav as $key => $value) : ?>

                    <li class="nav-item active">
                        <a class="nav-link" href="<?= $value ?>"><?= $key; ?>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
    </div>
</nav>