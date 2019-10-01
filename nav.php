<?php
    require_once('Config\Autoload.php');
    include('Process/checkUserLogged.php');
?>
<nav >
    <a href="#">MoviePass</a>
    <button >
        <span></span>
    </button>

    <div>
        
        <ul>
            <li>
                <a href="/examen_c1/posts.php">Posts</a>
            </li>
            <li>
                <a href="/examen_c1/Process/logout.php">Logout</a>
            </li>
        </ul>
        <span >
            <strong>(Hola <?php echo $_SESSION['loggedUser']->getFirstName(); ?>)</strong>
        </span>
    </div>
</nav>