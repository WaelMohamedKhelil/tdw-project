        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                    <?php
                    session_start();
                    if(empty($_SESSION))
                    echo '<div class="input-group mb-3">'.
                        '<input id="username" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">'.
                    '</div>'.
                    '<div class="input-group mb-3">'.
                        '<input id="password" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">'.
                    '</div>'.
                    '<div class="input-group mb-3">'.
                        '<button id="connect-btn" type="button" class="btn btn-primary btn-block">s\'identifier</button>'.
                    '</div>';
                    else{
                        
                        echo'<div class="input-group mb-3">'.
                        '<button id="disconnect-btn" type="button" class="btn btn-primary btn-block">Se déconnecter</button>'.
                        '</div>';
                        if( $_SESSION["user_privilege"] == 3)
                        echo'<div class="input-group mb-3">'.
                        '<a href="edit" id="edit-btn" type="button" class="btn btn-danger btn-block">Editer</a>'.
                        '</div>';
                    }
                        ?>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            Accueil <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="compare">
                            Comparer ? 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="maternelle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                            Maternelle
                        </a>
                    </li>    <li class="nav-item">
                        <a class="nav-link" href="primaire">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                            Primaire
                        </a>
                    </li>    <li class="nav-item">
                        <a class="nav-link" href="moyen">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                            Moyen
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="secondaire">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                            Secondaire
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formation-professionnelle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                            Formation professionnelle
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="universitaire">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                            Universitaire
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                            à propos
                        </a>
                    </li>
                </ul>
            </div>
        </nav>


