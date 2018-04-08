
<nav class="navbar navbar-light bg-light justify-content-between">
	<a href="/" class="nav-brand btn btn-outline-secondary" role="button" aria-pressed="true">Home</a>
    <?php if(isset($_SESSION['user'])): ?><a href="/logout" class="btn btn-outline-dark my-2 my-sm-0">Log out</a><?php endif; ?>
</nav>