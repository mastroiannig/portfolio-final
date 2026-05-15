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