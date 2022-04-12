<main>

    <div class="container-all-discs">

    <?php
    foreach ($array_discs as $disc) { ?>

        <div class="box-single-disc">
            <img src=" <?= $disc['poster'] ?> " alt=" <?= $disc['title'] ?> ">
            <h3> <?= $disc['title'] ?> </h3>
            <div> <?= $disc['author'] ?> </div>
            <div> <?= $disc['year'] ?> </div>
        </div>

    <?php
    }
    ?>

    </div>

</main>