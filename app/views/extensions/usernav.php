<nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">My Site</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
    	<form method="POST" action="logout">
	      <li class="has-form">
			  	<button type="submit" class="button radius small">Logout</button>
				</li>
      </form>
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
      <li><a href="#"><?php echo Auth::user()->name; ?></a></li>
    </ul>
  </section>
</nav>