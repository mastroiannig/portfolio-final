<?php
{
            echo '<div class="col-lg-3 col-md-4 col-sm-6">';
                echo '<div class="card my-3">';
                    echo '<img src="images/mini_'.$don['cover'].'" class="card-img-top" alt="image de '.$don['pname'].'">';
                    echo ' <div class="card-body">';
                        echo '<h5 class="card-title">'.$don['pname'].'</h5>';
                        echo '<a href="category.php?id='.$don['cid'].'" class="btn btn-secondary">'.$don['cname'].'</a>';
                        echo ' <p class="card-text"><strong>Date: </strong>'.$don['mydate'].'</p>';
                        echo ' <a href="product.php?id='.$don['pid'].'" class="btn btn-primary">En savoir plus</a>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }
        $req->closeCursor();
        ?>
    </div>
    <div class="d-flex justify-content-center my-5">
        <a href="categories.php" class="btn btn-primary">Voir plus</a>
    </div>
</div>






<nav class="navbar bg-dark navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">BI2 - Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Categories">Mes compétences</a>
                </li>
            </ul>
        </div>
    </div>
</nav>